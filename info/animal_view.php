<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<style link="" href="info.css"></style>
	<title>Animal view</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/145933/pexels-photo-145933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh;">
    <div class="container">
<?php
$conn=mysqli_connect("localhost","root","","zoo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  echo "<h2 class='text-light'>Animal Details</h2>";

$sql="SELECT animal5.Aid,animal5.Gender,animal5.Cage_Number,animal5.Feed_Time,animal_detail.Height,animal_detail.Weight,animal_detail.Age,animal_kind.AName,animal_kind.Physical_Characteristics,animal_kind.Zoo_Region,animal_kind.Diet,animal_kind.Population_Status from animal5 as animal5,animal_detail as animal_detail,animal_kind as animal_kind where animal5.Aid=animal_detail.Aid and animal_kind.AKid=animal5.AKid";
$result=mysqli_query($conn,$sql)
?>
<?php

echo"<table class='table table-striped table-bordered border-light' border='1'>";
  // Fetch row
  echo "<tr class='text-light'><th> Aid </th><th> Gender </th><th> Cage_Number </th><th> Feed_Time </th><th> Height </th><th> Weight </th><th> Age </th><th> AName </th><th> Physical_Characteristics </th><th> Zoo_Region </th><th> Diet </th><th> Population_Status </th>";
  while($row1=mysqli_fetch_assoc($result)){
    echo "<tr class='text-light'><td> {$row1['Aid']}</td><td>{$row1['Gender']}</td><td>{$row1['Cage_Number']}</td><td> {$row1['Feed_Time']}</td><td>{$row1['Height']}</td><td> {$row1['Weight']}</td><td> {$row1['Age']}</td><td> {$row1['AName']}</td><td> {$row1['Physical_Characteristics']}</td><td> {$row1['Zoo_Region']}</td><td> {$row1['Diet']}</td><td> {$row1['Population_Status']}</td>";
  }
    echo"</table>";

mysqli_close($conn);
?>

</div>	
</body>
</html>