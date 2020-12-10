
<html>
<head>
<title>Zoo Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(https://images.pexels.com/photos/234054/pexels-photo-234054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh">
    <div class="container">
    <ul class="nav justify-content-end nav-pills">
            <li class="nav-item"><a class="nav-link bg-secondary active mt-2" href="ser.html"> SERVICES </a></li>
        </ul>
<form name="txtProjectInfo"method="post">
    <h1 class="text-light" style="font-size: 50px">Book Ticket</h1>
    <p class="text-light" style="font-size:30px">Customer ID </p>
    <input class="form-control" type="number" style="font-size: 25px"name="Cid" placeholder="ID">
    <p class="text-light" style="font-size:30px">Enter the Ticket ID </p>
    <input class="form-control" type="text" style="font-size: 25px"name="Tid" placeholder="Ticket ID"> 
    <p class="text-light" style="font-size:30px">Enter the Ticket of Zoo </p>
    <input class="form-control" type="text" style="font-size: 25px"name="Price" placeholder="Ticket Price">

    <input class="btn btn-success mt-2" type="submit" name="submit" value="Book Ticket" style="font-size: 25px"formaction="tins.php"></button><br/>

    </form>

<?php
        if(isset($_POST["submit"])) {
            $Tid=$_POST['Tid'];
            $Price=$_POST['Price'];
            $Cid=$_POST['Cid'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into ticket values('$Tid','$Price','$Cid')";
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "<div class='alert alert-success' role='alert'>
               Ticket Booked
              </div>";
              header( "refresh:3;url=ser.html" );
               
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

