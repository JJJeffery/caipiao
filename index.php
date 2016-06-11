<?php

$redArray = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33');
$blueArray = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16');

function changeFate(){
 global $redArray;
 global $blueArray;

 $redOne = $redArray[rand(0, 5)];
 $redTwo = $redArray[rand(6, 11)];
 $redThree = $redArray[rand(12, 17)];
 $redFour = $redArray[rand(18, 23)];
 $redFive = $redArray[rand(24, 28)];
 $redSix = $redArray[rand(29, 32)];
 $blue = $blueArray[rand(0, 15)];

 return array($redOne, $redTwo, $redThree, $redFour, $redFive, $redSix, $blue);
}

list($a, $b, $c, $d, $e, $f, $g) = changeFate();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>改变命运</title>
<link rel="stylesheet" href="css/style.css" />
<script type='text/javascript' src='js/jquery-1.11.1.min.js'></script>
  <script type='text/javascript' src='js/jquery.particleground.min.js'></script>
  <script type='text/javascript' src='js/demo.js'></script>

  <script type="text/javascript">
  $(function(){
	$('#text1').click(function(){
	    $('#text2').show('fast');
	    $('#text1').hide();
    })

    $('#text2').click(function(){
	    $('#text3').show('fast');
	    $('#text2').hide();
    })

    $('#text3').click(function(){
	    $('#text4').show('fast');
	    $('#text3').hide();
    })

    $('#text4').click(function(){
	    $('#text5').show('fast');
	    $('#text4').hide();
    })

    $('#text5').click(function(){
	    $('#changefate').show('fast');
	    $('#text5').hide();
    })

    $('#over').click(function(){
	    $('#text1').show('fast');
	    $('#changefate').hide();
    })


})
  </script>

</head>
<body>
<div id="particles">
<div class="intro">
<h1>欢迎来到上帝的世界</h1>
    <div id="text1">你被命运捉弄过吗？</div>
	<div id="text2">你被别人嘲笑过吗？</div>
	<div id="text3">你想证明自己强壮吗？</div>
	<div id="text4">你想改变自己的命运吗？</div>
	<div id="text5">还等什么，赶快点击吧！</div>
	<div id="changefate">
	<p>恭喜你获得上帝的眷顾!</p>	
	<div class="ball"><?php echo $a; ?></div>
	<div class="ball"><?php echo $b; ?></div>
	<div class="ball"><?php echo $c; ?></div>
	<div class="ball"><?php echo $d; ?></div>
	<div class="ball"><?php echo $e; ?></div>
	<div class="ball"><?php echo $f; ?></div>
	<div id="blue" class="ball"><?php echo $g; ?></div>
	<p>千万不要告诉别人</p>
	<p>下一个千万富翁就是你!</p>
	<div id="over" onclick="location.reload()">不信？重来吧!</div>

	</div>
</div>
	
</div>

</body>
</html>


