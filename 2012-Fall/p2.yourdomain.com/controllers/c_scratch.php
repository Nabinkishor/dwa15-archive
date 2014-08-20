<?php

class scratch_controller extends base_controller {

	public function search() {
	
		$term = "test";
	
		$q = "SELECT posts.*, users.user_id, users.first_name, users.last_name, cities.city_id, cities.city_name
		FROM posts
		JOIN users USING (user_id)
		JOIN cities USING (city_id)
		WHERE content LIKE '%".$term."%'";
		
		echo $q;
	
	
	}


	/*-------------------------------------------------------------------------------------------------
	demo for Eoin
	-------------------------------------------------------------------------------------------------*/
	public function parser() {
	
		# Create a view to display out results
			$this->template->content = View::instance("v_scratch_display_parser");
			
			echo $this->template->content;
	}

	/*-------------------------------------------------------------------------------------------------
	demo for Eoin
	-------------------------------------------------------------------------------------------------*/
	public function get_site() {
	
		/* Attempts via cURL */
			# Success
			//$results = Utils::curl("http://photojojo.com");
			
			# Fail: default "Redirect" response (301)
			//$results = Utils::curl("http://yahoo.com");
			
			# Success: sans styles
			//$results = Utils::curl("http://dribbble.com");
			
			# Success: sans images
			//$results = Utils::curl("https://docs.google.com/document/pub?id=1x_OTgvRcIsNYVYKn9pbJN-_9l-_OWZUX7wYIsHaXYE8");
		
		
		/* Attempts via fopen */
			# Success: styles a little messed up
			//results = self::__loadFile("http://google.com");
									
			# Success: sans styles
			//$results = self::__loadFile("http://dribbble.com");
			
			# Success: sans images
			//$results = self::__loadFile("https://docs.google.com/document/pub?id=1x_OTgvRcIsNYVYKn9pbJN-_9l-_OWZUX7wYIsHaXYE8");
			
			# Sucess
			$results = self::__loadFile("http://yahoo.com");
			
		# Contents get rendered to page, which is loaded in iframe from parser() method
		echo $results;
		
	
	}
	
	/*-------------------------------------------------------------------------------------------------
	Helper function for the above method
	-------------------------------------------------------------------------------------------------*/
	public static function __loadFile($sFilename, $sCharset = 'UTF-8') {
	    if (floatval(phpversion()) >= 4.3) {
	        $sData = file_get_contents($sFilename);
	    } else {
	        if (!file_exists($sFilename)) return -3;
	        $rHandle = fopen($sFilename, 'r');
	        if (!$rHandle) return -2;
	
	        $sData = '';
	        while(!feof($rHandle))
	            $sData .= fread($rHandle, filesize($sFilename));
	        fclose($rHandle);
	    }
	    if ($sEncoding = mb_detect_encoding($sData, 'auto', true) != $sCharset)
	        $sData = mb_convert_encoding($sData, $sCharset, $sEncoding);
	    return $sData;
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	Demo for shrikant 
	-------------------------------------------------------------------------------------------------*/
	public function get_stocks() {
	
		# Where we'll get our data
		$url = "http://ichart.finance.yahoo.com/table.csv?s=MSFT&d=11&e=15&f=2012&g=d&a=2&b=13&c=1986&ignore=.csv";
	
		# use cURL to ping the above URL
		$results = Utils::curl($url);
		
		# Convery the huge CSV string to a PHP array (http://stackoverflow.com/questions/7502370/converting-csv-to-array)
		$results = array_map("str_getcsv", preg_split('/\r*\n+|\r+/', $results));
		
		# Debug the results
		echo Debug::dump($results,"");
	
	}
	

	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function multiple_views_example() {
	
		# Load the first view
		$view1 = View::instance("v_scratch_view1");
		
		# Load the second view in the first view
		$view1->view2 = View::instance("v_scratch_view2");
		
		# Render the first view
		echo $view1;
	
	}
	
	
	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function email_test() {

		$_POST['email'] = "susan@susanbuck.net";
		$_POST['full_name'] = "Susan Buck";
		
	    $to[] = Array("name" => $this->user->first_name, "email" => $_POST['email']);
	    $from = Array("name" => APP_NAME, "email" => APP_EMAIL);
	    $subject = "Welcome to SumADay!";
	    $body = "Hi ".$_POST['full_name'].", <br>Thanks for joining " . APP_NAME . '! Click <a href="http://www.sumaday.com" title="First Summary">here</a> to post your first entry.';
	    $cc = "";
	    $bcc = "";
	    $email = Email::send($to, $from, $subject, $body, true, $cc, $bcc);
	    
	}
	
	
}