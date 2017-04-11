<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="18000">

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

<body id="page-top" class="index" onload="location.href='#top'">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
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
                        <a class="page-scroll" href="#poems">Pieces</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#whatisramadan">What is Ramadan</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Who We are</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#submit">Submit a Piece</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
            <div class="container">
                <div class="intro-text">
                    <div class="intro-heading">The 30 Nights of Ramadan</div>
                    <a href="#poems" class="page-scroll btn btn-xl">View Written Pieces</a>
                </div>
            </div>
    </header>

    <!-- Poems Sections -->
    <section id="poems" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Submitted Pieces</h2>
                    <h3 class="section-subheading text-muted">Check back often for more pieces!</h3>
                </div>
            </div>
            <div class="row">
                <div id="results"></div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="pagination"></div>
            </div>
            <!--
            <div class="row">
                <div align="center">
                    <button class="load_more" id="load_more_button">load More</button>
                    <div class="animation_image" style="display:none;"><img src="img/ajax-loader.gif"> Loading...</div>
                </div>
            </div>
            -->
        </div>
    </section>

    <!-- What is Ramadhan Section -->
    <section id="whatisramadan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="color: white;">What is Ramadan?</h2>
                </div>
            </div>
            <div class="row text-center" style="font-style: italic; color: #fff;">
                <p> Ramadan is the ninth month in the Islamic calendar. This month is significant as the Prophet Muhammad left Mecca to Medina in order to avoid persecution. It is also the month where the Quran was revealed to the Prophet, and Muslims commemorate this through nights of worship. Muslims observe Ramadan as a month of fasting, which is one of the Five Pillars of Islam. From sunrise to sunset, millions of Muslims around the world restrict themselves from having food and water.</p>

                <p>However, the month of Ramadan is a month of spiritual cleansing; it is a time where Muslims get a chance to reflect on their lives, their thoughts and their feelings. It is also a time where many Muslims re-focus their relationship with God. Many Muslims wake up early for a morning meal, and begin their fast after morning prayers. After the evening prayers, Muslims break their fast with their families and sometimes with the members of their local Muslim community.</p>

                <p>It is a month in which the infinite mercy of God is manifested in its full form, and a time where Muslims reflect and improve on their lives for the future.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About 'The 30 Nights of Ramadan'</h2>
                </div>
            </div>
            <div class="row text-center" style="font-style: italic;">
                <p>'The 30 Nights of Ramadan’ project aims to use writing to help us in our journey of self-betterment during the holy month of Ramadan. Through this expressive art, we hope to create an atmosphere of Ramadan and help everyone around the world get into the spirit of self-reform during this very special month. We welcome all writers, whether brand new or seasoned, to write about the various themes surrounding this beautiful month. We hope that ‘The 30 Nights of Ramadan’ helps readers and writers reflect on various aspects of their lives, and create a sense of global community throughout this holy month.</p>
            </div>
        </div>
    </section>

    <!-- Submit Section -->
    <section id="submit">
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Submit Your Piece</h2>
                    <h3 class="section-subheading text-muted">Submit your written piece on Ramadan here!</h3>

                    <div id="flip">CLICK FOR RULES</div>
                    <div id="panel">
                        <p id="RulesText" style="color: #000">We invite everyone, whether you want to try writing or are already experienced, to participate in this project. As this is a month of reflection, we hope for everyone to share their own experiences through poetry, short stories, essays, or any other written format. This is not a competition, but rather a circle where we can all share our own ideas. There are a few guiding principles we encourage you to follow:</p>
                        <ol style="text-align: center; list-style-position:inside;">
                            <li>Please do not include any offending remarks or any hate speech</li>
                            <li>You can write about the various themes of Ramadan (whether it may be very subtle or very specific)</li>
                            <li>We accept submissions during the days of Ramadan. You are able to submit before-hand, and the poems will be published at the beginning of Ramadan.</li>
                            <li>Do not include any advertisements or solicit anything.</li>
                            <li>Do not post content you do not have the rights to.</li>
                            <li>Please be courteous and respectful to others</li>
                            <li>By submitting, you agree to the <a href="data/TermsofService.pdf" style="color: #FF1414;">Terms of Use </a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="submitForm" enctype="multipart/form-data" novalidate>
                        <div class="row" style="margin-top: 20px;">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name/Pen Name *" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email (In case we need to contact you about your piece) *" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="center">
                                    <p class="submitText">Select the type of piece you are submitting: *</p>
                                    <div class="styled-select">
                                        <select id="type" class="type" name="type" style="text-align: center; height: auto; width: 100%;">
                                            <option value="Poem">Poem</option>
                                            <option value="ShortStory">Short Story</option>
                                            <option value="NonFiction">Non-Fiction</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group" align="center" style="width: 100%; margin-bottom: 0px">
                                    <p class="tagText" style="color: white;">Keywords that describe your piece (Press enter after each tag):</p>
                                </div>
                                <div id="tags">
                                    <input type="search" id="tags" data-role="tagsinput" name="tags" autofocus autocomplete="off"/>
                                </div>
                            </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Title for your Poem (Optional)" id="title" style="margin-left: auto; margin-right: auto;">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Written Piece *" id="piece" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Submit Written Piece</button>
                        </div>
                    </form>
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
                        <li><a href="contact.php">Contact Us</a>
                        </li>
                        <li><a href="data/PrivacyPolicy.pdf">Privacy Policy</a>
                        </li>
                        <li><a href="data/TermsofService.pdf">Terms of Use</a>
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
    <script>
    $(function() {
        $("#flip").click(function() {
            $("#panel").slideToggle("slow");
        });
    });
    </script>
    <script>
    <?php
        include("config30nights.php");

        $results = mysql_query("SELECT COUNT(*) FROM `poems` WHERE authorized=1", $dbhandle);
        $get_total_rows = mysql_fetch_array($results); //total records

        $item_per_page = 4;

        //break total records into pages
        $total_pages = ceil($get_total_rows[0]/$item_per_page);
    ?>
    $(document).ready(function() {
    $("#results").load("./php/fetch_pages.php");  //initial page number to load
    $(".pagination").bootpag({
       total: '<?php echo $total_pages; ?>', // total number of pages
       page: 1, //initial page
       maxVisible: 5 //maximum visible links
    }).on("page", function(e, num){
        e.preventDefault();
        $("#results").load("./php/fetch_pages.php", {'page':num});
    });
});   
    </script>
    </body>

</html>
