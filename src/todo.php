<?php

session_start();
// session_destroy();
include 'new.php';

?>

<html>

<head>
    <title>TODO List</title>
    <link href="style.css" type="text/css" rel="stylesheet">

</head>

<body>
    <form action="todo.php" method='POST'>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <p>
                <input id="new-task" type="text" name="new-task" value=''>
                <button name="add">Add</button>
                <button type="submit" name="update">update</button>


            </p>

            

            <h3>Todo</h3>
            



            <ul id="incomplete-tasks">
                <li><input type="checkbox" name="todo1"><label>Pay Bills</label><button class="edit">Edit</button><button class="delete">Delete</button></li>
                <div id="div1">
                <?php
                display();
                
                ?>
            </div>
                <li><input type="checkbox"><label>Go Shopping</label><button class="edit">Edit</button><button class="delete">Delete</button></li>
            </ul>


            <div id="div2">
            <h3>Completed</h3>
            <ul id="completed-tasks">
                <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
                
                <?php
                include 'new.php';
                displayComplete();
                
                ?>
           
            </ul>
            </div>
        </div>
    </form>

</body>


</html>