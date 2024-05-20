<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="employedetails";

$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

if ($conn->connect_error){
    echo "connection error" .$conn->error;
}

else
if(isset($_POST['employesub'])){
    
    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $cnic = $_POST['cnic'];
    // $contact = $_POST['contact'];

    $sql ="INSERT INTO `employeinfo` (`id`, `name`, `fathername`, `cnic`) VALUES ('DEFAULT', '$name', '$fathername', ' $cnic')";
    
    if($conn->query($sql)){

        echo"Record Inserted";
    }

    else{
        echo "Error:" .$conn->error;
    }

}


if(isset($_GET['deleteid'])){
    $id =$_GET['deleteid'];

    $delquery = "DELETE FROM `employeinfo` WHERE 'id' =$id";
    if($conn->query($delquery))
    {
        echo "Record Deleted Successfully";
    }
    else{
        echo "error".$conn->error;
    }
}

// $sqlselect = "SELECT * FROM 'employeinfo'";
// if($resul= $conn->query($sqlselect)){
//     while($row = $result->fetch_assoc()){
//         echo "name:" .$row['name']. "fathername:" .$row['fathername']. "cnic:" .$row['cnic']. "<br>";
//     }
// }
// ?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->