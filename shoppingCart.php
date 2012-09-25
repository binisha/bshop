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
                        <h1>Items in my Cart</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>Header 1</th>
                                    <th>Header 2</th>
                                    <th>Header 3</th>
                                    <th>Header 4</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="light">
                                    <td>Value 1</td>
                                    <td>Value 2</td>
                                    <td>Value 3</td>
                                    <td>Value 4</td>
                                </tr>
                                <tr class="dark">
                                    <td>Value 5</td>
                                    <td>Value 6</td>
                                    <td>Value 7</td>
                                    <td>Value 8</td>
                                </tr>
                                <tr class="light">
                                    <td>Value 9</td>
                                    <td>Value 10</td>
                                    <td>Value 11</td>
                                    <td>Value 12</td>
                                </tr>
                                <tr class="dark">
                                    <td>Value 13</td>
                                    <td>Value 14</td>
                                    <td>Value 15</td>
                                    <td>Value 16</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <section id="comments">
                        <h2>Total Amount</h2>
                        <ul>
                            <li class="comment_odd">
                                <article>

                                    <section>
                                        <p>Your Total Amount: </p>
                                    </section>
                                </article>
                            </li>
                            <li class="comment_even">
                                <article>
                                    <header>

                                        <address>
                                            Payment <a href="#">Method</a>
                                        </address>

                                    </header>
                                    <form action="#" method="post">
                                        <p>
                                            <input type="radio" name="payment" id="name" value="Visa Card" >
                                            <label for="payment">Visa Card</label>
                                        </p>
                                        <p>
                                            <input type="radio" name="payment" id="name" value="Master Card" >
                                            <label for="payment">Master Card</label>
                                        </p>
                                        <p>
                                            <input type="radio" name="payment" id="name" value="Paypal" >
                                            <label for="payment">Paypal</label>
                                        </p>
                                        <p>
                                            <input name="submit" type="submit" id="submit" value="Pay Now">


                                        </p>
                                    </form>
                                </article>
                            </li>
                            <li class="comment_odd">
                                <article>
                                    <header>
                                        <figure><img src="images/demo/avatar.gif" width="32" height="32" alt=""></figure>
                                        <address>
                                            By <a href="#">A Name</a>
                                        </address>
                                        <time datetime="2000-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2000 @08:15:00</time>
                                    </header>
                                    <section>
                                        <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                                    </section>
                                </article>
                            </li>
                        </ul>

                    </section>
                    <!-- ########################################################################################## -->
                </div>
                <!-- right column -->
                <aside id="right_column">
                    <!-- ########################################################################################## -->
                    <h2>Site Navigation</h2>


                    <!-- /section -->
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
