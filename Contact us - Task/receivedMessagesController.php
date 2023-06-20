<?php include_once $_SERVER['DOCUMENT_ROOT'] . "/Tasks/Task1/db.php"; 

$query = "SELECT * FROM messages";
$results = mysqli_query($conn, $query);

if(isset($_POST['idMessage'])){
    $idMessage = $_POST['idMessage'];

    $queryDelete = "DELETE FROM messages WHERE id = '$idMessage' "; 
    $results = mysqli_query($conn, $queryDelete);

    echo "Message deleted successfully.";
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $querydetails = $query . " WHERE id = $id "; 
    $resultsdetails = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($resultsdetails);
}

if(isset($_POST['idEdit'])){
    $idEdit = $_POST['idEdit'];

    $email = $_POST['emailVal'];
    $subject = $_POST['subjectVal'];
    $firstname = $_POST['firstnameVal'];
    $lastname = $_POST['lastnameVal'];
    $message = $_POST['messageVal'];

    $queryUpdate = "UPDATE messages SET email = '$email', firstname = '$firstname', lastname = '$lastname', subject = '$subject', message = '$message' WHERE id = '$idEdit' "; 
    $results = mysqli_query($conn, $queryUpdate);

    echo "Message edited successfully!";
}