//                
//function write_csv($filename, $salutation, $firstname, $lastname, $email, $username, $password, $confirmpassword) {
//    $handle = fopen($filename, 'a');
//    if ($handle == FALSE) {
//        echo "<p>Data couldnot be open.</p>";
//        exit("<p>The program is closing</p>");
//    }
//
//    if (fputs($handle, "$salutation;$firstname;$lastname;$email;$username;$password;$confirmpassword;\n")) {
// 
//    } else {
//        echo "<p>Couldnt write to document.</p>";
//    }
//    fclose($handle);
//}
//
//function read_csv($filename) {
//
//    $handle = fopen($filename, 'r') or die("can't open file");
//    echo "<table>";
//    echo "<thead>
//                                    <th>Saluation</th>
//                                    <th>Firstname</th>
//                                    <th>Lastname</th>
//                                    <th>Email</th>
//                                    <th>Username</th>
//                                    <th>Password</th>
//                                    <th>Confirm Password</th>
//                                    </thead>";
//    echo "<tbody>";
//
//    while (($buffer = fgetcsv($handle, 0, ";")) !== false) {
//        list($salutation, $firstname, $lastname, $email, $username, $password, $confrimpassword) = $buffer;
//
//        echo "<tr class=light>
//                                    <td>$salutation</td>
//                                    <td>$firstname</td>
//                                    <td>$lastname</td>
//                                    <td>$email</td>
//                                    <td>$username</td>
//                                    <td>$password</td>
//                                    <td>$confrimpassword</td>
//                                    </tr>";
//    }
//
//    echo "</tbody>";
//    echo "</table>";
//
//    if (!feof($handle)) {
//        echo "Error: unexpected fgets() fail\n";
//    }
//    fclose($handle) or die("can't close file");
//}
//?>
//


