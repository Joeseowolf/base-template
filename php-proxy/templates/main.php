<!DOCTYPE html>
<html>
<head>

<title>KOMINFOBuster</title>

	<meta name="generator" content="php-proxy.com">
	<meta name="version" content="<?=$version;?>">
	<link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />
	<link rel="stylesheet" href="/php-proxy/templates/skin.css" />
</head>

<body>


<div id="container" class="container uk-container">

	<div class="header-title">
		<h1>BUKA BLOKIR SITUS GRATIS</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error" class="error-message uk-animation-slide-top">
		<p><?php echo $error_msg; ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm" class="form-url">
	
	<!-- I wouldn't touch this part -->
	
		<form class="proxy-action" action="index.php" method="post" style="margin-bottom:0;">
			<input class="url-box" name="url" type="text" autocomplete="off" placeholder="http://" />
			<input class="submit-btn" type="submit" value="BUKA SITUS" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
		
	<!-- [END] -->
	
	</div>
	
</div>

<div id="footer">
	Powered by <a href="/">KOMINFOBuster</a> <?php echo $version; ?>
</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js"></script>
</body>
</html>