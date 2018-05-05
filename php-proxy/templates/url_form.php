<!DOCTYPE html>
<html>
<head>

<title>KOMINFOBuster</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">

<link href="https://fonts.googleapis.com/css?family=Share+Tech" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css" />

</head>

<body>
<style type="text/css">

html {
	margin-top: 50px !important;
	background: #000;
}


#top_form {
	position: fixed;
	top:0;
	left:0;
  width: 100%;
  height: 50px;
  margin:0;
  background: rgba(2, 62, 96, .5);
  border-bottom: solid 1px rgba(2, 62, 96, .8);
  z-index: 2100000000;
    -moz-user-select: none; 
    -khtml-user-select: none; 
    -webkit-user-select: none; 
    -o-user-select: none;
  line-height:45px;
}

#top_form input[name=url] {
	width: 350px;
	margin-right: 20px;
	padding: 10px 20px;
	background: #000;
	background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -moz-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -ms-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -o-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	font-family: 'Share Tech', sans-serif;
	color: #fff;
	border: solid #1f638d 1px;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
	border-radius: 0px;
		-webkit-box-shadow: 0px 1px 3px #666;
		-moz-box-shadow: 0px 1px 3px #666;
	box-shadow: 0px 1px 3px #666;
	text-decoration: none;
}

#top_form input[name=home],
#top_form input[name=go] {
	padding: 10px 20px;
	background: #000;
	background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -moz-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -ms-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: -o-linear-gradient(top, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	background-image: linear-gradient(to bottom, rgba(0, 0, 0, .5), rgba(0, 0, 0, .2));
	font-family: 'Share Tech', sans-serif;
	font-weight: bold;
	color: #fff;
	border: solid #1f638d 1px;
		-webkit-border-radius: 0;
		-moz-border-radius: 0;
	border-radius: 0px;
		-webkit-box-shadow: 0px 1px 3px #666;
		-moz-box-shadow: 0px 1px 3px #666;
	box-shadow: 0px 1px 3px #666;
	text-decoration: none;
}

</style>

<script>
var url_text_selected = false;

function smart_select(ele){

	ele.onblur = function(){
		url_text_selected = false;
	};
	
	ele.onclick = function(){
		if(url_text_selected == false){
			this.focus();
			this.select();
			url_text_selected = true;
		}
	};
}
</script>

<div id="top_form" class="top-bar">

	<div style="width:800px; margin:0 auto;">
	
		<form method="post" action="index.php" target="_top" style="margin:0; padding:0;">
			<input type="button" name="home" value="HOME" onclick="window.location.href='index.php'">
			<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
			<input type="hidden" name="form" value="1">
			<input type="submit" name="go" value="AKSES LINK">
		</form>
		
	</div>
	
</div>

<script type="text/javascript">
	smart_select(document.getElementsByName("url")[0]);
</script>
