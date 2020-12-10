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
	$EFame=filter_input(INPUT_POST,'subm');

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
	 
	 $q2="select e.EFname,e.ELname,e.Phone_No,ag.AGid,ag.Zoo_Introduction,ag.Updated_Year from animal_guide as ag,employee as e,zoo as z where ag.AGid=z.AGid and z.Zid=E.Zid and EFname='$EFame'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php
    $rowcount=mysqli_num_rows($record);
    if($rowcount!=0){
    echo"<table class='table text-light table-striped table-bordered border-light' border='1'>";
    echo"<tr class='text-light'><th> EFname  </th><th> ELname </th><th> Phone_No  </th><th> AGid </th><th> Zoo_Introduction </th><th> Updated_Year </th>";

    while($row=mysqli_fetch_assoc($record)){
        
    echo"<tr><th>{$row['EFname']}</th><th>{$row['ELname']}</th><th>{$row['Phone_No']}</th><th>{$row['AGid']}</th><th>{$row['Zoo_Introduction']}</th><th>{$row['Updated_Year']}</th>";
        
    }
    echo"</table></div>";
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>
        No employee with name as $EFName found!!
    </div>";
    }


?>        
           
        
        
    </body>



</html>