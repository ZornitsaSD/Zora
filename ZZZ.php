<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#frst {
		color: red;
	}
	#scnd {
		color: blue;
	}
	</style>
</head>
<body>
<?php 
header('Content-Type: text/html; charset=utf-8');
echo "Hello";
print ("Hi");
echo "Обoжавам PHP";
echo $str="1,2,3";
echo $boolean=true;
$first = "Name";
$second = 222;
$third = "bjbbjhb";

echo "<p id='frst'>".$first."</p><p id='scnd'>".$second."</p><p>".$third."</p>";
echo 'string'.'-';
echo "string".'-';

echo '$first'.'-';
echo "$second";
?>
</body>
</html>

