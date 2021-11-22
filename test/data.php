<?php
    $filename = $_GET['ex'];
    if ($filename == "1"){
        $myfile = fopen("demo.txt", "r");
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
    }
}
    if($filename == "2"){
        $myfile = fopen("demo1.txt", "r");
        while(!feof($myfile)) {
            echo fgets($myfile) . "<br>";
    }
}
   
?>