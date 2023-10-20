<?php include('functions.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="todoFather">      
            <h1 class="todohHeader">Simple ToDo</h1>
            <form action="index.php" method="post" class="formTodo">
                <?php  if (isset($errors)) { ?>
                    <p><?php echo $errors;?></p>
                <?php }?>
                <input type="text" name="task">
                <button type="submit" name="submit" id="addBtn">Adicionar</button>
                </form>

                <div class="todolist">
                    <?php 
                    $task = mysqli_query($db, "SELECT * FROM tasks");
                    
                    $i = 1; while ($row = mysqli_fetch_array($task)){?>
                        <ul class="todoTask">
                            <li><?php echo $row['task']; ?>
                            
                        </ul>
                    <?php $i++ ; } ?>
                </div>
                                                    
     </div>
</body>
</html>