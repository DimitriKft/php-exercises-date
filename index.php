<?php
$date = date("d-m-Y");
echo $date;
$date2 = date("d-m-y");
echo $date2;
$day = date("l");
echo $day;
$month = date("m");
echo $month;
$year = date("Y");
echo $year;
echo "<p style='color:red;'>We are the " . $day . " " . $month . " " . $year . "</p>";


echo "Août 2016, c'était il y a ". mktime(0,0,0,8,02,2016) . " secondes ";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="user.php">
<select name="" id="" size="1">
<option value="">Janvier</option>
<option value="">Février</option>
<option value="">Mars</option>
<option value="">Avril</option>
<option value="">Mai</option>
<option value="">Juin</option>
<option value="">Juillet</option>
<option value="">Août</option>
<option value="">Septembre</option>
<option value="">Octobre</option>
<option value="">Novembre</option>
<option value="">Décembre</option>
</select>

<select name="" id="" size="1">
<option value="">2019</option>
<option value="">2018</option>
<option value="">2017</option>
<option value="">2016</option>
<option value="">2015</option>
<option value="">2014</option>
<option value="">2013</option>
<option value="">2012</option>
<option value="">2011</option>
<option value="">2010</option>
<option value="">2009</option>
<option value="">2008</option>
</select>

<input type="submit">
</form>

</body>
</html>