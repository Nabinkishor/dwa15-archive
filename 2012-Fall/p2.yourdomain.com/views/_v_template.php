<!DOCTYPE html>
<html>
<head>
	<title><?=@$title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- JS -->
	<script src="/js/jquery.js"></script>
				
	<!-- Controller Specific JS/CSS -->
	<?=@$client_files; ?>
	
</head>

<body>	

	<?=$content;?>
	
	<!-- ADD THIS SOMEWHERE IN YOUR MASTER TEMPLATE (OR WHEREEVER YOU WANT IT TO APPEAR) --> 
	<? if (!$user->twitter->connected): ?>  	
		You are <strong>not</strong> connected to Twitter. <a href='/twitter/redirect'>Would you like to connect?</a>
	<? else: ?>
		You are connected to Twitter. <a href='/twitter/clearsessions'>Disconnect</a>
	<? endif; ?>
		
	
	<!-- This is the notification box for our pubnub message; using inline styles just for demo purposes -->
	<div style='padding:4px; display:none; position:fixed; top:5px; right:5px; background-color:aqua' id='pubnub_message'></div> 

</body>


<!-- Info needed for pubnub -->
<div pub-key="demo" sub-key="demo" ssl="off" origin="pubsub.pubnub.com" id="pubnub"></div>
 
<!-- Include the pubnub file -->
<script src="http://pubnub.s3.amazonaws.com/pubnub-3.3.1.min.js"></script>
 
<script type='text/javascript'>
 
	// Create a pubnub connection to the new_posts channel
	PUBNUB.subscribe({
		channel    : "new_posts",      
	    restore    : false,            
	    callback   : function(message) { 
	        
	        // Example message: {"content":"Hello World","user_id":"140","created":1355302709,"modified":1355302709,"first_name":"Susan","new_post_id":20} 
	        
	        // Parse the results
	        var message = jQuery.parseJSON(message);
 
			// Don't show a notification if it was this user that made the post	        	        
	        if(message['user_id'] != <?=$user->user_id?>) {
	        
	        	// First make sure the notification box is turned off before we try to turn it on
		        $('#pubnub_message').hide();
		        
		        // Put our message in the notification box
		        $('#pubnub_message').html(message['first_name'] + " created a new post");
		        
		        // Fade in the message
		        $('#pubnub_message').fadeIn('slow');  
		        
		        // After 3 seconds, fade out the message
		        setTimeout(function() { $('#pubnub_message').fadeOut('slow') } , 3000);
		     }
	            
	     },
	});
 
</script>


</html>