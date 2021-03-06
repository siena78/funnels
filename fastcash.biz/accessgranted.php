<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>#1 FastCash-DE.biz</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Parallax Scrolling CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="assets/favicon-fc.ico">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script language="javascript" src="js/jquery.blockUI.js%3Fv=1"></script>
    <script>
      var $viewportMeta = $('meta[name="viewport"]');
      $('input, select, textarea').bind('focus blur', function(event) {
      $viewportMeta.attr('content', 'width=device-width,initial-scale=1,maximum-scale=' +        (event.type == 'blur' ? 10 : 1));
    });
    </script>
  <!-- Custom CSS -->
  <link href="css/front-end.css%3Fv=68.css" rel="stylesheet">
  <style>
    @media (min-width: 1200px){
      .top-logo .container {
        width: 96% !important;
      }
    }
  </style>
  <script src="js/phpdate.js"></script>
</head>
<body>
<?php include_once("analyticstracking.php") ?>
  <!-- Header -->
  <div class="intro-header">
    <!-- Top -->
    <div class="top-logo">
      <div class="container">
        <div class="row">
                    <div class="col-md-8">
            <img src="assets/logo.png" alt="Logo" class="img-responsive" style="margin:0"/>
          </div>
          <div class="col-md-4 col-xs-12">
            <div class="col-md-8 col-xs-12 license-text">
              <h2>Restliche Lizenzen</h2>
              <h5>Letzte Überprüfung: <script>document.write(date('d m Y - H:i:s'));</script></h5>
            </div>
            <div class="col-md-4 col-xs-12 number">
              <h3 id="spotcounter" class="bg-green">2</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.top-logo -->
    <div class="fe-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h1 class="sq_tophl">Klicken Sie auf die nachstehende Schaltfläche, um</h1>
            <h2 class="sq_hl">sich 1 der 10 Fast Cash DE Biz Mitgliedschaften zu sichern</h2>
            <div class="video-wrapper">
              <div align="center" class="embed-responsive embed-responsive-16by9">
                <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                  <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                    <iframe src="https://www.youtube.com/embed/k8DUf_gombw?controls=0&amp;showinfo=0&amp;rel=0&amp;title=0&amp;autohide=1&amp;wmode=transparent&amp;hd=1&amp;autoplay=1" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                </div>
                <script src="http://fast.wistia.net/assets/external/E-v1.js" async></script>
              </div>   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.intro-header -->
  <div class="form-section-squeeze">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="disable_text">Bitte verlassen Sie diese Seite nicht. Andernfalls wird Ihr Platz an die nächste wartende Person weitergegeben. </h4>
                    <button id="continue_btn" type="submit" onclick="gotoMem();">Klicken Sie hier, um fortzufahren</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var spotcounter = 2;
    function updateCounter()
    {
      if(spotcounter > 0)
      {
        $("#spotcounter").html(spotcounter--);
        if(spotcounter == 1)
          setTimeout(function(){updateCounter();}, 864*1000);
        else
          setTimeout(function(){updateCounter();}, 864*1000);
      }
      else
      {
        $("#spotcounter").html(0);
      }
    }
    jQuery(document).ready(function(){
      setTimeout(function(){updateCounter();}, 864*1000);
    });
    
          /*var minutes = 8;
      var seconds = 0;
      var centiseconds = 0;
        timerinter = setInterval(function() {
        centiseconds -= 9;

        if (centiseconds < 0) {
            centiseconds = 99;
            seconds--;
        }

        if (seconds < 0) {
            seconds = 59;
            minutes--;
        }

        if (minutes < 0) {
            minutes = 0;
            seconds = 0;
            centiseconds = 0;
            clearInterval(timerinter); 
            changeBtnAttr();
        }

        if ((minutes + "").length < 2)
            minutes = "0" + minutes;
        if ((seconds + "").length < 2)
            seconds = "0" + seconds;
        if ((centiseconds + "").length < 2)
            centiseconds = "0" + centiseconds;

        $(".minutes").html(minutes);
        $(".seconds").html(seconds);
        $(".centiseconds").html(centiseconds);
      }, 90); */
    function getQueryVariable(variable)
    {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
      }
      return(false);
    }

    function gotoMem()
    {
      PreventExitSplash = true;
      var semail = getQueryVariable("email");
      var fname = getQueryVariable("fname");
      var mem_rdirect = "signup.php";
      top.location.href = mem_rdirect;
      return false;
    }
    
    function changeBtnAttr()
    {
      //$('#continue_btn').prop('disabled', false);
      $('#continue_btn').removeAttr("disabled");
      $('#continue_btn').removeClass('disable_button');
      $("#continue_btn").on("click", function(){ gotoMem(); });
    }
    function getQueryVariable(variable)
    {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == variable){return pair[1];}
      }
      return(false);
    }
    var semail = getQueryVariable("email");
    var fname = getQueryVariable("fname");
    var exitsplashmessage = '***************************************\n W A I T   B E F O R E   Y O U   G O !\n\n  CLICK *STAY ON THIS PAGE* BUTTON RIGHT NOW\n     TO STAY GET THE EXACT METHOD THAT\n  BANKED ME $35,827.29 IN JUST 24 HOURS!\n\n     >> STAY ON THIS PAGE <<\n\n***************************************';
    var exitsplashpage = "signup.php";
  </script><br/>
  <div class="footer-top">
    <div class="row">
      <div class="col-md-4">
        <p>Copyright &copy; 2016 FastCash-DE.biz | Alle Rechte vorbehalten</p>
        <p style="padding-top: 10px; font-size: 9px; text-align: justify; width: 71%;">WARNHINWEIS: Jede natürliche oder juristische Person, welche illegale Kopien von FastCash-DE.biz anfertigt oder das Programm oder Teile des Programmes oder des Webseitenauftritts kopiert, versucht zu verkaufen oder verkauft, wird ihrem Hostingunternehmen, Abrechnungsunternehmen und sonstigen mit dem Konto verbundenen Unternehmen zur Kontenschließung gemeldet.</p>
      </div>
      <div class="col-md-8">
        <ul>
          <li><a href="privacy.php">Datenschutzbestimmungen</a></li>
          <li><a href="tos.php">Allgemeine Geschäftsbedingungen</a></li>
          <li><a href="disclaimer.php">Einkommenhaftungsausschluss</a></li>
          <li><a href="mailto:support@fastcash-de.biz">Kundenbetreuung</a></li>
        </ul>
      </div>
    </div>
</div>
<!-- Bootstrap Core JavaScript -->
<script language="javascript" src="js/bootstrap.min.js"></script>

  <script language="javascript" src="exitsplash.php"></script>
</body>
</html>
  