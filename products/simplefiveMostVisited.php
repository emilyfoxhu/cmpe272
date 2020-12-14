<table border="5" cellpadding="0" cellspacing="2">
    <tr><td bgcolor='#00bfff'>Product Name</td>
        <td bgcolor='#00bfff'>Total Visits</td></tr>
    <?php
    $topVisit = 5;
    arsort($_COOKIE);//reverse sort by value
    foreach ($_COOKIE as $key => $value){
        if ( $topVisit > 0 )
            print("<tr><td bgcolor='#faebd7'>$key</td>
                       <td bgcolor='#7fffd4'>$value</td></tr>");
        $topVisit --;
    }
    ?>
</table>