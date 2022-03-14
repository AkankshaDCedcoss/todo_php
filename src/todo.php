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
                
               
                <?php
                display();
                
                ?>
            
                
            </ul>


           <div class="div2">
            
            
                
    
                <?php
              
                displayComplete();
                
                ?>
           
            </ul>
            </div>
        </div>
    </form>

</body>


</html>