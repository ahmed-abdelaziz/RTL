<?php
$ltr="";
$rtl="";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  	@include("flipper.php");
	$fliper = new Flipper();
	$ltr = $_POST["ltr"];
	$rtl = $fliper->parse_css($_POST["ltr"]);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LTR to RTL</title>
<meta name="author" content="Ahmed Abdelaziz">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<style>
*{margin:0px;padding:0px;box-sizing:border-box;-webkit-box-sizing:border-box}body{font-family:Tahoma;}.wrap{max-width:600px;margin:0px auto;}#wrapper{max-width:600px;margin:20px auto;border:1px solid #DDD;border-radius:3px;padding:50px;background:#f4f4f4}.clear{clear:both;}.right{float:right;}.left{float:left;}.center{text-align:center;margin:auto;}textarea{height:200px;width:100%;max-width:500px;}input[type="submit"]{padding:5px 10px;font:bold 12px Tahoma;margin:5px auto;}.green-btn{color:#fff;background:#82b440;border:1px solid #82b440;border-bottom:3px solid #6f9a37;border-radius:2px;}.green-btn:hover{background:#6f9a37;border:1px solid #6f9a37;border-bottom:3px solid #6f9a37;}header{width:100%;border-bottom:1px solid #CCC;background:#f4f4f4}footer{width:100%;height:50px;padding:10px 50px;border-top:1px solid #CCC;background:#f4f4f4;margin-top:20px;}h1,h2,h3,h4,h5,h6{font-family:"Open Sans";}nav ul{}nav ul li{list-style:none;float:left}nav ul li a{text-decoration:none;font-weight:bold;}nav ul li a:hover{text-decoration:underline}#content{width:100%;border-top:1px solid #DDD;}.title{text-align:left;width:100%;}.title span{font-size:12px;color:#666;}.tips{width:100%;border:1px solid #CCC;border-radius:5px;margin:10px 0px;}.tips p{padding:5px;font:12px Tahoma;}.code{border-top:1px solid #DDD;width:100%;padding:5px;margin:0px;white-space:pre-line;border-radius:0px 0px 5px 5px;}

pre{background:#141414;word-wrap:break-word;margin:0px;padding:10px;color:#F8F8F8;font-size:14px;margin-bottom:20px;}pre,code{font-family:'Monaco',courier,monospace;}pre .comment{color:#5F5A60;}pre .constant.numeric{color:#D87D50;}pre .constant{color:#889AB4;}pre .constant.symbol,pre .constant.language{color:#D87D50;}pre .storage{color:#F9EE98;}pre .string{color:#8F9D6A;}pre .string.regexp{color:#E9C062;}pre .keyword,pre .selector,pre .storage{color:#CDA869;}pre .inherited-class{color:#9B5C2E;}pre .entity{color:#FF6400;}pre .support{color:#9B859D;}pre .support.magic{color:#DAD69A;}pre .variable{color:#7587A6;}pre .function,pre .entity.class{color:#9B703F;}pre .support.class-name,pre .support.type{color:#AB99AC;}
</style>
</head>
<body>
<header>
<div class="center"><h1>LTR to RTL Converter for CSS</h1> </div>
</header>
<div id="wrapper">
<form action="" method="post">
<label> LTR CSS: </label><textarea id="ltr" name="ltr" class="prettyprint">
<?=$ltr?>
</textarea><div class="clear"></div>
<label> RTL CSS: </label><textarea id="rtl" name="rtl">
<?=$rtl?>
</textarea><div class="clear"></div>
<input name="submit" id="submit" class="green-btn right" type="submit" value="Convert"/>
</form>
</div>
<section id="content">
<div class="wrap">
<div class="title"><h2>How To Use: <span>In regular projects</span></h2> </div>
<div class="tips">
<p>
Paste your CSS code to <strong>LTR CSS box</strong> and press convert button.
RTL CSS which converted from LTR CSS display on <strong>RTL CSS box.</strong>
copy that and save as <strong>"rtl.css" file</strong> in your project root.
then call it after ltr style sheet in your html code.
</p>
</div>

</div>
</section>
<footer>
<div class="left">2017 &copy 004 Group. All Rights Reserved.</div>
<div class="right">
<nav>
<ul>
<li><a href="http://004group.com">004 Group</a></li>
</ul>
</nav>
</div>
</footer>
<script data-rocketsrc="rainbow/js/rainbow.min.js" type="text/rocketscript"></script>
<script data-rocketsrc="rainbow/js/language/html.js" type="text/rocketscript"></script>
<script data-rocketsrc="rainbow/js/language/css.js" type="text/rocketscript"></script>
</body>
</html>


