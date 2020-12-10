
<html>
<head>
<title>ZOO Information</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<body style="  background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/234054/pexels-photo-234054.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;
height: 100vh">
<div class="container">
<form name="ZOO"method="post">
    <h1 class="text-light" style="font-size: 50px">Update Customer Email</h1>
    <p class="text-light" style="font-size:30px">Enter the Customer ID </p>
   <input class="form-control" type="number" style="font-size: 20px"name="Cid" placeholder="Customer ID"> 
<p class="text-light" style="font-size:30px">Enter the Email of Customer </p>
<input  class="form-control" type="text" style="font-size: 20px"name="Email" placeholder="Email"> 

   <input class="btn btn-success mt-2" type = 'submit' name='submit' value='Update' style="font-size: 25px"formaction="em.php"/><br/>

</form>

<?php
if(isset($_POST['submit']))
{
            $Email=$_POST['Email'];
          
            $Cid=$_POST['Cid'];
          
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2=" update customer set Email='$Email' where Cid='$Cid'";
            $record=mysqli_query($conn,$q2);
            if($record){
                echo"<br>";
                echo "<div class='alert alert-success' role='alert'>
               Your customer email is updated
              </div>";
              header( "refresh:3;url=cus.html" );
               
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

