<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "Allowance";

$conn2 = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){

    if(!empty($_POST['Email']) && 
       !empty($_POST['Pass'])){
        
    $Email = $_POST['Email'];
    $Pass = $_POST['Pass'];

    $query3 = "SELECT login FROM admin WHERE Email = '$Email' and Pass = '$Pass'";

    $run2 = mysqli_query($conn2, $query3) or die(mysqli_error());

    if(mysql_num_row($run2) == 1){
        echo "Loged In";
        exit();
    }
    else{
        echo "Form not submitted";
    }

    }
    else{
        echo "All field required";
        echo $query3;
    }
}

?>