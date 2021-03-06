﻿<!DOCTYPE html>
<html>
<head>
    <title>Centument - Mitglieder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="http://trade.centument.co/js/p.js"></script>
    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animations.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/loadingCircle.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="./form_files/boost-form.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-2.2.0.min.js"></script>
    
   
    
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand top" href="#"><img class="img-responsive main-logo center"
                                                               src="images/logo.png"/></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse no-gutter-at-all" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="top"><a href="#">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#click">Vermögenswerte</a></li>
                <li><a href="#game">Erfolge</a></li>
                <li><a href="#twitter">Soziale Netzwerke</a></li>
                <li><a href="#QA">FAQ</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<div class="container-fluid text-center" id="top">
    <div class="row">
        <div class="container">
            <h1 class="green bold text-uppercase">HANDELN SIE JETZT UND VERÄNDERN SIE FÜR IMMER IHR LEBEN!<br/><span
                    id="header-text">GARANTIERT $ 2.500 TÄGLICHE GEWINNE AUF IHREM KONTO AB HEUTE ABEND!</span></h1>
            <div class="col-md-8 col-xs-12">
                <iframe id="vid"
                        src="https://www.youtube.com/embed/tAoww9TO4PQ?modestbranding=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=1"
                        frameborder="0" allowfullscreen="allowfullscreen"></iframe>
            </div>
            <div class="col-md-4 col-xs-12 no-padding" id="form-container">
                <div id="form-header" class="arrow_box">
                    <p>VERVOLLSTÄNDIGEN SIE DIE ANMELDUNG<br/><span>UND BEGINNEN SIE NOCH HEUTE</span></p>
                    <div id="boost-form"
                         style="display: block; position: relative; width: 95%; margin-left: 10px; margin-top: 70px;">
                        <div class="fluffdush_overlay"
                             style="position: absolute; z-index: 999; width: 105%; height: 100%; margin-left: -2.5%; padding: 5px; padding-top: 70px; background:rgba(0,0,0,0.9); color: #FFFFFF; text-align: center; font-size: 40px;">
                            Verifiziere deine Daten. Bitte warte....
                            <div class="sk-circle">
                                <div class="sk-circle1 sk-child"></div>
                                <div class="sk-circle2 sk-child"></div>
                                <div class="sk-circle3 sk-child"></div>
                                <div class="sk-circle4 sk-child"></div>
                                <div class="sk-circle5 sk-child"></div>
                                <div class="sk-circle6 sk-child"></div>
                                <div class="sk-circle7 sk-child"></div>
                                <div class="sk-circle8 sk-child"></div>
                                <div class="sk-circle9 sk-child"></div>
                                <div class="sk-circle10 sk-child"></div>
                                <div class="sk-circle11 sk-child"></div>
                                <div class="sk-circle12 sk-child"></div>
                            </div>
                        </div>
                        <form method="post" id="regForm" autocomplete="off" novalidate="novalidate"
                              class="fluffdush_reg_form">
                            <div class="row">
                                <div class="holder left box box-6">
                                    <input type="text" id="FirstName" placeholder="First Name" name="FirstName"
                                           maxlength="45" class="fluffdush_inputs fluffdush_fname"
                                           data-rule-lettersonly="true" data-rule-required="true"
                                           data-msg-required="Enter Valid First Name" data-rule-minlength="2"
                                           value="<?php echo((isset($_GET["fname"]) && $_GET["fname"] != "") ? $_GET["fname"] : ''); ?>">
                                </div>
                                <div class="holder left box box-6">
                                    <input type="text" id="LastName" placeholder="Last Name" name="LastName"
                                           class="fluffdush_inputs fluffdush_lname" maxlength="45"
                                           data-rule-allletters="true" data-rule-required="true"
                                           data-msg-required="Enter Valid Last Name" data-rule-minlength="2"
                                           value="<?php echo((isset($_GET["lname"]) && $_GET["lname"] != "") ? $_GET["lname"] : ''); ?>">
                                </div>
                                <div class="holder left box box-12">
                                    <input type="text" id="email" placeholder="Email" name="email" maxlength="255"
                                           data-rule-email="true" class="fluffdush_inputs fluffdush_email"
                                           data-rule-required="true" data-msg-required="Enter Valid Email"
                                           value="<?php echo((isset($_GET["email"]) && $_GET["email"] != "") ? $_GET["email"] : ''); ?>">
                                </div>
                                <div class="holder left box box-12">
                                    <input type="password" placeholder="Choose a Password" name="password"
                                           class="fluffdush_inputs fluffdush_password" id="password" maxlength="32"
                                           data-rule-password="true" data-rule-required="true" data-rule-minlength="6"
                                           data-rule-maxlength="15" data-msg-required="Must contain letters or digits"
                                           value="">
                                </div>
                                <div class="holder left box box-12">
                                    <input type="text" placeholder="Phone" class="fluffdush_inputs fluffdush_phone"
                                           maxlength="16" data-rule-digits="true" data-rule-required="true"
                                           data-msg-required="Enter Valid Phone Number" value=""
                                           style="padding: 6px 0;">
                                </div>
                                <div class="left box box-12">
                                    <button class="btn fluffdush_sbutton" id="regBtn">Sign Up Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-center" id="news">
    <div class="row">
        <div class="container">
            <p id="see-what">Sehen Sie sich an, was in den Nachrichten über uns berichtet wird</p>
            <p id="see-what2">EIN MEISTERSTÜCK: DURCHSCHNITTLICH ERZIEHLEN DIE ERTRÄGE ÜBER 81 PROZENT AN GEWINNEN!</p>
            <div id="news-con">
                <img src="images/news-s.png" class="img-responsive center-block"/>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="click">
    <div class="row">
        <div class="container">
            <h3 class="green text-uppercase bold logosheader">DIE TRADINGSOFTWARE VON CENTUMENT LTD <span class="blue">PRÜFT VERMÖGENSWERTE </span>
                WIE AKTIEN, ROHSOFFE, INDIZES UND WÄHRUNGEN AN JEDER <span class="blue">WICHTIGEN BÖRSE WELTWEIT.</span>
            </h3>
            <p id="click-text">
                <span>Sie kennen vielleicht nicht den Unterschied zwischen Straddles, Strangles, Spreads und Swaps, aber das müssen Sie auch nicht. Ihr Programm wird für Sie profitable Trades mit hunderten von möglichen handelbaren Vermögenswerten, 24/7 an den Börsen weltweit durchführen.</span>
            </p>
            <img src="images/logos.png" class="center-block img-responsive"/>
        </div>
    </div>
</div>

<div class="container-fluid" id="game">
    <div class="row">
        <div class="container">
            <h2 class="blue text-center bold text-uppercase">DIE BAHNBRECHENDE, HOCHMODERNE TRADINGSOFTWARE<br/><span
                    class="green">DIE SOGAR ANFÄNGER  IN MILLIONÄREN VERWANDELTE!</span></h2>
            <p id="game-title2">Sie können dieses KOSTENLOSE Programm in kürzester Zeit installieren und damit beginnen,
                Gewinne zu erzielen, die&nbsp;IHR LEBEN VERÄNDERN werden!</p>
            <div class="col-md-5 col-xs-12" id="person-img-con">
                <img src="images/news-person.png" class="img-responsive"/>
            </div>
            <div class="col-md-7 col-xs-12" id="arrows-text">
                <div class="col-md-1 no-padding"><img src="images/arrow.png"/></div>
                <div class="col-md-11">Die<strong> Trading-Software für Vermögenswerte von Centument LTD </strong>lässt
                    sich einfach installieren und einrichten. Sowohl professionelle Trader als auch Anfänger können in
                    wenigen Minuten traden und profitieren, da sich das Programm um alle Aspekte Ihrer profitablen
                    Trades kümmert. Dies ist das PERFEKTE Programm für jemanden, der KEIN WISSEN über die Märkte oder
                    keine Erfahrung damit hat.
                </div>
                <div class="col-md-1 no-padding"><img src="images/arrow.png"/></div>
                <div class="col-md-11">Die <strong>Trading-Software für Vermögenswerte von Centument LTD</strong>
                    verarbeitet sofort MILLIARDEN von Daten über Vermögenswerte, bestimmt die wahrscheinlichsten UND die
                    profitabelsten Transaktionen in Sekundenschnelle. Hunderte von professionellen Tradern können in
                    einem Jahr nicht das erreichen, was dieses Programm in einer Sekunde leistet.
                </div>
                <div class="col-md-1 no-padding"><img src="images/arrow.png"/></div>
                <div class="col-md-11">Die <strong>Trading-Software für Vermögenswerte von Centument LTD</strong> ist in
                    JEDER Marktsituation profitabel. Bullenmärkte, Bärenmärkte oder Märkte in Seitwärtsphasen; das
                    Programm durchkämmt alle handelbaren Vermögenswerte nach möglichen Gewinnen. Während die Märkte
                    scheinbar „ihre eigenen Gedanken haben”, können Sie diese Gedanken „lesen” und es der Software
                    überlassen, schwierige Entscheidungen für Sie zu treffen. Sie werden in JEDER Phase der Wirtschaft
                    oder des Marktes gewinnen.
                </div>
                <div class="col-md-1 no-padding"><img src="images/arrow.png"/></div>
                <div class="col-md-11">Die <strong>Trading-Software für Vermögenswerte von Centument LTD</strong>
                    überprüft Vermögenswerte wie Aktien, Rohstoffe, Indizes und Währungen in Märkten auf der ganzen
                    Welt. Sie kennen vielleicht nicht die Unterschiede zwischen Straddles, Strangles, Spreads und Swaps,
                    das müssen Sie aber auch nicht. Ihr Programm führt profitable Trades für Sie 24/7 auf den Börsen
                    weltweit mit dutzend möglichen Vermögenswerten durch.
                </div>
                <div class="clearfix"></div>
                <div class="getStarted">
                    <div class="col-md-8 col-xs-12 no-padding getStarted-text">KLICKEN SIE HIER, UM ZU BEGINNEN</div>
                    <div class="col-md-4 col-xs-12 no-padding getStarted-text2"><p>100%<br/>KOSTENLOS</p></div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container-fluid" id="complete">
    <div class="row">

        <p id="complete-title">VERVOLLSTÄNDIGEN SIE DIE ANMELDUNG UND BEGINNEN SIE NOCH HEUTE</p>
        <div class="col-md-5 col-xs-12 form-div ele-center">
            <div id="boost-form2" style="display: block; position: relative">
                <div class="fluffdush_overlay"
                     style="position: absolute; z-index: 999; width: 110%; height: 100%; margin-left: -5%; padding: 5px; padding-top: 70px; background:rgba(0,0,0,0.9); color: #FFFFFF; text-align: center; font-size: 40px;">
                    Verifiziere deine Daten. Bitte warte....
                    <div class="sk-circle">
                        <div class="sk-circle1 sk-child"></div>
                        <div class="sk-circle2 sk-child"></div>
                        <div class="sk-circle3 sk-child"></div>
                        <div class="sk-circle4 sk-child"></div>
                        <div class="sk-circle5 sk-child"></div>
                        <div class="sk-circle6 sk-child"></div>
                        <div class="sk-circle7 sk-child"></div>
                        <div class="sk-circle8 sk-child"></div>
                        <div class="sk-circle9 sk-child"></div>
                        <div class="sk-circle10 sk-child"></div>
                        <div class="sk-circle11 sk-child"></div>
                        <div class="sk-circle12 sk-child"></div>
                    </div>
                </div>
                <form method="post" id="regForm2" autocomplete="off" novalidate="novalidate" class="fluffdush_reg_form">
                    <div class="row">
                        <div class="holder left box box-6">
                            <input type="text" id="FirstName2" placeholder="First Name" name="FirstName" maxlength="45"
                                   class="fluffdush_inputs fluffdush_fname" data-rule-lettersonly="true"
                                   data-rule-required="true" data-msg-required="Enter Valid First Name"
                                   data-rule-minlength="2"
                                   value="<?php echo((isset($_GET["fname"]) && $_GET["fname"] != "") ? $_GET["fname"] : ''); ?>">
                        </div>
                        <div class="holder left box box-6">
                            <input type="text" id="LastName2" placeholder="Last Name" name="LastName"
                                   class="fluffdush_inputs fluffdush_lname" maxlength="45" data-rule-allletters="true"
                                   data-rule-required="true" data-msg-required="Enter Valid Last Name"
                                   data-rule-minlength="2"
                                   value="<?php echo((isset($_GET["lname"]) && $_GET["lname"] != "") ? $_GET["lname"] : ''); ?>">
                        </div>
                        <div class="holder left box box-12">
                            <input type="text" id="email2" placeholder="Email" name="email" maxlength="255"
                                   data-rule-email="true" class="fluffdush_inputs fluffdush_email"
                                   data-rule-required="true" data-msg-required="Enter Valid Email"
                                   value="<?php echo((isset($_GET["email"]) && $_GET["email"] != "") ? $_GET["email"] : ''); ?>">
                        </div>
                        <div class="holder left box box-12">
                            <input type="password" placeholder="Choose a Password" name="password"
                                   class="fluffdush_inputs fluffdush_password" id="password2" maxlength="32"
                                   data-rule-password="true" data-rule-required="true" data-rule-minlength="6"
                                   data-rule-maxlength="15" data-msg-required="Must contain letters or digits" value="">
                        </div>
                        <div class="holder left box box-12">
                            <input type="text" id="phone2" placeholder="Phone" name="phone"
                                   class="fluffdush_inputs fluffdush_phone" maxlength="16" data-rule-digits="true"
                                   data-rule-required="true" data-msg-required="Enter Valid Phone Number" value="">
                        </div>
                        <div class="left box box-12">
                            <button class="btn fluffdush_sbutton" id="regBtn2">Sign Up Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="twitter">
    <div class="row">
        <div class="container">
            <p id="twitter-title">Twitter Testimonials</p>
            <!--                <p id="twitter-title2">Start building a massive list – turning visitors into loyal subscribers with our email auto-responder integration. Automatically add visitors to your email list when they send you a message.</p>-->
            <div id="twitter-con">
                <div id="twitter-people-con">
                    <div class="twitter-person">
                        <div class="person-img-con"><img class="person-img" src="images/people/portraits/m/14.jpg"/>
                        </div>
                        <div class="person-right-side">
                            <p class="person-title">Julian Robinson @JulianRobinson</p>
                            <p class="person-text">@CentumentLTD hat gesagt, dass es einfach ist, das habe ich aber
                                nicht erwartet. $ 25K schon in meiner ersten Woche vorne. Keine Ahnung, was passiert,
                                aber macht so weiter!</p>
                            <img id="fTwitter" src="images/twitter/1.png"><img src="images/twitter/2.png"><span
                                class="shares">8</span><img src="images/twitter/3.png"><span class="likes">22</span><img
                                src="images/twitter/4.png">
                        </div>
                    </div>
                    <div class="twitter-person">
                        <div class="person-img-con"><img class="person-img" src="images/people/portraits/m/20.jpg"/>
                        </div>
                        <div class="person-right-side">
                            <p class="person-title">Mathew Ingraham @mathewing</p>
                            <p class="person-text">Toskana, wir kommen! Flug und Villa für Juni ist gebucht. Danke,
                                @CentumentLTD. Die $$$ sind großartig! Als nächstes steht Machu Picchu auf dem
                                Programm.</p>
                            <img id="fTwitter" src="images/twitter/1.png"><img src="images/twitter/2.png"><span
                                class="shares">11</span><img src="images/twitter/3.png"><span
                                class="likes">17</span><img src="images/twitter/4.png">
                        </div>
                    </div>
                    <div class="twitter-person">
                        <div class="person-img-con"><img class="person-img" src="images/people/portraits/m/25.jpg"/>
                        </div>
                        <div class="person-right-side">
                            <p class="person-title">Tom Reynolds @thomasrAZ</p>
                            <p class="person-text">@CentumentLTD lasst mich wissen, wenn ich ein gutes Wort für Euch
                                einlegen kann. Ich habe diesen Monat $ 78.500 verdient und es ist erst der 20. So
                                großartig, wie von Euch versprochen.</p>
                            <img id="fTwitter" src="images/twitter/1.png"><img src="images/twitter/2.png"><span
                                class="shares">6</span><img src="images/twitter/3.png"><span class="likes">12</span><img
                                src="images/twitter/4.png">
                        </div>
                    </div>
                </div>
                <img src="images/twitter-bird.png" id="twitter-bird"/>
            </div>
        </div>
    </div>
</div>

<div id="QA" class="container-fluid QA-container">
    <!-- QA-container -->
    <div class="row">
        <div class="container">
            <h2 class="white text-center bold dark">Häufigste Fragen</h2>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Was ist Centument Ltd.?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    CENTUMENT ist ein Algo-Trading-System, das eine bestehende Infrastruktur und extrem schnelle Computer verwendet, um Vermögenswerte, Währungen und Futures auf den Finanzmärkten zu kaufen und zu verkaufen. In den letzten 4 Jahren hat dieses Computerprogramm an 1.478 Handelstagen nur einmal Geld verloren. Das Unternehmen hat 170 Angestellte und rechnet bis zum Jahresende mit einem Nettoumsatz von $ 650 Millionen.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Wann wurde CENTUMENT Ltd. gegründet?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    CENTUMENT wurde von seinen Gründungsmitgliedern im März 2011 gegründet. Innerhalb von zwei Jahren konnte das Unternehmen einen Nettogewinn von $ 304 Millionen für seine Gesellschafter erwirtschaften. Diese Zahlen wurden in den letzten 4 Jahren jeweils übertroffen.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Wie kann ich beginnen?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    Das ist sehr einfach. Füllen Sie einfach das Anmeldeformular aus, solange es noch verfügbar ist, machen Sie Ihre Ersteinzahlung und Ihr Konto wird dann automatisch mit dem System verbunden. Die ganze Arbeit wird zu 100 % für Sie übernommen und Sie können dann Ihre Gewinne einfahren.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Wie viel Geld kann ich pro Tag verdienen?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    Wir garantieren Ihnen, dass Sie im Durchschnitt täglich $ 2.500 verdienen, was $ 18.000 pro Woche bedeutet. Sehen Sie sich unsere Mitgliederseite an um festzustellen, was genau wir für unsere derzeitigen Mitglieder – und hoffentlich auch schon bald für Sie – erreichen.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Was kann Centument Ltd. für mich tun?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    Wenn Sie sich mit unserem Master-Account verbinden, was 100 % KOSTENLOS ist, können wir GARANTIERT täglich Gewinne von $ 2.500 erzielen.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 QA">
                <div class="Q-body">
                    <div class="question-holder">
                        <div class="Q">
                            <span class="">F</span>
                        </div>
                        <div class="question">
                                <span class="">
                                    Wie funktioniert das?
                                </span>
                        </div>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <div class="A-body">
                    <div class="answer-holder">
                        <div class="A">
                            <span class="">A</span>
                        </div>
                        <div class="answer">
                                <span class="">
                                    CENTUMENT verwendet eine bestehende Infrastruktur und extrem schnelle Computer, um Vermögenswerte, Währungen und Futures auf den Finanzmärkten zu kaufen und zu verkaufen. Für die Vermögenswerte, die interessant sind, bietet das System sowohl einen KAUF als auch einen VERKAUFS-Kurs. Am Ende des Tages verkauft es die Mehrzahl der Positionen – und verdient sehr viel Geld damit. Für Sie erfolgt das alles mittels Autopilot, um Ihnen Ihre Gewinne zu garantieren.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container">
        <img class="img-responsive" src="../images/footer-logo.png"/>
        <ul class="nav navbar-nav navbar-right">
            <li class="top"><a href="#">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#click">Vermögenswerte</a></li>
            <li><a href="#game">Erfolge</a></li>
            <li><a href="#twitter">Soziale Netzwerke</a></li>
            <li><a href="#QA">FAQ </a></li>
        </ul>
        <div class="clearfix"></div>
        <img class="img-responsive footer-badge" src="../images/badges.png"/>
    </div>
    <!--        <p>Copyright 2016 - FunnelStak - All Rights Reserved</p>-->
    <br>
    <p style="color:#fff;font-size:11px;" class="text-center">
        * Erzielte Gewinne können variieren und werden nicht garantiert. Wir empfehlen Ihnen eindringlich, dass Sie
        unsere Risiko-Haftungsausschlusserklärung und unsere Datenschutzrichtlinie lesen, bevor Sie diese Website
        aufrufen.
    </p>
</footer>
<script type="text/javascript" src="//bringyour.email/js/bye.js"></script>
<script src="../js/coo.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/jquery.mobile.custom.min.js"></script>
<script src="../js/vendor/jquery.validate.min.js"></script>
<script src="../js/main.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77506256-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>