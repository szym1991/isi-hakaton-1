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
        <link href="css/bootstrap-paginator.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/wikitorpeda.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/navbar-fixed-top.css" rel="stylesheet">
        <link href="css/datepicker.css" rel="stylesheet">
        <link rel="stylesheet" href="paginator/css/qunit-1.11.0.css">
        

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css"></style>
        <script src="js/ga.js" async="" type="text/javascript"></script>
        <script src="js/mixpanel-2.js" async="" type="text/javascript"></script>
        
        <style media="screen" type="text/css">#dddContent {visibility:hidden}</style>
        <style media="screen" type="text/css">#easyInlineSwf {visibility:hidden}</style><style type="text/css"></style>
        <style type="text/css">#reviewsDisp , #reviewsDisp * { position:relative; color:inherit; font-family:Arial; font-weight:inherit; font-size:inherit; margin:0; padding:0; box-sizing:content-box; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; text-align:center; line-height:1; border:none; -webkit-border-radius:0; -moz-border-radius:0; border-radius:0; text-shadow:none;-moz-box-shadow: none; -webkit-box-shadow: none;box-shadow: none;overflow:hidden; }#reviewsDisp { display:block; position:relative; margin:9px; width:143px; height:70px; color:#BABABA; background:#FFF; border:1px solid #BABABA; -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; overflow:hidden; }#reviewsDisp.reviewRed { color:#C66; }#reviewsDisp.reviewYellow { color:#C90; }#reviewsDisp.reviewGreen { color:#6B9E0C; }#reviewsDisp .reviewContent { display:block; float:left; width:119px;  }#reviewsDisp .reviewTitle { height:23px; font-size:14px; color:#69C; font-weight:bold; background: #ffffff; background: -moz-linear-gradient(top,  #ffffff 0%, #eeeeee 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#eeeeee));background: -webkit-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -o-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: -ms-linear-gradient(top,  #ffffff 0%,#eeeeee 100%);  background: linear-gradient(to bottom,  #ffffff 0%,#eeeeee 100%);  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eeeeee',GradientType=0 );  }#reviewsDisp.trust.reviewRed .reviewTitle, #reviewsDisp.trust.reviewYellow .reviewTitle, #reviewsDisp.trust.reviewGreen .reviewTitle { color:inherit; }#reviewsDisp .reviewTitle > div { line-height:23px; }#reviewsDisp .reviewSection { height:28px; margin:5px 0 0; font-size:12px; font-weight:bold; }#reviewsDisp .reviewSection .percent.rated { font-size:26px }#reviewsDisp .reviewSection .percent span { font-size:18px; position:relative; top:-7px; }#reviewsDisp .reviewSection .reviewStars { color:#BABABA;font-size:12px;margin-left:4px; }#reviewsDisp .reviewSection .reviewStar { float:left; margin-top:3px; width:22px; height:22px; background:url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent; background }#reviewsDisp .reviewSection .reviewStar.reviewStarFull { background-position:-5px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarHalf { background-position:-27px -88px }#reviewsDisp .reviewSection .reviewStar.reviewStarNone { background-position:-49px -88px }#reviewsDisp .reviewFooter { font-size:10px; line-height:12px;color:#BABABA; }#reviewsDisp.trust .reviewFooter { color:inherit; margin:0 5px; overflow:hidden; }.trust .rate { display:none }.rate .trust { display:none }#reviewsDisp .reviewNav { width:24px; display:block; float:right; }#reviewsDisp .reviewNav .reviewBtn { display:block; height:23px; background:url(//hdapp1008-a.akamaihd.net/app/review_sprite.png) transparent; background-color:#E3E3E3; border-bottom:1px solid #FFF;cursor:pointer; }#reviewsDisp .reviewNav .reviewBtn:last-child { border-bottom:none; }#reviewsDisp .reviewNav .reviewBtn.hover { background-color:#D1D1D1; }#reviewsDisp .reviewNav .reviewBtn.reviewSelected { background-color:#BABABA; cursor:auto; }#reviewsDisp .reviewNav .reviewBtn.reviewCheck { background-position: -3px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewCheck { background-position: -33px -6px }#reviewsDisp .reviewNav .reviewBtn.reviewThumb { background-position: -3px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewSelected.reviewThumb { background-position: -33px -59px }#reviewsDisp .reviewNav .reviewBtn.reviewInfo { background-position: -3px -32px }</style>
    </head>

    <body style="margin-bottom: 90px;">

        <!-- Fixed navbar -->
        <?php
        require_once(dirname(__FILE__) . '/navbar.php');
        ?>

        <div class="container-fluid" id="container">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h2 class="text-center">Wyszukiwarka</h2>
                        </br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon">?</span>
                            <input id="query" name="query" type="text" class="form-control" placeholder="Wpisz swoje zapytanie...">
                        </div>
                        </br>
                        <div style="text-align: right;">
                            <button class="btn btn-default btn-sm" onclick="$('#tools_searcher').toggle();">Narzędzia zaawansowane</button>
                        </div>
                        </br>
                        <div id="tools_searcher" style="display: none;">
                            <div class="row">
                                <div class="checkbox col-md-3">
                                    <label>
                                        <input class="question" type="checkbox" id="check_date" onclick="$('#date_searcher').toggle();"> Zakres dat  
                                    </label>
                                </div>
                            </div>
                            <div id="date_searcher" style="display: none;">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Od</span>
                                        <input type="text" id="dp1" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Do</span>
                                        <input type="text" id="dp2" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="alert alert-error" id="alert" style="display: none;">
                                      <strong>Oh snap!</strong>
                                </div>
                            </div>​
                            <div class="row">
                                <div class="checkbox col-md-6">
                                    <label>
                                        <input class="question" type="checkbox" id="check_comment" onclick="$('#comment_searcher').toggle();"> Powód edycji artykułu
                                    </label>
                                </div>
                            </div>
                            <div id="comment_searcher" style="display: none; padding-bottom: 25px;">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">!</span>
                                        <input type="text" id="comment" class="form-control" placeholder="">
                                    </div>
                                </div>
                            </div>​
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Liczba wyników na stronie</span>
                                        <select class="form-control input-sm" id="per_page" data-style="btn-warning">
                                            <option selected>10</option>
                                            <option>15</option>
                                            <option>25</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div style="text-align: center;">
                            <a id="search" class="btn btn-lg btn-primary text-center" href="#" role="button">Szukaj</a>
                        </div>
                        </p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <span id="results">
                    </span>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div> <!-- /container -->


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->      
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="paginator/lib/bootstrap-paginator.min.js"></script>
        <script src="paginator/lib/jquery-1.9.1.min.js"></script>
        <script src="paginator/src/bootstrap-paginator.js"></script>
        <script src="paginator/lib/qunit-1.11.0.js"></script>
        <script src="js/search.js"></script>
        <script>
                                $('#check_date').removeAttr("checked");
                                $('#check_comment').removeAttr("checked");
                                $(function() {
                                    window.prettyPrint && prettyPrint();
                                    var today = new Date();
                                    var month = today.getMonth() + 1;
                                    var day = today.getDate();
                                    if (month.toString().length === 1) {
                                        var month = '0' + month;
                                    }
                                    if (day.toString().length === 1) {
                                        var day = '0' + day;
                                    }

                                    document.getElementById("dp1").value = today.getFullYear() + "-" + month + "-" + day;
                                    document.getElementById("dp2").value = today.getFullYear() + "-" + month + "-" + day;
                                    var startDate = today;
                                    var endDate = today;
                                    $('#dp1').datepicker({
                                        format: 'yyyy-mm-dd'
                                    }).on('changeDate', function(ev) {
                                        if (ev.date.valueOf() > endDate.valueOf()) {
                                            $('#alert').show().find('strong').text('Data początkowa nie może być większa od daty końcowej.');
                                        } else {
                                            $('#alert').hide();
                                            startDate = new Date(ev.date);
                                            //$('#startDate').text($('#dp4').data('date'));
                                        }
                                        $('#dp1').datepicker('hide');
                                    });
                                    $('#dp2').datepicker({
                                        format: 'yyyy-mm-dd'
                                    }).on('changeDate', function(ev) {
                                        if (ev.date.valueOf() < startDate.valueOf()) {
                                            $('#alert').show().find('strong').text('Data początkowa nie może być większa od daty końcowej.');
                                        } else {
                                            $('#alert').hide();
                                            endDate = new Date(ev.date);
                                            //$('#endDate').text($('#dp5').data('date'));
                                        }
                                        $('#dp2').datepicker('hide');
                                    });

                                    // disabling dates
                                    //var nowTemp = new Date();
                                    //var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);


                                });
        </script>

        <div id="gsdfcdiv"><iframe src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/gsd_004.htm" style="width: 0px; height: 0px; display: none;"></iframe><iframe src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/gsd_002.htm" style="width: 0px; height: 0px; display: none;"></iframe><iframe src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/gsd_004.htm" style="width: 0px; height: 0px; display: none;"></iframe><iframe src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/gsd_004.htm" style="width: 0px; height: 0px; display: none;"></iframe></div><div style="position: fixed; top: 0px; right: 11px; width: 155px; height: 1px; z-index: 2147483647;" id="dropdowndeals"><object id="dddContent" data="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/DddWrapper.swf" style="outline: medium none; visibility: visible;" type="application/x-shockwave-flash" height="100%" width="100%"><param value="false" name="menu"><param value="always" name="allowScriptAccess"><param value="transparent" name="wmode"><param value="domain=getbootstrap.com&amp;protocol=http:&amp;clientId=33A91A25-3058-4532-93B1-55EE47C5B087&amp;appDomain=hdapp1001-a.akamaihd.net&amp;serviceDomain=c.couponsvc.com&amp;spriteUrl=//wwwbringstarnet-a.akamaihd.net/Asset/App/Deals/Sprite&amp;helpLink=http://www.bringstar.net/Deals&amp;client=DealsBar&amp;changeHeightMethod=DealsBar.changeHeight&amp;changePositionMethod=DealsBar.changePosition" name="flashvars"></object></div><div style="position: absolute; z-index: 2147483647; width: 133px; height: 41.65px; left: -1000px; top: -1000px;"><object id="easyInlineSwf" data="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/easyInline.swf" style="outline: medium none; visibility: visible;" type="application/x-shockwave-flash" height="100%" width="100%"><param value="false" name="menu"><param value="always" name="allowScriptAccess"><param value="transparent" name="wmode"><param value="supportUrl=http://www.bringstar.net/inline#Piblisite&amp;baseUrl=//hdapp1003-a.akamaihd.net&amp;productName=Piblisite" name="flashvars"></object></div><div style="text-align: left; position: fixed; top: auto; bottom: 0px; width: 920px; height: 90px; left: 0px; right: 0px; margin: 0px auto; border: 0px none; padding: 0px; z-index: 2147483646; visibility: hidden;"><div style="position: absolute; margin: auto; border: 0px none; padding: 0px; width: 100%; height: 100%; background-color: rgb(238, 238, 238);"><div style="position: absolute; bottom: 1px; left: 12px; width: 89px; height: 10px; transform-origin: 0% 100% 0px; transform: rotate(-90deg); text-align: left; color: rgb(102, 102, 102); font: 10px/10px normal Arial,Helvetica,sans-serif; text-decoration: none;"><a style="color: rgb(102, 102, 102); font: 10px/10px normal Arial,Helvetica,sans-serif; text-decoration: none;" href="http://www.bringstar.net/review#ata">About this Ad</a></div><iframe class="qibkzlxplcvufzlybney" style="position: static; display: block; margin: 0px 0px 0px 16px; border: 0px none; padding: 0px; width: 728px; height: 90px;" marginheight="0" marginwidth="0" allowtransparency="allowTransparency" src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/ancbanner_general_728x90_264.htm" frameborder="0" height="90" scrolling="no" width="728"></iframe><div style="position: absolute; left: 744px; bottom: auto; right: auto; top: 0px; margin: 0px; border: 0px none;"><div data-score="91" class="trust reviewGreen" id="reviewsDisp"><div class="reviewContent"><div class="reviewTitle"><div class="trust">Trust Rating</div><div class="rate">Biz Rating</div></div><div class="reviewSection"><div class="percent trust rated">91<span>%</span></div><div class="reviewStars rate">Loading</div></div><div class="reviewFooter">getbootstrap.com</div></div><div class="reviewNav"><div class="reviewBtn reviewCheck reviewSelected"></div><div class="reviewBtn reviewThumb"></div><div class="reviewBtn reviewInfo"></div></div></div></div></div><img style="display: block; width: 16px; height: 16px; position: absolute; left: auto; bottom: auto; right: 0px; top: 0px; margin: 0px; border: 0px none; padding: 0px; cursor: pointer;" alt="Close" src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_pliki/close_btn.jpg"></div></body></html>
