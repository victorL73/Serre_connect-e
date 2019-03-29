<?php
    system("gpio -g mode 18 out");
    
    if($_POST['executer'] == 'ON')
    {
        system("gpio -g write 18 0");
    }
    else
    {
        system("gpio -g write 18 1");
    }
    header('Location: index.php#pompes');
    
?>