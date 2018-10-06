<?php
    $string = "Hello <<UserName>>, How are you?";
    $replaceString = readline("Enter the username : \n");
    $string = str_replace("<<UserName>>",$replaceString,$string);
    echo $string."\n";
?>
