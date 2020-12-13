<?php
// session_start();
// Include the history functionality
$servername="us-cdbr-east-02.cleardb.com";
$username="b4f09a430a2ca0";
$password="ca8322d2";
$dbname = "heroku_b359504503ae920";
$ct = 0;
$timeStamp = time();
list($sid, $ext) = explode('-', $_GET['sessid']);
//echo 'sid is' .$sid;
if($sid) session_id($sid);
session_start();
$session = session_id();
//echo $session;
if (!($conn = mysqli_connect($servername,$username,$password,$dbname)))
    die("Cannot connect to database");

// Displaying the contents of history for checking
//echo $session;
$sql3 = "SELECT history from heroku_b359504503ae920.history where session='$session'";
$result = mysqli_query($conn, $sql3);
for ($counter = 0; $row = mysqli_fetch_row($result); $counter++){
    foreach($row as $key => $value){
        print("$value");
        ?><br/><?php
    }
}
mysqli_close($conn);
echo '<br>';

// Include a page to allow destroying the session
// (for code check purpose)
?>
