<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        #echo "users_controller construct called<br><br>";
    } 

    public function index() {
    
        
    echo "This is the index page";
    
    }

	/*-------------------------------------------------------------------------------------------------
	SIGNUP
	-------------------------------------------------------------------------------------------------*/

    public function signup() {
    
        # Setup view
        $this->template->content 			= View::instance('v_users_signup');
    	$this->template->content->unique 	= true;
        $this->template->title   			= "Sign Up";
        $this->template->body_id 			= 'signup';

        # Render template
            echo $this->template;
            
    }
    
    // Helper function to validate field trim (empty fields in signup)
    private function areFieldsFull() {
    
    	if(trim($_POST['first_name']) == false) {
    		return false;
		} elseif(trim($_POST['last_name']) == false) {
    		return false;
		} elseif(trim($_POST['email']) == false) {
    		return false;
    	} elseif(trim($_POST['password']) == false) {
    		return false;
    	}
  		else{
    		// if all is well, we return TRUE
    		return TRUE;
    	}    	
    	
    }
  
    // Helper function to determine duplicate email
    private function unique_email() {
    
		//Make sure it's sanitized first
		$_POST = DB::instance(DB_NAME)->sanitize($_POST);
    	
    	// Search the db for this email
    	$q = "SELECT COUNT(*) 
        		FROM users 
        		WHERE email  = '" .$_POST['email']. "'";
        
		// Run the query, echo what it returns	
		$count = DB::instance(DB_NAME)->select_field($q);
	        		
		if($count > 0) {
			// If there is a match $q will be greater than 0
			return false;
		}
		else{
			return true;
		}
    
    }
    
    public function p_signup() {

        // Dump out the results of POST to see what the form submitted
        #echo '<pre>'
        #print_r($_POST);
        #echo '</pre>'
            	
		// Using Helper function to check for duplicate emails
    	$unique = $this->unique_email();
    	
    	if(!$unique || !$this->areFieldsFull()) {
    	
    		// Setup view
        	$this->template->content = View::instance('v_users_signup');
        	#$this->template->title   = "Signup";
        	#$this->template->body_id = 'signup';

    		// Pass data to the view
    		$this->template->content->error = true;
    		$this->template->content->unique = $unique;
    	
    	// Render template
        echo $this->template;
        #echo "This is the login page";
        
    		// Send them back to the signup page
        	// Signin failed ... maybe give 'forgot password' option to reset password.
        	//echo "You already have an account";
        	//Router::redirect("/users/signup/error");
    	} 
    	else{
    	
        // More data we want stored with the user
        // I had to move it after my error check for empty because password was
        // getting salted and hashed so it was never empty
    	$_POST['created']  = Time::now();
    	$_POST['modified'] = Time::now();
    	
    	// Encrypt the password with salt
    	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
    	
    	// This is how we will determine if the user is logged in
    	// Create an encrypted token via their email address and a random string
    	$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        // Insert this user into the database
    	$user_id = DB::instance(DB_NAME)->insert('users', $_POST);
    	
    	// In class additions ???
    	#DB::instance(DB_NAME)->insert_row('users', $_POST):
    	
    	// For now, just confirm they've signed up - 
    	// You should eventually make a proper View for this
    	#echo 'You\'re signed up'; 
    	
    	// Send them to the login page
    	Router::redirect('/users/login');
    	}
    	
    }
    
	/*-------------------------------------------------------------------------------------------------
	EDIT
	-------------------------------------------------------------------------------------------------*/

    public function edit() {
    
        // If user is blank, they're not logged in; redirect them to the login page
    	if(!$this->user) {
        	#Router::redirect('/users/edit')
        	die('You must signup or log in before you can edit your profile. <a href="/">Home</a>');
    	}
        
        # Setup view
        $this->template->content = View::instance('v_users_edit');
        $this->template->content->error = Null;
    	$this->template->content->unique = true;
        $this->template->title   = "Edit Profile";
        #$this->template->body_id = 'edit';
        
		// Render template
		echo $this->template;
        
        // echo "This is the edit profile page";
    }
    
    public function p_edit() {
    
		if(!$_POST) {
			Router::redirect('/users/edit');
			return;
		}

		// Create an array ($valid_fields) to drop out empty fields and replace the $_POST
		$valid_fields = Array();
			
			// If the password is empty drop it
			if((trim($_POST['password'])=="")) {
 				unset($_POST['password']);
				}
				else {
					// Otherwise salt it
		    		$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
			}
	
		// Using Helper function to check for duplicate emails
    	$unique = $this->unique_email();
    			
		// Loop through the POST data
		foreach($_POST as $field_name => $value) {
                
			// Trim out the empty fields
        	if(!(trim($value)=="")) {
        	
	        #	$valid_fields[$field_name] = stripslashes(htmlspecialchars($value));
				$valid_fields[$field_name] = $value;
        	#echo $field_name."<br/>";
        	}
        	
 		}
 		
        // Add additional data to the database
    	$valid_fields['modified'] = Time::now();  
		
		// Is email changing
		if($valid_fields['email'] == $this->user->email) {
			// if email didn't change
			$valid_email = true;
		} else {
			// if email did change
			if($this->unique_email()) {
				$valid_email = true;
			} else {
				$valid_email = false;
			}
		}
		
		if($valid_email == true) {
		
    		// Encrypt the password with salt
    		# $valid_fields['password'] = sha1(PASSWORD_SALT.$_POST['password']);
    	
    		// Update database straight from the $_POST/$valid_fields array, similar to insert in sign-up
			echo DB::instance(DB_NAME)->update('users', $valid_fields, "WHERE user_id =" .$this->user->user_id);

    		// Code here to redirect them somewhere else
    		Router::redirect('/posts');
		} else {
		
			// Setup view
        	$this->template->content = View::instance('v_users_edit');
        	#$this->template->title   = "Signup";
        	#$this->template->body_id = 'signup';

    		// Pass data to the view
    		$this->template->content->error = true;
    		echo $this->template;		
		}
    				
    }
    
	/*-------------------------------------------------------------------------------------------------
	LOGIN
	-------------------------------------------------------------------------------------------------*/

    public function login($error = NULL) {
    	
    	/* Code for controller specific css and js place in _v 
        // Create an array for all the client files
        // Method inside the utilities library to help with this
        $client_files_head = Array(
            '/css/master.css'
        );
            
        // Use load_client_files to generate the links from the above array
        $this->template->client_files_head = Utils::load_client_files($client_files_head);    
        
        // Create an array of 1 or many client files to be included before the closing </body> tag
        $client_files_body = Array(
            '/js/widgets.min.js',
            '/js/profile.min.js'
        );
            
        // Use load_client_files to generate the links from the above array
        $this->template->client_files_body = Utils::load_client_files($client_files_body);
        */      
 
        // Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";
        $this->template->body_id = 'login';

        	
    	// Pass data to the view
    	$this->template->content->error = $error;

    	// Render template
        echo $this->template;
        #echo "This is the login page";
                	
    }
    
    public function p_login() {
    
    	// Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
    	$_POST = DB::instance(DB_NAME)->sanitize($_POST);
    	
    	// Hash submitted password so we can compare it against one in the db
    	$_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
    	
    	// Search the db for this email and password
    	// Retrieve the token if it's available
    	$q = "SELECT token 
        		FROM users 
        		WHERE email  = '".$_POST['email']."' 
        		AND password = '".$_POST['password']."'";
        	
		$token = DB::instance(DB_NAME)->select_field($q); 
        	
        // If we found a matching token, login succeeded! 
    	if($token) {
    	
    	    /* 
        	Store this token in a cookie using setcookie()
        	Important Note: *Nothing* else can echo to the page before setcookie is called
        	Not even one single white space.
        	param 1 = name of the cookie
        	param 2 = the value of the cookie
        	param 3 = when to expire
        	param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
        	*/
        	
        	// ToDo: Authenticate by checking the browser for this cookie and if it exists we know they're logged in
        	setcookie("token",$token, strtotime('+2 weeks'), '/');

        	// Send them to the main page - or whever you want them to go
        	// This is the index page ... maybe send them to posts.php
        	Router::redirect("/posts");
        	
        	#echo '<pre>';
			#print_r($this->user);
			#echo '</pre>';
        
        // But if we didn't, login failed
    	} else {

        	// Send them back to the login page
        	// Login failed ... maybe give 'forgot password' option to reset password.
        	Router::redirect("/users/login/error");
    	}
    	
    }
    
	/*-------------------------------------------------------------------------------------------------
	LOGOUT
	-------------------------------------------------------------------------------------------------*/

    public function logout() {
    
        // Generate and save a new token for next login
    	$new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

    	// Create the data array we'll use with the update method
    	// In this case, we're only updating one field, so our array only has one entry
    	$data = Array("token" => $new_token);

    	// Do the update
    	DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

    	// Delete their token cookie by setting it to a date in the past - effectively logging them out
    	setcookie("token", "", strtotime('-1 year'), '/');

    	// Send them back to the main index.
    	Router::redirect("/");
    
        #echo "This is the logout page";
        
    }
	/*-------------------------------------------------------------------------------------------------
	PROFILE
	-------------------------------------------------------------------------------------------------*/
    
    public function profile($user_name = NULL) {
    
    	// Don't have to do this because it's already in the base_controller
    	#$template = View::instance('_v_template');
    	
    	// If user is blank, they're not logged in; redirect them to the login page
    	if(!$this->user) {
        	#Router::redirect('/users/login')
        	die('Members only. <a href="/users/login">Login</a>');
    	}

    	// If they were not redirected away, continue:
    	
    	/*
    	If you look at _v_template you'll see it prints a $content variable in the <body>
    	Knowing that, let's pass our v_users_profile.php view fragment to $content so 
    	it's printed in the <body>
    	*/

    	// Pass our view fragment to the master template content
    	// Set up the View (see Cheat Sheet)
    	$this->template->content = View::instance('v_users_profile');
    	$this->template->content->moreContent = View::instance('v_users_edit');

    	// Set page title
    	$this->template->title = "Profile of".$this->user->first_name;
    	    	
    	// Pass information to the view fragment
    	$this->template->content->user_name = $user_name;
    	// Set the body id for the highlightnavigation.js
    	$this->template->body_id = 'profile'; 
    	
    	// Or
    	// In class suggestion of creating a variable to pass data
    	#$content = View::instance('v_users_profile');
    	#$content->user_name = $user_name;
    	#$this->template->content = $content;
    	  	
    	// We just need to access it
    	// Display the view
    	echo $this->template;
    
    	// Below is the isolated view fragment ... 
    	// Above, we recreated this view and  passed it to the master template
    	#$view = View::instance('v_users_profile');	
    	// On the fly pass it a variable
    	#$view->user_name = $user_name;
    	//$view->color = "red";
    	
    	// You should only ever have one echo in you controllers 
    	// and that is to echo at the end of the file
    	#echo $view;

        #if($user_name == NULL) {
        #    echo "No user specified";
        #}
        #else {
        #    echo "This is the profile for ".$user_name;
        #}
    }

} # end of the class
