<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "Allowance";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST['submit'])){
    
    if(!empty($_POST['FirstName']) && 
    !empty($_POST['LastName']) && 
    !empty($_POST['Phone']) && 
    !empty($_POST['Email']) && 
    !empty($_POST['NID']) && 
    !empty($_POST['Pass'])){
        
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $NID = $_POST['NID'];
    $Pass = $_POST['Pass'];
    $Gender = $_POST['Gender'];

    $query = "insert into users(NID, FirstName, LastName, Pass, Email, Phone, Gender) 
    values('$NID', '$FirstName', '$LastName', '$Pass', '$Email', '$Phone', '$Gender')";

    $query2 = "insert into login(NID, Pass, Email) values('$NID', '$Pass', '$Email')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    $run2 = mysqli_query($conn, $query2) or die(mysqli_error());

    if($run && $run2){
        echo "Form Submitted";
        echo $query2;

    }
    else{
        echo "Form not submitted";

    }

    }
    else{
        echo "All field required";
    }
}

?>