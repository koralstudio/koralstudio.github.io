<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Koral</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/koral.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div id="fullpage">
	        <div class="section">
			    <div class="slide"> Slide 1 </div>
			    <div class="slide"> Slide 2 </div>
			    <div class="slide"> Slide 3 </div>
			    <div class="slide"> Slide 4 </div>
			</div>
			<div class="section">
			    <div class="slide"> Slide 1 </div>
			    <div class="slide"> Slide 4 </div>
			</div>
			<div class="section">
			    <div class="slide"> Slide 1 </div>
			    <div class="slide"> Slide 2 </div>
			    <div class="slide"> Slide 3 </div>
			    <div class="slide"> Slide 4 </div>
			</div>
		</div>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/fullpage.js/dist/jquery.fullpage.min.js"></script>
        <script type="text/javascript">
        	$(document).ready(function() {
			    $('#fullpage').fullpage();
			});
        </script>


        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>