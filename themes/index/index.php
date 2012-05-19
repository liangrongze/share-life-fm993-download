<?php
/**
 * View of index.php
 * Created by rongze at 2012-05-18
 */
defined( 'EXEC' ) or die( 'Restricted access' ); // no direct access
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>日落大道 Any time</title>
<!-- automatically filled in-page css: post/post_css -->
<style type="text/css">
body{
	background-color:#CCC8BD;
	text-align:center;
	margin:0 auto; 
}

h1{display:none;}

fieldset{border:0px;}

input {
	margin-right: 3px;
	vertical-align: middle;
}
.item {
	 margin: 15px 0 15px 15px;
	 line-height: 30px;
	 font-size: 14px;
}
.msg{
	padding:10px;
	color:#840228;
}
label.ln {
	display: inline-block;
	line-height: 30px;
	margin-right: 15px;
	text-align: right;
	vertical-align: middle;
	width: 180px;
}
.post_input { 
	padding: 4px 4px 3px; 
	-moz-border-radius: 3px; 
	-webkit-border-radius: 3px; 
	border-radius: 3px; 
	border: 1px solid #c9c9c9;
	background: #f6f6f6;
}
#container {
	line-height: 30px;
	height:500px;
}
#content{
	padding-top:200px;
}
.required_label {
	font-weight: bold;
}
.button{
	width:100px;
	height: 55px;
	padding: 55px 0 0;
	margin: 0;
	border: 0;
	background: transparent url(inc/images/download.png) no-repeat center top;
	overflow: hidden;
	cursor: pointer; /* hand-shaped cursor */
	cursor: hand; /* for IE 5.x */
}
.cn{
	font-size:50px;
	cursor:pointer;
}
.en{
	font-size:20px;
	padding-left:50px;
}
.black{
	padding:5px;
	color:black;
}
</style>
<!-- end in-page css -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.8.20/themes/base/jquery-ui.css" type="text/css" media="all" />
</head>
<!-- .top_nav -->
<body>
	<div id="container">
		<h1 class="hide">日落大道 Any time</h1>
		<!-- #content -->
		<div id="content">
			<div class="title"><span class="cn" title="Created By rongze, gz.liangrongze@gmail.com">日落大道</span><span class="en">Any Time</span></div>
			<form target="_blank" action="" method="get" id="form">
				<fieldset>
					<!-- title -->
					<div class="item">
						<input id="datepicker" type="text" name="date" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date("m")  , date("d")-5, date("Y"))
);?>" class="post_input"/>
					</div>
					<div class="item submit">
						<input class="button" type="submit" value="">
					</div>
				</fieldset>
			</form>
		</div>
		<div id="msg" class="msg"><?php echo isset($msg) ? $msg : '';?> </div>
		<!-- //#content -->
	</div>
	<!-- //#container -->
</div>
<!-- //#top -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
!window.jQuery && document.write('<script src="inc/js/jquery.1.7.2.min.js"><\/script>')
-->
</script>
<script src="http://code.jquery.com/ui/1.8.20/jquery-ui.min.js" type="text/javascript"></script>
<script>
	$(function() {
		$("#form").submit(function (){
			var reg = /(19[0-9]{2}|20[0-9]{2})\-(0?[1-9]|1[0-2])\-(0?[1-9]|[1-2][0-9]|3[0-1])$/;
			if( !reg.test($("#datepicker").val()))
			{
				$("#msg").html("亲，天朝里没有这个日期！");
				return false;
			}
		});
		$( "#datepicker" ).datepicker({ dateFormat: "yy-mm-dd" }); 
	});   
</script>
</body>
</html>
<?php
// End of index.php
// Location: themes/index.php