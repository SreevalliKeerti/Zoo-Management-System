<html>
<head>
<title>Customer Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/234054/pexels-photo-234054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh">
<?php
	$CFame=filter_input(INPUT_POST,'subm');

         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
   	if(!$conn ){
            die('Could not connect: ' . mysqli_error());
         }
	else{
        echo "<div class='container'><h2 class='text-light'>Customer Details</h2>";
	}
	 
	 $q2="select Cid,CFname,CLname,Email from customer where CFname='$CFame'";
	 $record=mysqli_query($conn,$q2);
	      
?>
<?php

    echo"<table class='table table-striped table-bordered border-light' border='1'";
        echo"<tr><th class='text-light'> Cid  </th><th class='text-light'> CFname </th><th class='text-light'> CLname  </th><th class='text-light'> Email </th>";

        while($row=mysqli_fetch_assoc($record))
        {
            echo"<tr class='text-light'><th>{$row['Cid']}</th><th>{$row['CFname']}</th><th>{$row['CLname']}</th><th>{$row['Email']}</th>";   
        }
    echo"</table></div>";
?>        
           
        
        
    </body>



</html>