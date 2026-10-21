<?php

$conn=mysqli_connect("localhost","root","","hostelmsphp");

$fname=$_POST['f_name'];
$tslot=$_POST['tslot'];

$sql="Insert into fac_booking values('$fname','$tslot')";

if(mysqli_query($conn,$sql)===TRUE){
    echo "Slot booked successfully!";
}
else{
    echo "Error".mysqli_error();
}

mysqli_close($conn);
?>

<html>
<head><title>Facility Booking</title>
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <br>
<a href="dashboard.php"><button class="btn btn-success">Back to Dashboard</button></a>
</body>
</html>