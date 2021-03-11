<!doctype html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "6";
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
    <style>
        
        * {
            font-family: 'Open Sans', sans-serif;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 400ms ease;
            
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
            font-size: 33px;
            color: #555;
            margin-bottom: 20px;
            
            font-weight: 400;
            text-align: right;
        }

        span > span {
            margin-bottom: 0;
        }

		#wrapper {
			
			width: 267px;
			padding: 5px;
			background: #2B2B2B;
			position: absolute;			
			height: 64px;
			float: left;
		}
        .circle {
            background: #333333;
            width: 212px;
			height: 60px;
            line-height: 60px;
            display: inline-block;
            color: #fff;
			font-weight: 700;
            border-radius: 0%;
			border-bottom-style: outset;
			border-width: 2px;
        }
		.currency {
            background: #333333;
            width: 25px;
			height: 60px;
            line-height: 60px;
            display: inline-block;
            color: #fff;
            border-radius: 0%;
			border-bottom-style: outset;
			border-width: 2px;
			padding-right: 20px;
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
                delay: 10,
                time: 1500
            });
        });
    </script>
</head>

<body>
<h1>Jackpot</h1>

<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('http://51.15.5.138/jackpots_main.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency">kn</span>    
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="jquery.counterup.js"></script>
</body>
</html>