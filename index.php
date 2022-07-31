<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typeqast Tasks</title>
    <style>
        body{
            display: flex;  
            justify-content: center;
        }
        .wrap{
            width: 500px;
        }
        .success{
            background-color: #d2f3c9;
            padding: 10px 5px;
            border: 1px solid #ccc;
            margin-top: 15px;
        }
        label{
            display: block;
        }
    </style>
</head>
<body>
<div class="wrap">
    <h1>Typeqast Tasks</h1>
    <!-- FirstTask -->
    <h2>Task no. 1</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?task=1" method="post">
        <fieldset>
            <legend>Make this work (repeat 3 times the contents of an array)</legend>
            <label for="first_task">First Task:</label>
            <input type="text" id="first_task" name="first_task" required value="<?= $_POST['first_task'] ?? '[1,2,3]' ?>">
            <button type="submit">Send</button>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['task'] == 1) {
                    $first_task = json_decode($_POST['first_task']);
                    $task_one = new FirstTask();
                    
                    echo '<div class="success">';
                    echo 'The result: ' . $task_one->repeat($first_task) ;
                    echo '</div>';
                }
            ?> 
        </fieldset>
    </form>

    <!-- SecondTask -->
    <h2>Task no. 2</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?task=2" method="post">
        <fieldset>
            <legend>Make this work (no vowels, lowercase except the first letter)</legend>
            <label for="second_task">Second Task:</label>
            <input type="text" id="second_task" name="second_task" required value="<?= $_POST['second_task'] ?? 'TyPEqaSt DeveLoper TeST' ?>">
            <button type="submit">Send</button>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['task'] == 2) {
                    $task_two = new SecondTask();
                    $second_task = $_POST['second_task'];
                    echo '<div class="success">';
                    echo 'The result: ' . $task_two->reformat($second_task);
                    echo '</div>';
                }
            ?> 
        </fieldset>
    </form>

    <!-- ThirdTask -->
    <h2>Task no. 3</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>?task=3" method="post">
        <fieldset>
            <legend>Make this work (without using any built-in functions, only a for loop, return the next binary number in a string or as an array)</legend>
            <label for="third_task">Third Task:</label>
            <input type="text" id="third_task" name="third_task" required value="<?= $_POST['third_task'] ?? '[1,0,0]' ?>">
            <button type="submit">Send</button>
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['task'] == 3) {
                    $task_three = new ThirdTask();
                    $third_task = json_decode($_POST['third_task']);
                    echo '<div class="success">';
                    echo 'The result: ' . $task_three->next_binary_number($third_task);
                    echo '</div>';
                }
            ?> 
        </fieldset>
    </form>
</div>

    
</body>
</html>