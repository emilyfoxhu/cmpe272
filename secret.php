<!doctype html>
<html>
<head>
    <?php
        extract($_POST);
        //default is empty string which is false
        $USERNAME = "";
        $PASSWORD = "";
        $userVerified = 0; //if username is verified
        if (!$USERNAME && !$PASSWORD){
            print("<p>Please enter your username and password.</p>");//bothFieldsBlank
            //die();
        } elseif (!$USERNAME){
            print("<p>Your username cannot be blank.</p>");//nameFieldBlank
            //die();
        } else{
            print("<p>Your password cannot be blank.</p>");//passwordFieldBlank
            //die();
        }

        if (!($file = fopen("password.txt", "r"))){
            print("<p>Error! Could not reach password file.</p>");
            //die();
        }
        //do a loop to check username and password
        while (!feof($file) && !$userVerified){
            $line = fgets($file, 255);
            $line = chop($line);
            $field = explode(",", $line, 2);//split username and password by , and form an array
            if ($USERNAME == $field[0]){//verify username
                $userVerified = 1;
                if($PASSWORD == $field[1]){//verify password
                    print("<p>Thank you! Enjoy our secret page!</p>");
                } else{
                    print("<p>Access Denied! Not able to log in!</p>");
                }
            }
        }
        fclose($file);
        if (!$userVerified){//if username does not exist, fail to log in
            print("<p>The username does not exist! Failed to log in.</p>");
        }
    ?>
    </p>

</head>
</html>
