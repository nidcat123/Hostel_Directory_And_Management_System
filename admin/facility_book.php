<?php

$conn=mysqli_connect("localhost","root","","hostelmsphp");

$result=mysqli_query($conn,"Select * from fac_booking");

?>

<html>
    <head>
        <title>Manage Facility Bookings</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body><center>
<h1 class="display-1">Facility Bookings</h1>
<table class="table">
    <tr>
        <th>Facility Name</th>
        <th>Timeslot</th>
</tr>
<?php 
while($row=mysqli_fetch_array($result)){
?>
<tr>
    <td><?php echo $row[0]; ?></td>
    <td><?php echo $row[1]; ?></td>
</tr><?php } ?>
</table></center>
</body>



</html>

