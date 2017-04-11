
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The 30 Nights of Ramadhan</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="css/jquery.typeahead.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


    <link rel="icon" type="image/png" href="img/30nightsfavicon.png">
    <link rel="apple-touch-icon" href="img/30NightsIcon.png">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" style="color: #222;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href=".">
                    <img src="img/30NightsofRamadan.png" style="height:80px;border:0;margin-top: -30px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href=".#poems">Pieces</a>
                    </li>
                    <li>
                        <a class="page-scroll" href=".#whatisramadan">What is Ramadan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href=".#about">Who We are</a>
                    </li>
                    <li>
                        <a class="page-scroll" href=".#submit">Submit a Piece</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section id="pieces">
        <div class="container">

            <?php
                $id = $_GET['id'];
                include("config30nights.php"); //include config file
                $results = mysql_query("SELECT id, author, type, title, piece, date, upvotes FROM poems WHERE authorized=1 and id='$id'", $dbhandle);
                while($row = mysql_fetch_array($results)) {
                    $PhpDate = strtotime($row["date"]);
                    $FormattedPhpDate = ts2long($PhpDate);
                    $FormattedPiece = nl2br($row["piece"]);
                    $pieceID = $row["id"];
                    $type = $row["type"];
                    if ($type == "ShortStory") {
                        $type = "A Short Story";
                    } elseif ($type == "NonFiction") {
                        $type = "A Non-Fiction Piece";
                    } elseif ($type == "Poem") {
                        $type = "A Poem";
                    } elseif ($type == "Other") {
                        $type = "A Non Categorized Piece";
                    }

                        if ($row["title"] == NULL) {
                            $title = "Untitled";
                        } else {
                            $title = $row["title"];
                        }


                    echo '<div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading">'.$title.'</h2>
                                <h4 class="section-heading">'.$type.' By: '.$row["author"].'</h4>
                                <h5 class="section-heading">'.$FormattedPhpDate.'</h5>';
                    echo '<p style="color: #fff;">'.$FormattedPiece.'</p>';

                    if ($selected = mysql_query("SELECT tags.* FROM taggedItems,tags where taggedItems.pieceID='$pieceID' and taggedItems.tagID=tags.tagsID", $dbhandle)) {
                        echo '<ul class="tags" style="display: inline-block; margin-top: 20px;">';
                        while($tagsForPiece = mysql_fetch_array($selected)) {
                            echo '<li><a href="#" class="pieceTags">'.$tagsForPiece["tag"].'</a></li>';
                        }
                        echo '</ul>';
                    }
                    echo       '</div>
                          </div>';
                }

                function ts2long ($ts) 
                {
                    return date("jS F Y", $ts);                     
                }
            ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; 30 Nights of Ramadan</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://twitter.com/30NightsRamadan"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/pages/The-30-Nights-of-Ramadan/835276666552214"><i class="fa fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="./contact.php">Contact Us</a>
                        </li>
                        <li><a href="./data/PrivacyPolicy.pdf">Privacy Policy</a>
                        </li>
                        <li><a href="./data/TermsofService.pdf">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tagsinput.js"></script>
    <script src="js/jquery.bootpag.min.js"></script>
    <script src="js/typeahead.js"></script>

    <!--Loading the pieces -->
    <script src="js/loadpieces.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/submit.js"></script>
    <script src="js/bootstrap3-typeahead.js"></script>
    <!--<script type='text/javascript' src='js/select.js'></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    </body>

</html>