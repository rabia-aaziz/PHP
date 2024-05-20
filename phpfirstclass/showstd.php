


<!-- $sqlselect = "SELECT * FROM 'employeinfo'";

if($resul= $conn->query($sqlselect)){
    while($row = $result->fetch_assoc()){
        echo "name:" .$row['name']. "fathername:" .$row['fathername']. "cnic:" .$row['cnic']. "<br>";
    }
}
 -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap-CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">



</head>
<body>

<div class="container">
    <div class="row">
        <div class="COL-MD-8">
            <table class="table table-light">

<thead>
    <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>FATHER NAME</th>
    <th>CNIC</th>
    <th>Acction</th>
    

    </tr>
    
</thead>
<tbody>
    
    <?php
    

    require_once('connection.php');
    
    
 $sqlselect = "SELECT * FROM `employeinfo`";

if($result= $conn->query($sqlselect))
{
    while($row = $result->fetch_assoc())
    {
       
    

    

?>
<tr>
    <td><?php echo $row ['id'];?></td>
    <td><?php echo $row ['name'];?></td>
    <td><?php echo $row ['fathername'];?></td>
    <td><?php echo $row ['cnic'];?></td>

    <!-- <td><a href="student-data.php?deleteid=<?php echo $row ['id'];?>" class=" btn btn-danger">DELETE</a> -->
    <td>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  DELETE
</button>
    <button class="btn btn-primary">Edit</button>
    </td>

    
<?php
}
}
?>
</tbody>
</table> 
    
            </div>
        </div>
    </div>





<table>

<thead>
    <th></th>
</thead>
</table>
    
<!-- bootstrap modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>