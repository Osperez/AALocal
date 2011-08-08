<!DOCTYPE HTML>
<html>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>AA.com Employee Directory</title>
		<link href="css/main.css" rel="stylesheet" media="screen,projection">
		
		<!-- 1140px Grid styles for IE -->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
		<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
		<script type="text/javascript" src="js/modernizr-2.0.6.js"></script>
		<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
		
		<!--[if lte IE 8]>
		<script type="text/javascript" src="js/html5.js"></script>
		<![endif]-->
</head>

<body>

<div id="ajaxCall"><h2>Let AJAX change this text</h2></div>
<button id="ajaxCallbtn-trigger">Change the Content on DIV</button>



<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script> 
		<script type="text/javascript" src="js/jQuery.fileinput.js"></script> 
		<script type="text/javascript" src="js/engage.itoggle-min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="js/aaPlaceHolder.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#ajaxCallbtn-trigger").click(function(){
		$.ajax({
			url:"test1.txt", success:function(result){
				$("#ajaxCall").html(result);
			}
		});
	});
});
</script>

</body>
</html>