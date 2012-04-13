<?php
require_once "src/facebook.php";
$facebook = new Facebook(array(
        'appId'=>'326513144081660', // replace with your value
        'secret'=>'2393a5b2aaec9de56dce79c68e004b0d' // replace with your value
            ));

			$user = $facebook->getUser();

			if ($user) {
			  try {
			    $likes = $facebook->api("/me/likes/149214809611");
			    if( !empty($likes['data']) )
			        echo "I like!";
			    else
			        echo "not a fan!";
			  } catch (FacebookApiException $e) {
			    error_log($e);
			    $user = null;
			  }
			}

			if ($user) {
			  $logoutUrl = $facebook->getLogoutUrl();
			} else {
			  $loginUrl = $facebook->getLoginUrl(array(
			    'scope' => 'user_likes'
			  ));
			}

			// rest of code here
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practice Facebook App for the new EatWholly.com</title>
	</head>
	<body>

	</body>
</html>