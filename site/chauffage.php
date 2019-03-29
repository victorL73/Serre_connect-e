<?php
    system("gpio -g mode 23 out");
    
    if($_POST['executer'] == 'ON')
    {
        system("gpio -g write 23 0");
    }
    else
    {
        system("gpio -g write 23 1");
    }
    header('Location: index.php#pompes');
    
?>