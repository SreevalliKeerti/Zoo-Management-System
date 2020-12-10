
<html>
<head>
<title>Insert animal5</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/145933/pexels-photo-145933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
<div class="container text-light">
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 50px">Insert Animal Details</h1>
<p style="font-size:30px">Enter Animal Id </p>
<input class="form-control" type="number" style="font-size: 20px"name="Aid" placeholder="Animal Id"> 
<p style="font-size:30px">Enter Gender of Animal </p>
<input class="form-control" type="text" style="font-size: 20px"name="Gender" placeholder="Animal Gender">
<p style="font-size:30px">Enter Cage Number </p>
<input class="form-control" type="number" style="font-size: 20px"name="Cage_Number" placeholder="Cage Number">
<p style="font-size:30px">Enter Feed Time </p>
<input class="form-control" type="text" style="font-size: 20px"name="Feed_Time" placeholder="Feed Time">
<p style="font-size:30px">Enter Animal Kind id </p>
   <input class="form-control" type="number" style="font-size: 20px"name="AKid" placeholder="AKid"> 
   <input class="btn btn-success mt-2" type="submit" name="submit" value="Insert" style="font-size: 25px"formaction="animal5_ins.php"></button><br/>

</form>

<?php
        if(isset($_POST["submit"])) {
            $Aid=$_POST['Aid'];
            $Gender=$_POST['Gender'];
            $Cage_Number=$_POST['Cage_Number'];
            $Feed_Time=$_POST['Feed_Time'];
            $AKid=$_POST['AKid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal5 values('$Aid','$Gender','$Cage_Number','$Feed_Time','$AKid')";
            
            $record=mysqli_query($conn,$q2);
            
            }
	       
?>

</div> 
        
    </body>



</html>

