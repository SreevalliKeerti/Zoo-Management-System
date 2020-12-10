<html>
<head>
<title>Guide Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/234054/pexels-photo-234054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh">
<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
   	if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
	else{
        echo "<div class='container'><h2 class='text-light'>Employee Details</h2>";
	}
	 
	 $q2="select e.EFname,e.ELname,e.Phone_No,ag.AGid,ag.Zoo_Introduction,ag.Updated_Year from animal_guide as ag natural join employee as e natural join zoo as z";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table class='table text-light table-striped table-bordered border-light' border='1'>";
        echo"<tr class='text-light'><th> EFname  </th><th> ELname </th><th> Phone_No  </th><th> AGid </th><th> Zoo_Introduction </th><th> Updated_Year </th>";

        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr class='text-light'><td>{$row['EFname']}</td><td>{$row['ELname']}</td><td>{$row['Phone_No']}</td><td>{$row['AGid']}</td><td>{$row['Zoo_Introduction']}</td><td>{$row['Updated_Year']}</td>";
            
        }
    echo"</table></div>";
?>        
           
        
        
    </body>



</html>