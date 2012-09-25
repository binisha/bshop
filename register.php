<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>BShop</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="styles/mediaqueries.css" type="text/css" media="all">
        <script src="scripts/jquery-1.7.2.min.js"></script>
        <script src="scripts/jquery-mobilemenu.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.topnav').mobileMenu({
                    combine: false,
                    switchWidth: 600,
                    prependTo: 'nav#topnav'
                });
            });
        </script>
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="styles/ie.css" type="text/css" media="all">
        <script src="scripts/css3-mediaqueries.min.js"></script>
        <script src="scripts/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php include 'header.html'; ?>
        <!-- content -->
        <div class="wrapper row2">
            <div id="container">
                <!-- ################################################################################################ -->
                <div id="content">
                    <!-- ########################################################################################## -->

                    <section id="comments">

                        <h2>Register Yourself</h2>
                        <?php
                        require "functions.php";
                        $comment = "";
                        if (isset($_POST["register"])) {
                            $resultregister = register_user($_POST["salutation"], $_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["username"], $_POST["password"], $_POST["confirmpassword"]);
                            switch ($resultregister) {
                                case 1: header("Location: http://localhost/BShop/thanks.php");
                                    break;
                                case 2:$comment = "<br> Please fill all the fields correctly.";
                                    break;
                            }
                        }
                        ?>

                        <form action="register.php" method="post">
                            <p>Personal information</p>
                            <p>
                                <select name="salutation" value="" >
                                    <option value="Ms">Ms.</option>
                                    <option value="Mrs">Mrs.</option>
                                    <option value="Mr">Mr.</option>
                                </select>
                                <label for="salutation"><small>Salutation (required)</small></label> 
                            </p>
                            <p>
                                <input type="text" name="firstname" id="firstname" value="" size="22">
                                <label for="firstname"><small>First Name (required)</small></label>
                            </p>
                            <p>
                                <input type="text" name="lastname" id="lastname" value="" size="22">
                                <label for="lastname"><small>Last Name (required)</small></label>
                            </p>
                            <p>
                                <input type="text" name="email" id="email" value="" size="22">
                                <label for="email"><small>Email (required)</small></label>
                            </p>
                            <p class="divider"></p>
                            <p>
                                <input type="text" name="username" id="username" value="" size="22">
                                <label for="username"><small>Username (required)</small></label>
                            </p>
                            <p>
                                <input type="password" name="password" id="password" value="" size="22">
                                <label for="password"><small>Password (required)</small></label>
                            </p>
                            <p>
                                <input type="password" name="confirmpassword" id="confirmpassword" value="" size="22">
                                <label for="confirmpassword"><small>Confirm Password (required)</small></label>
                            </p>
                            <p>
                                <input name="register" type="submit" id="register" value="Submit">
                                &nbsp;
                                <input name="reset" type="reset" id="reset" value="Reset">
                            </p>
                        </form>
                        <?php
                        echo $comment;
                        ?>
                    </section>
                    <!-- ########################################################################################## -->
                </div>
                <!-- right column -->
                <aside id="right_column">
                    <!-- ########################################################################################## -->
                    <h2>Site Navigation</h2>


                </aside>
                <!-- ################################################################################################ -->
                <div class="clear"></div>
            </div>
        </div>
        <!-- Footer -->
        <div class="wrapper row3">
            <footer id="footer" class="clear">
                <p class="fl_left">Copyright &copy; 2013- <a href="#">Domain Name</a></p>
            </footer>
        </div>
    </body>
</html>
