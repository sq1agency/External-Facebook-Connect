<!DOCTYPE html>
<html>
	<head>
		<title>Practice Facebook App for the new EatWholly.com</title>
		<script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$(button).click(function() {
					FB.login(function(responseLogin) {
					    if (responseLogin.session) {
					        // user is logged in
					        // uid is in responseLogin.session.uid
					        // just explore the whole object with console.log(responseLogin);
							alert('logged in');
					    } else {
					        // refused to grant the permissions'
							alert('refused permissions');
					    }
					}, { perms:'offline_access,email' }); // example of perms
				});
			});
		</script>
	</head>
	<body>
		<div id="fb-root"></div>
		    <script src="http://connect.facebook.net/en_US/all.js"></script>
		    <script>
		        FB.init({ 
		            appId:'326513144081660', 
		            cookie:true, 
		            status:true, 
		            xfbml:true,
		            oauth:true
		        });
		    </script>
		    <button>login to facebook</button>
	</body>
</html>