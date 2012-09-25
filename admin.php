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


                    <section>
                        <h1>Users Details</h1>
                        <?php
                        require "functions.php";
                        read_csv("user_data.csv");
                        ?>
                    </section>
                    <!--########################################################################################## -->
                </div>
                <!--right column-->
                <aside id = "right_column">
                    <!--########################################################################################## -->
                    <h2>My Favourites</h2>


                    <!--/nav-->

                    <!--########################################################################################## -->
                </aside>
                <!--################################################################################################ -->
                <div class = "clear"></div>
            </div>
        </div>
        <!--Footer-->
        <div class = "wrapper row3">
            <footer id = "footer" class = "clear">
                <p class = "fl_left">Copyright &copy;
                    2013- <a href = "#">Domain Name</a></p>
            </footer>
        </div>
    </body>
</html>


