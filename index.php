<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("/navigator");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<html>
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<title>Template Ace</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header --><div align="center" id="login">
			<header id="header">
				<h1>Template Ace 2.0</h1>
			</header>

		<!-- Signup Form -->
			<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<input type='text' name='username' id='username' placeholder="Username" value='<?php echo $fgmembersite->SafeDisplay('username') ?>' /><br/>
        <input width="50" type='password' name='password' id='password' placeholder="Password" /><br/>
        <input type='submit' name='Submit' class="btn btn-primary btn-block btn-large" value='Submit'>
        <input style="margin-top: 10px" type='button' onclick="window.location.href = 'https://templateace.xyz/source/reset-pwd-req.php';" class="btn btn-primary btn-block btn-large" value='Reset Password'>
</form></div>
		<!-- Footer -->
			<div align="center" id="footer">

					<div id="socialmedia">
                <a href="https://www.facebook.com/groups/162559670970354/" target="_blank"><img class="facebook" src="https://www.shareicon.net/download/2015/10/04/112091_facebook.svg" width="54" height="54"></a>
                <a href="https://discord.gg/z8XecMy" target="_blank"><img src="https://www.shareicon.net/download/2016/12/30/866945_game.svg" width="54" height="54"></a>
                <a href="https://t.me/templateacexyz" target="_blank"><img src="https://www.shareicon.net/download/2015/10/04/112103_telegram.svg" width="54" height="54"></a>
                <a href="https://templateace.xyz/history/" target="_blank"><img src="https://www.shareicon.net/download/2015/10/04/112105_wordpress.svg" width="54" height="54"></a>
                    </div>
				<ul class="copyright">
                    <li>&copy; 2017 Template Ace</li>
                    <li><a target="_blank" href="privacypolicy.html">Privacy Policy</a></li>
                    <li><a target="_blank" href="terms.html">Terms of Service</a></li>
				</ul>
			</div>
        
		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>