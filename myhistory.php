<?php

// Include the history functionality
include_once('history.php');

// Displaying the contents of history for checking
$ct = 0;
foreach($_SESSION['pageadd'] as $pageadd)
{
    $ct = $ct+1;
    echo 'Page History Entry #'.$ct.' of '.
        count($_SESSION['pageadd']).' is '.$pageadd.'<br>';
}
echo '<br>';
echo $pageadd;

// Include a page to allow destroying the session
// (for code check purpose)
?>