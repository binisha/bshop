<?php

// Load shopping items in index.php *****************************************

function load_shopping_item() {
//    $items = null;
//
//    $values1 = array(1, "MARILYN LEDERTASCHE", 1300, "tasche.jpg");
//    $items[1] = $values1;
//
//    $values2 = array(2, "SONNENBRILLE MIT LEDERBÜGELN", 324, "brille.jpg");
//    $items[2] = $values2;
//
//    $values3 = array(3, "ANKLE-BOOTS AUS LEDER UND FILZ", 62, "boots.jpg");
//    $items[3] = $values3;
       $server = "localhost";
    $user = "root";
    $pass = "";
    $verbindung = mysql_connect($server, $user, $pass)
            or die("No Connection to Server....");

    mysql_select_db("bshop")
            or die("Database couldnot be connected.");
    $sql = "SELECT  item_id, item_name, item_image, item_price FROM item";


    //echo $sql;

    $abfrage = mysql_query($sql);

    if ($abfrage) {
        echo "<p>Items has been displayed....</p>";
    } else {
        echo "<p>Failure...SQL Script</p>";
    }
    mysql_close($verbindung);
    
    return $abfrage;
}

// Load load_user_login_data in .php *****************************************
function load_user_login_data($filename) {

    $handle = fopen($filename, 'r') or die("can't open file");
    $user_array = null;

    while (($buffer = fgetcsv($handle, 0, ";")) !== false) {
        list($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword) = $buffer;
        $var = array($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword);

        $user_array[$username] = $var;
    }

    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle) or die("can't close file");
    return $user_array;
}

function authenticate($username, $password) {
    $user_arr = load_user_login_data("user_data.csv");


    //check first if the key exists in the associative array and extract the value
    // otherwise the undefined index error might be displayed or shown
    if (array_key_exists($username, $user_arr)) {

        //gets the specific user infor based on the username key
        $userValues = $user_arr[$username];

        //checks if the username registered in the csv file is same as entered in the form
        if ($username == $userValues[4] && $password == $userValues[5] && !empty($username) && !empty($password)) {
            return 1;
        } else {
            return 2;
        }
    } else {
        return 2;
    }
}

function register_user($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword) {
    if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($username) && !empty($password) && !empty($confrimpassword)) {
        //write_csv("user_data.csv", $salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword);
        insert_user($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword);
        return 1;
    } else {
        return 2;
    }
}

function insert_user($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword) {
    $server = "localhost";
    $user = "root";
    $pass = "";
    $verbindung = mysql_connect($server, $user, $pass)
            or die("No Connection to Server....");

    mysql_select_db("bshop")
            or die("Database couldnot be connected.");
    $sql = "INSERT INTO user (user_salutation, user_firstname, user_lastname, user_email, user_username, user_password, user_confirmpassword)"
 . " VALUES ('$salutation', '$firstname', '$lastname', '$email', '$username','$password', '$confrimpassword' )";

    //echo $sql;

    $abfrage = mysql_query($sql);

    if ($abfrage) {
        echo "<p>Thank you, Your order has been placed....</p>";
    } else {
        echo "<p>Failure...SQL Script</p>";
    }
    mysql_close($verbindung);
}
?>

