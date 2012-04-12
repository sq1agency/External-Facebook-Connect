<?php
require_once "src/facebook.php";
$facebook = new Facebook(array(
        'appId'=>'326513144081660', // replace with your value
        'secret'=>'2393a5b2aaec9de56dce79c68e004b0d' // replace with your value
            ));
    $signedRequest = $facebook->getSignedRequest();
	$like_status = $signed_request["page"]["liked"];
	$page_id = $signed_request['page']['id'];
	
	if($like_status) {
		echo "TRUE";
	} else {
		echo "FALSE";
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practice Facebook App for the new EatWholly.com</title>
	</head>
	<body>
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=144352525664156";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like" data-href="https://www.facebook.com/WhollyGuacamole" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true" data-font="arial"></div>
	</body>
</html>