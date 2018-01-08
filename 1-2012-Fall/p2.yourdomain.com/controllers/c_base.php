<?php

class base_controller {
	
	public $user;
	public $userObj;
	public $template;
	public $email_template;

	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
  # Instantiate User obj
		$this->userObj = new User();
		
	# Authenticate / load user
		$this->user = $this->userObj->authenticate();					
					
	# Set up templates
		$this->template 	  = View::instance('_v_template');
		$this->email_template = View::instance('_v_email');			
							
	# So we can use $user in views			
		$this->template->set_global('user', $this->user);
		
	# Is this user connected to Twitter?
		if($this->user) {
			# Ideally these constants should be in config.php but leaving here for demonstration purposes.	
			define('CONSUMER_KEY', 'DaCTGU1jK93WxrZ5RKg');
			define('CONSUMER_SECRET', 'H9DS2HoWBv8PEseeg2bpQj9Ho9A0lq3GJgqEPRvfZ8');
			
			# Create object in user object to store twitter related data
			$this->user->twitter = new stdClass;
 
			# First, find out if they're already conected
			if (empty($_SESSION['access_token']) || empty($_SESSION['access_token']['oauth_token']) || empty($_SESSION['access_token']['oauth_token_secret'])) {
				$this->user->twitter->connected = FALSE;
			}
			else {
				$this->user->twitter->connected  = TRUE;
				
				# Get user access tokens out of the session. 
				$access_token = $_SESSION['access_token'];
 
				# Create a TwitterOauth object with consumer/user tokens. 
				$this->user->twitter->connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
			}
		}
				
		
}	
} # eoc
