<?php
    $servername="localhost";
    $username="root";
    $password="mookambikadevi!";
    $databaseName="loginss";
    $un=$_POST['nm'];
    $pwd=$_POST['pwd'];
    $db_handle=mysql_connect($servername,$username,$password);
    $db_f=mysql_select_db($databaseName,$db_handle);
    $sql="SELECT * FROM loginss where username='".$un."'";
    $result_set=mysql_query($sql);
    $record=mysql_fetch_array($result_set);
       if($record['password']==pw)
       {
        echo "<frameset cols=200,*>";
        echo "<frame src=lf.html name=leftframe>";
        echo "<frame src=rf.html name=rightframe>";
        echo "</frameset>";
    }
    else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location: logins.html");
}
    ?>