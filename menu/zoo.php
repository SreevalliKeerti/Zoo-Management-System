<html>
<head>
<title>Zoo Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://images.pexels.com/photos/624033/pexels-photo-624033.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
<?php
	$ZName=filter_input(INPUT_POST,'subm');

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
   	if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
	else{
	echo "<div class='container'><h2 class='text-light'>Details of Zoo</h2>";
	}
	 
	 $q2="select Zid,ZName,Location,Hours,Contact from zoo where ZName='$ZName'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php
    $rowcount=mysqli_num_rows($record);
    if($rowcount!=0){
    echo"<table class='table table-striped table-bordered border-light' border='1'";
        echo"<tr ><th class='text-light'> Zid  </th><th class='text-light'> ZName </th><th class='text-light'> Location  </th><th class='text-light'> Hours </th><th class='text-light'> Contact </th>";
        
        while($row=mysqli_fetch_assoc($record)){
            
        echo"<tr class='text-light'><td>{$row['Zid']}</td><td>{$row['ZName']}</td><td>{$row['Location']}</td><td>{$row['Hours']}</td><td>{$row['Contact']}</td>";
            
        }
    echo"</table></div>";
    }
    else{
        echo "<div class='alert alert-danger' role='alert'>
        No zoo with name as $ZName found!!
      </div>";
    }
?>        
           
        
        
    </body>



</html>