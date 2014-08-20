<?php

class parser_controller extends base_controller {


	/*-------------------------------------------------------------------------------------------------
	
	-------------------------------------------------------------------------------------------------*/
	public function index() {
	
		$this->template->content = View::instance("v_parser_index");
		echo $this->template->content;
		
	}

	/*-------------------------------------------------------------------------------------------------
	This method gets loaded into the iframe from the view in the index() method above
	-------------------------------------------------------------------------------------------------*/
	public function get_site() {
	
		/* Tests via cURL */
			# Success
			//$results = Utils::curl("http://photojojo.com");
			
			# Fail: default "Redirect" response (301)
			//$results = Utils::curl("http://yahoo.com");
			
			# Success: sans styles
			//$results = Utils::curl("http://dribbble.com");
			
			# Success: sans images
			//$results = Utils::curl("https://docs.google.com/document/pub?id=1x_OTgvRcIsNYVYKn9pbJN-_9l-_OWZUX7wYIsHaXYE8");
		
		
		/* Tests via fopen */
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
	
		
}