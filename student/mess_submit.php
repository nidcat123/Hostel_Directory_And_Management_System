<?php

$conn=mysqli_connect("localhost","root","","hostelmsphp");

$cname=$_POST['m_name'];
$fback=$_POST['fback'];

$sql="Insert into mess_feedback values('$cname','$fback')";

if(mysqli_query($conn,$sql)===TRUE){
    echo "Feedback recorded successfully!";
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