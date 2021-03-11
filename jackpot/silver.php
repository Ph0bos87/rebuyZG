<!doctype html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "36";
?>
<html lang="en">
	
<head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Counter Up Demo</title>
    <meta name="description" content="Counter Up - jQuery Plugin Demo">
    <meta name="author" content="Benjamin Intal">
    <link rel="author" href="https://plus.google.com/113101541449927918834"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:700" rel="stylesheet">
    <style>
        
        * {
            font-family: 'Frank Ruhl Libre', serif;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 400ms ease;
            
        }
		#red-orange-brown {
			font-family: 'Open Sans', sans-serif;
			width: 260px;
			text-align: center;
			font-size: 20px;
  background-image: -webkit-linear-gradient(TOP, GREY, #EFEFEF 50%, GREY);
  background-image: -o-linear-gradient(TOP, GREY, #EFEFEF 50%, GREY);
  background-image: linear-gradient(to bottom, GREY, #EFEFEF 30%, GREY, #EFEFEF);
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
			text-transform: uppercase;
			font-weight: 550;
}
        h1, h3 {			
            font-weight: 600;
            text-transform: uppercase;
        }

        h3 {
            margin-bottom: 30px;
            color: #999;
        }

        span {			
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
            font-family: 'Frank Ruhl Libre', serif;
            font-weight: 400;
            text-align: right;
        }
        span > span {
            margin-bottom: 0;
        }
		#container {
			width: 275px;
			height: 70px;
			background-image: url(images/container_silver.jpg);			
			background-repeat: no-repeat;
		}
		#wrapper {
			
			width: 267px;
			padding: 5px;
			
			position: absolute;			
			height: 64px;
			float: left;
		}
        .circle {
           
            width: 212px;
			height: 60px;
            line-height: 60px;            
            color: #fff;
			font-weight: 700;
            
        }
		.currency {
            
            width: 25px;
			height: 60px;
            line-height: 60px;
            display: inline-block;
            color: #fff;
            font-family: 'Frank Ruhl Libre', serif;
			padding-left: 3px;
			text-align: left;
			position: absolute;
        }

        code, code > span {
            text-align: left;
            display: block;
            font-family: Monaco, monospace;
            background: #444;
            color: #fff;
            padding: 20px;
            font-size: 14px;
            margin-bottom: 10px;
        }
    
            span {
                font-size: 33px;
            }

            
        }
    </style>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.12.2.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.counter').counterUp({
                delay: 80,
                time: 3900
            });
        });
    </script>
</head>

<body>
<span id="red-orange-brown">SILVER Jackpot</span>
	
<div id="container">
<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('https://kirota.hr/jackpots_silver.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency">kn</span>    
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="jquery.counterup_gold.js"></script>
</body>
</html>