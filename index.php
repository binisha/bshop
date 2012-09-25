<?php
session_start();
?>
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
        <div class="wrapper row2">
            <div id="container">
                <!-- ################################################################################################ -->
                <!-- content body -->
                <section id="portfolio" class="clear">

                    <?php
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
//                    require "functions.php";
//                    $item_array = load_shopping_item();
                    $i = 1;
                    foreach ($item_array as $a) {
                        echo "<article><header>
                            <h2>$a[1]</h2>
                        </header>";
                        echo "<img src='images/demo/" . $a[3] . "'/>";
                        echo "<div class=\"meta\">
                            <div class=\"tags\"><strong>Price:</strong> $a[2] Euro</div>
                        </div>";
                        echo "<footer><a href=\"#\" >Buy Me</a></footer>";

                        $i++;
                    }
                    ?>
                </section>
                <!-- ####################################################################################################### -->
                <!-- ####################################################################################################### -->
                <div class="pagination">
                    <ul>
                        <li class="prev"><a href="#">&laquo; Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="splitter"><strong>&hellip;</strong></li>
                        <li><a href="#">6</a></li>
                        <li class="current"><strong>7</strong></li>
                        <li><a href="#">8</a></li>
                        <li class="splitter"><strong>&hellip;</strong></li>
                        <li><a href="#">14</a></li>
                        <li><a href="#">15</a></li>
                        <li class="next"><a href="#">Next &raquo;</a></li>
                    </ul>
                </div>
                <!-- / content body -->
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
    </div>
</body>
</html>