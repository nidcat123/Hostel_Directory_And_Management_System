<?php

$conn=mysqli_connect("localhost","root","","hostelmsphp");

$regno=$_POST['regno'];
$name=$_POST['name'];
$med=$_POST['med'];

$sql="Insert into med_leave values('$regno','$name','$med')";

if(mysqli_query($conn,$sql)===TRUE){
    echo "Request submitted successfully!";
}
else{
    echo "Error".mysqli_error();
}

mysqli_close($conn);
?>

<html>
<head><title>Mess Feedback</title>
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <br>
<a href="dashboard.php"><button class="btn btn-success">Back to Dashboard</button></a>
</body>
</html>