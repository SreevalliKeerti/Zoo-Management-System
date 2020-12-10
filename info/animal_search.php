<html>
<head>
<title>Search Animal</title>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/145933/pexels-photo-145933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
<?php
	$AName=filter_input(INPUT_POST,'subm');

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
   	if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
	else{
	echo "<h2 class='text-light'>Animal Details</h2>";
	}
	 
	 $q2="SELECT animal5.Aid,animal5.Gender,animal5.Cage_Number,animal5.Feed_Time,animal_detail.Height,animal_detail.Weight,animal_detail.Age,animal_kind.AName,animal_kind.Physical_Characteristics,animal_kind.Zoo_Region,animal_kind.Diet,animal_kind.Population_Status from animal5,animal_detail,animal_kind where animal5.Aid=animal_detail.Aid and animal_kind.AKid=animal5.AKid and AName='$AName'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php
    $rowcount=mysqli_num_rows($record);
    if($rowcount!=0){
    echo"<table class='table text-light table-striped table-bordered border-light' border='1'>";
    echo"<tr class='text-light'><th> Aid </th><th> Gender </th><th> Cage_Number </th><th> Feed_Time </th><th> Height </th><th> Weight </th><th> Age </th><th> AName </th><th> Physical_Characteristics </th><th> Zoo_Region </th><th> Diet </th><th> Population_Status </th>";

        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr class='text-light'><td> {$row['Aid']}</td><td>{$row['Gender']}</td><td>{$row['Cage_Number']}</td><td> {$row['Feed_Time']}</td><td>{$row['Height']}</td><td> {$row['Weight']}</td><td> {$row['Age']}</td><td> {$row['AName']}</td><td> {$row['Physical_Characteristics']}</td><td> {$row['Zoo_Region']}</td><td> {$row['Diet']}</td><td> {$row['Population_Status']}</td>";
            
        }
    echo"</table></div>";
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>
        No animal with given name found!!
    </div>";
    }
?>        
           
        
    </div> 
    </body>



</html>