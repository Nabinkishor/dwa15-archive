<form method='POST' action='/posts/p_add'>

	<h2>Add a post</h2>
	<textarea name='content'></textarea>
	
	<br><br>
	<input type='submit'>

</form>

<div id='results'></div>

<script type='text/javascript'>
	
	// Ajax call to add the new post
	var options = { 
		type: 'POST',
		url: '/posts/p_add/',
		beforeSubmit: function() {
			$('#results').html("Adding...");
		},
		success: function(response) { 
	
			$('#results').html("Your post was added!");
			
			// Send a message to the "new_posts" pubnub channel. The response we should get back is a json string.
			PUBNUB.publish({            
		    	channel : "new_posts",
		    	message : response,
			});
		} 
	}; 
			
	$('form[name=new-post]').ajaxForm(options);
	
</script>