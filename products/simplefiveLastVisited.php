<table border="5" cellpadding="0" cellspacing="2">
    <tr><td bgcolor="#00bfff">Product Name</td></tr>
    <?php
    $count = 5;
    foreach (array_reverse($_COOKIE) as $key => $value){
        if ( $count > 0 )
            print("<tr><td bgcolor='#faebd7'>$key</td></tr>");
        $count --;
    }
    ?>
</table>