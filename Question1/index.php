<!DOCTYPE html>
<html>
<head>
   
    
    <title>Question 1</title>
    
    
</head>
<?php
    if(isset($_POST['hobbies'])){
        setcookie('hobb',$_POST['hobbies'],time()+60000);
        
    }
    if(isset($_COOKIE['hobb'])){ 
        echo " <center> <h1><font color='green'>you set your hobbies '".$_COOKIE['hobb']."'</font> </h1> </center>";       

    }
    else{
        echo '<center>
        <h1>Welcome to prince\'s external exam</h1>
    <p><font color="red">*please select hobbies and click submit and close this page and agin try to open this page</font></p>
    <form action="home.php" method="post">
        <table cellpadding="10">
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label for="hobbies">Hobbies</label></td>
                <td><select name="hobbies" required>
                    <option value="reading">reading</option>
                    <option value="learning">learning</option>
                    <option value="gaming">gaming</option>
                    <option value="collect">collect-stemp</option>
                    <option value="out">out-door sport</option>
                </select></td>
            </tr>
            <tr>                
                <td colspan="2" align="right"><input type="submit" value="go!!!"></td>
            </tr>
        </table> 
         
</form>
</center>';
    }

?>
<body>
    
    
</body>
</html>