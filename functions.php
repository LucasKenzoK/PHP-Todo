<?php 
    $errors = "";
    $db = mysqli_connect("localhost", "root", "", "todo");
    if (isset($_POST['submit'])) {
            if (empty($_POST['task'])) {
                $errors = "You must fill in the task";
            }else{
                $task = $_POST['task'];
                $sql = "INSERT INTO tasks (task) VALUES ('$task')";
                mysqli_query($db, $sql);
                header('location: index.php');
            }
    } 
?>