<html>
<head>
<title>Zoo Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://images.pexels.com/photos/624033/pexels-photo-624033.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
    <form name="txtProjectInfo"method="post">
        <h1 class="text-light" style="font-size: 60px"></h1>
    <p class="text-light" style="font-size:30px">Enter the Zoo Name </p>
    <input class="form-control" type="text" style="font-size: 25px"name="ZName" placeholder="Zoo name"> 
    <p class="text-light" style="font-size:30px">Enter the Location of Zoo </p>
    <input class="form-control" type="text" style="font-size: 25px"name="Location" placeholder="Zoo Location">
    <p class="text-light" style="font-size:30px">Enter the Timing of the Zoo </p>
    <input class="form-control" type="text" style="font-size: 25px"name="Hours" placeholder="Hours">
    <p class="text-light" style="font-size:30px">Enter the Agid </p>
    <input class="form-control" type="number" style="font-size: 25px"name="AGid" placeholder="ID">
    <p class="text-light" style="font-size:30px">Enter the  Contact Number </p>
    <input class="form-control" type="number" style="font-size: 25px"name="Contact" placeholder="Contact"> 
    <input class="btn btn-success mt-2" type="submit" name="submit" value="Insert" style="font-size: 25px"formaction="zooins.php"></button><br/>

    </form>
  
<?php
        if(isset($_POST["submit"])) {
            $ZName=$_POST['ZName'];
            $Location=$_POST['Location'];
            $Hours=$_POST['Hours'];
            $Contact=$_POST['Contact'];
            $AGid=$_POST['AGid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into zoo values(NULL,'$ZName','$Location','$Hours','$Contact','$AGid')";
            
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "<div class='alert alert-success' role='alert'>
                Record is inserted
              </div>";
              header( "refresh:3;url=zooav.html" );
               
        }else{
            echo"<br>";
            echo "<div class='alert alert-danger' role='alert'>
            Some Information is wrong
          </div>";
        }
            
            }
	       
?>

        
</div>
    </body>



</html>

