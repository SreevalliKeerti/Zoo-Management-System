
<html>
<head>
<title>Insert animal kind</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body style=" background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://images.pexels.com/photos/145933/pexels-photo-145933.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);
background-position: center;
background-repeat: no-repeat;
background-size: cover;">
<div class="container text-light">

<form name="txtProjectInfo"method="post">
    <h1 style="font-size: 50px">Insert Animal Details</h1>
<p style="font-size:30px">Enter Animal kind Id </p>
<input class="form-control" type="number" style="font-size: 20px"name="AKid" placeholder="Animal kind Id"> 
<p style="font-size:30px">Enter Name of Animal </p>
<input class="form-control" type="text" style="font-size: 20px"name="AName" placeholder="Animal Name">
<p style="font-size:30px">Enter Physical Characteristics </p>
<input class="form-control" type="longtext" style="font-size: 20px"name="Physical_Characteristics" placeholder="Physical Characteristics">
<p style="font-size:30px">Enter Zoo Region </p>
<input class="form-control" type="text" style="font-size: 20px"name="Zoo_Region" placeholder="Zoo Region">
<p style="font-size:30px">Enter Diet </p>
<input class="form-control" type="text" style="font-size: 20px"name="Diet" placeholder="Diet">
<p style="font-size:30px">Enter Population Status </p>
<input class="form-control" type="text" style="font-size: 20px"name="Population_Status" placeholder="Population Status">
<input class="btn btn-success mt-2" type="submit" name="submit" value="Insert" style="font-size: 20px"formaction="animal_kind_ins.php"></button><br/>


</form>

<?php
        if(isset($_POST["submit"])) {
            $AKid=$_POST['AKid'];
            $AName=$_POST['AName'];
            $Physical_Characteristics=$_POST['Physical_Characteristics'];
            $Zoo_Region=$_POST['Zoo_Region'];
            $Diet=$_POST['Diet'];
            $Population_Status=$_POST['Population_Status'];
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'zoo');
            if(!$conn ){
                    die('Could not connect: ' . mysqli_error());
                }
            
            $q2="Insert into animal_kind values($AKid,'$AName','$Physical_Characteristics','$Zoo_Region','$Diet',$Population_Status)";
                
           if ($record=mysqli_query($conn,$q2)) {

            
            echo "done";
        }
             
            }
	       
?>

        
        
    </body>



</html>

