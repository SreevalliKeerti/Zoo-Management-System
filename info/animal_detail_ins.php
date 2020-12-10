
<html>
<head>
<title>Insert animal details</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/145933/pexels-photo-145933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
<div class="container text-light">
<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 50px">Insert Animal Details</h1>
<p style="font-size:30px">Enter Animal  Detail Id </p>
<input class="form-control" type="number" style="font-size: 20px"name="ADid" placeholder="Animal Detail Id"> 
<p style="font-size:30px">Enter Height of Animal </p>
<input class="form-control" type="text" style="font-size: 20px"name="Height" placeholder="Animal Height">
<p style="font-size:30px">Enter Weight of Animal </p>
<input class="form-control" type="text" style="font-size: 20px"name="Weight" placeholder="Animal Weight">
<p style="font-size:30px">Enter Age of Animal </p>
<input class="form-control" type="number" style="font-size: 20px"name="Age" placeholder="Age of Animal">
<p style="font-size:30px">Enter Animal Id </p>
<input class="form-control" type="number" style="font-size: 20px"name="Aid" placeholder="Animal Id">
<input class="btn btn-success mt-2" type="submit" name="submit" value="Insert" style="font-size: 25px"formaction="animal_detail_ins.php"></button><br/>


</form>

<?php
        if(isset($_POST["submit"])) {
            $ADid=$_POST['ADid'];
            $Height=$_POST['Height'];
            $Weight=$_POST['Weight'];
            $Age=$_POST['Age'];
            $Aid=$_POST['Aid'];
            
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal_detail values($ADid,'$Height','$Weight',$Age,Aid)";
                
           if ($record=mysqli_query($conn,$q2)) {

            
            echo "done";
        }
             
            }
	       
?>

        
        
    </body>



</html>

