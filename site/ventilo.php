<?php
    system("gpio -g mode 24 out");
    
    if($_POST['executer'] == 'ON')
    {
        system("gpio -g write 24 0");
    }
    else
    {
        system("gpio -g write 24 1");
    }
    header('Location: index.php#pompes');
    
?>