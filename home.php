<?php
session_start();
if(!session_is_registered(myusername)){
header("location:login.html");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Part Time Jobs</title>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
</head>

<body>
<div>
<h1><center style="font-style: italic; color: #E92125; text-shadow: 2px 0px;">Ecomm Genes</center></h1>
</div>
<div id="Tabs1">
  <ul>
    <li><a href="#tabs-1">Home</a></li>
    <li><a href="#tabs-2">About Us</a></li>
    <li><a href="#tabs-3">ContactUs</a></li>
    <li><a href="#tabs-4">FAQs</a></li>
    <li><a href="#tabs-5">Plans</a></li>
	<li><a href="#tabs-6">Logout</a></li>
  </ul>
  <div id="tabs-1">
    <p>
    <div >
    	<p>Successful Login!</p>
     </div>
    </p>
   
  </div>
  <div id="tabs-2">
    <p>Content 2</p>
  </div>
  <div id="tabs-3">
    <p>Content 3</p>
  </div>
  <div id="tabs-4">
    <p>Content 1</p>
  </div>
  <div id="tabs-5">
    <p>Content 2</p>
  </div>
<div id="tabs-6">
    <p><input type="submit" name="logout" value="Logout" onClick="Logout.php"/></p>
  </div>
  
</div>
<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>
