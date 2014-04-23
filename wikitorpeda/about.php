<!DOCTYPE html>
<html lang="pl"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="http://getbootstrap.com/assets/ico/favicon.ico">

        <title>Wikitorpeda - totalna wyszukiwarka Wikipedii</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/wikitorpeda.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/navbar-fixed-top.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css"></style>
        <!--<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">-->
        <script src="js/ga.js" async="" type="text/javascript"></script>
        <script src="js/mixpanel-2.js" async="" type="text/javascript"></script>
        <style media="screen" type="text/css">#dddContent {visibility:hidden}</style>
        <style media="screen" type="text/css">#easyInlineSwf {visibility:hidden}</style><style type="text/css"></style>
        <style type="text/css">#reviewsDisp , #reviewsDisp * { position:relative; color:inherit; font-family:Arial; font-weight:inherit; font-size:inherit; margin:0; padding:0; box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; text-align:center; line-height:1; border:none; -webkit-border-radius:0; -moz-border-radius:0; border-radius:0; text-shadow:none;-moz-box-shadow: none; -webkit-box-shadow: none;box-shadow: none;overflow:hidden; }#reviewsDisp { display:block; position:relative; margin:9px; width:143px; height:70px; color:#BABABA; background:#FFF; border:1px solid #BABABA; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; overflow:hidden; }#reviewsDisp.reviewRed { color:#C66; }#reviewsDisp.reviewYellow { color:#C90; }#reviewsDisp.reviewGreen { color:#6B9E0C; }#reviewsDisp .reviewContent { display:block; float:left; width:119px;  }#reviewsDisp .reviewTitle { height:23px; font-size:14px; color:#69C; font-weight:bold; background: #ffffff; background: -moz-linear-gradient(top,  #ffffff 0%, #eeeeee 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eeeeee));background: -webkit-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -o-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -ms-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: linear-gradient(to bottom,  #ffffff 0%,#eeeeee 100%);  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );  }#reviewsDisp.trust.reviewRed .reviewTitle, #reviewsDisp.trust.reviewYellow .reviewTitle, #reviewsDisp.trust.reviewGreen .reviewTitle { color:inherit; }#reviewsDisp .reviewTitle > div { line-height:23px; }#reviewsDisp .reviewSection { height:28px; margin:5px 0 0; font-size:12px; font-weight:bold; }#reviewsDisp .reviewSection .percent.rated { font-size:26px }#reviewsDisp .reviewSection .percent span { font-size:18px; position:relative; top:-7px; }#reviewsDisp .reviewSection .reviewStars { color:#BABABA;font-size:12px;margin-left:4px; }#reviewsDisp .reviewSection .reviewStar { float:left; margin-top:3px; width:22px; height:22px; background:url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent; background }#reviewsDisp .reviewSection .reviewStar.reviewStarFull { background-position:-5px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarHalf { background-position:-27px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarNone { background-position:-49px -88px }#reviewsDisp .reviewFooter { font-size:10px; line-height:12px;color:#BABABA; }#reviewsDisp.trust .reviewFooter { color:inherit; margin:0 5px; overflow:hidden; }.trust .rate { display:none }.rate .trust { display:none }#reviewsDisp .reviewNav { width:24px; display:block; float:right; }#reviewsDisp .reviewNav .reviewBtn { display:block; height:23px; background:url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent; background-color:#E3E3E3; border-bottom:1px solid #FFF;cursor:pointer; }#reviewsDisp .reviewNav .reviewBtn:last-child { border-bottom:none; }#reviewsDisp .reviewNav .reviewBtn.hover { background-color:#D1D1D1; }#reviewsDisp .reviewNav .reviewBtn.reviewSelected { background-color:#BABABA; cursor:auto; }#reviewsDisp .reviewNav .reviewBtn.reviewCheck { background-position: -3px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewCheck { background-position: -33px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewThumb { background-position: -3px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewThumb { background-position: -33px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewInfo { background-position: -3px -32px }</style>
    </head>

    <body style="margin-bottom: 90px;">

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top startbootstrap-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="torpeda.png"></img></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="about.php">O projekcie</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>

        <div class="container" id="container">
            <h3>
                Wikitorpeda - totalna wyszukiwarka wikipedii
            </h3>
            <div class="jumbotron" style="margin-top: 10px">
                <p><b>Wikitorpeda</b> - projekt, który powstał w ramach przedmiotu <b>Inteligentne Systemy Informacyjne</b>.
                    Umożliwia przeszukiwanie dump'ów wikipedii wraz z historią zmian. <br>Dostępne są dwie dodatkowe opcje wyszukiwania: szukanie po zakresie czasowym i po powodzie edycji artykułu </p>
                <p>Narzędzia wykorzystane w projekcie:
                <ul>
                    <li> Apache Solr</li>
                    <li> PHP Solr</li>
                    <li> Bootstrap Framework</li>
                </ul>
                </p>
                <p>Skład grupy:
                <ul>
                    <li> Mateusz Buśko</li>
                    <li> Błażej Kubiński</li>
                    <li> Szymon Apolinarski</li>
                </ul>
                </p>
            </div>
        </div> <!-- /container -->


    </body>
</html>





