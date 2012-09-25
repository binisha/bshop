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
                        <h2>Login</h2>
                        <?php
                        $login_comment = "";
                        if (isset($_POST["login"])) {
                            require "functions.php";
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            $result = authenticate($username, $password);

                            switch ($result) {
                                case 1: header("Location: http://localhost/BShop/userInfo.php?username=" . $username);
                                    break;
                                case 2:$login_comment = "<p> Invalid user <p>";
                                    break;
                            }
                        }
                        ?>

                        <form action="<?php // echo $_SERVER['PHP_SELF']     ?>" method="post">
                            <p>
                                <input type="text" name="username" id="username" value="" size="22">
                                <label for="username"><small>User Name (required)</small></label>
                            </p>

                            <p>
                                <input type="password" name="password" id="password" value="" size="22">
                                <label for="password"><small>Password (required)</small></label>
                            </p>

                            <a href='#'>Forgot your password?</a>

                            <p>
                                <input name="login" type="submit" id="login" value="Submit">
                                &nbsp;
                                <input name="reset" type="reset" id="reset" value="Reset">
                            </p>
                        </form>
                        <?php
                        echo $login_comment;
                        ?>

                    </section>
                    <!-- ########################################################################################## -->
                </div>
                <!-- right column -->
                <aside id="right_column">
                    <!-- ########################################################################################## -->
                    <h2>New User</h2>
                    <a href="register.php">Register here !</a>

                    <!-- /nav -->

                    <!-- ########################################################################################## -->
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
