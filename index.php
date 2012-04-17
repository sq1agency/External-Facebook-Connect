<!DOCTYPE html>
<html>
   <head>
     <title>My Facebook Login Page</title>
   </head>
   <body>
	<!--<script src="http://connect.facebook.net/en_US/all.js"></script>
	<fb:login-button autologoutlink="true"></fb:login-button>
		<script language="javascript" type="text/javascript">
		    FB.init({
		        appId: '430244256991040',
		        status: true,
		        cookie: true,
		        xfbml: true
		    });
		</script>
		<button onclick="ShowMyName()">What's my name?</button>
			<script language="javascript" type="text/javascript">
			function ShowMyName() {
			        FB.api("/me",
			                function (response) {
			                    alert('Name is ' + response.name);
			                });
			 
			    }
			</script>-->
			<div id="fb-root"></div>
			<div class="fb-login-button" scope="user_likes">Login with Facebook to get your Coupon!</div>
			<script>
			   window.fbAsyncInit = function() {
			     FB.init({
			       appId      : '430244256991040',
			       status     : true, 
			       cookie     : true,
			       xfbml      : true,
			       oauth      : true,
			     });
			   };
			   (function(d){
			      var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
			      js = d.createElement('script'); js.id = id; js.async = true;
			      js.src = "//connect.facebook.net/en_US/all.js";
			      d.getElementsByTagName('head')[0].appendChild(js);
			    }(document));
			 </script>	
			<button onclick="DoYouLike()">Do you like Wholly Guacamole?</button>
			<script language="javascript" type="text/javascript" charset="utf-8">
			function DoYouLike() {
				FB.api('/me/likes/149214809611',function(response) {
				    if( response.data ) {
				        if( !isEmpty(response.data) )
				            alert('You are a fan!');
				        else
				            alert('Not a fan!');
				    } else {
				        alert('ERROR!');
				    }
				});

				// function to check for an empty object
				function isEmpty(obj) {
				    for(var prop in obj) {
				        if(obj.hasOwnProperty(prop))
				            return false;
				    }

				    return true;
				}
			}
			</script>
   </body>
</html>