
<html>
<head>
<title>ZOO Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://images.pexels.com/photos/624033/pexels-photo-624033.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
    <div class="container">
<form name="ZOO"method="post">
    <h1 class="text-light" style="font-size: 40px">Update Location</h1>
    <p class="text-light" style="font-size:30px">Enter the Zoo ID </p>
   <input class="form-control" type="number" style="font-size: 20px"name="Zid" placeholder="Zoo ID"> 
    <p class="text-light" style="font-size:30px">Enter the New Location of Zoo </p>
    <input class="form-control" type="text" style="font-size: 20px"name="Location" placeholder="Location"> 

   <input class="btn btn-success mt-2" type = 'submit' name='submit' value='Update' style="font-size: 25px"formaction="loc.php"/><br/>

</form>

<?php
if(isset($_POST['submit']))
{
            $Location=$_POST['Location'];
            //echo $Location;
            $Zid=$_POST['Zid'];
           // echo $Zid;
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2=" update zoo set Location='$Location' where Zid='$Zid'";
           // echo $q2;
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "<div class='alert alert-success' role='alert'>
                Location is Updated
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

