<?php
    include 'db.php';

    $id = $_POST['id'];

    $query = "DELETE FROM all_contents WHERE content_id='$id';";
    $result = mysqli_query($conn,$query);
    if($result){
        header('Location:myblog.php');
    } else{
        echo "Failed to delete.";
    }
?>