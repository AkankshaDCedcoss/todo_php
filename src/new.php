<?php

session_start();


if (!isset($_SESSION['mytodo']))

{
    $_SESSION['mytodo'] = array();
}



if (!isset($_SESSION['mytodoComplete']))

{
    $_SESSION['mytodoComplete'] = array();
}





if (isset($_POST['add'])) {


    $task = $_POST['new-task'];

    

    array_push($_SESSION['mytodo'], $task);
    
}


function display()
{
echo "<ul>";
$i=0;

    foreach ($_SESSION['mytodo'] as $key => $value) {
        

            echo "<li id='list".$i."'><input type='checkbox' name='check' value='".$key."' onchange='form.submit()'><label>$value</label><button class='edit' name='edit$key'>Edit</button><button class='delete' name='$key'>Delete</button></li>";
            
        $i++;
    }
    echo"</ul>";
}


function displayComplete()
{

      
echo "<ul>";
$i=0;

    foreach ($_SESSION['mytodoComplete'] as $key => $value) {
        

            echo "<li id='list".$i."'><input type='checkbox' name='check' value='".$key."' onchange='form.submit()'><label>$value</label><button class='edit' name='edit$key'>Edit</button><button class='delete' name='$key'>Delete</button></li>";
            
        $i++;
    }
    echo"</ul>";
}



foreach ($_SESSION['mytodo'] as $i => $j) {
                   

    if (isset($_POST[$i])) {
        array_splice($_SESSION['mytodo'], $i, 1);
    
}
}



for($i=0;$i < count($_SESSION['mytodo']);$i++)
{


    if (isset($_POST['edit' . $i]))
    {
       
     $_SESSION['pop']=$i;
}

}


for($i=0;$i < count($_SESSION['mytodo']);$i++) {
    

        if($i== $_SESSION['pop']) {
            if(isset($_POST['update']))
            {
                array_splice($_SESSION['mytodo'], $_SESSION['pop'], 1,$_POST['new-task']);
            
        }
    }
}


if (isset($_POST['check'])) {
    
    if (!isset($_SESSION['checked'])) {
        $_SESSION['checked'] = array();
    }
    foreach ($_SESSION['mytodo'] as $l => $w) {
        if ($_POST['check'] == $l) {
            array_push($_SESSION['checked'], $_SESSION['mytodo'][$l]);
            array_splice($_SESSION['mytodo'], $l, 1);
        }
    }
}

if (isset($_SESSION['checked'])) {
    foreach ($_SESSION['checked'] as $r => $b) 
    {

    
    echo "<li><input type='checkbox' name='check' value='.$r'><label>$b</label><button class='edit' name='edit$r'>Edit</button><button class='delete' name='$r'>Delete</button></li>";
    }
}


?>