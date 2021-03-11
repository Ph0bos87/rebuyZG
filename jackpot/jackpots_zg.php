<!doctype html>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "36";
?>
<html lang="en">
	
<head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <title>Rebuystars Jackpot</title>
    <meta name="description" content="Rebuystars">
    
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
  background-image: -webkit-linear-gradient(top, #946B00, #FFFF6A 50%, gold, #FFFF6A);
  background-image: -o-linear-gradient(top, #946B00, #FFF76A 50%, gold, #FFFF6A);
  background-image: linear-gradient(to bottom, #946B00, #FFF76A 30%, gold, #FFFF6A);
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
		#container_rebuy {
			width: 275px;
			height: 70px;
			background-image: url(images/container_rebuy.jpg);			
			background-repeat: no-repeat;
		}
		#container_gold {
			width: 275px;
			height: 70px;
			background-image: url(images/container_gold.jpg);			
			background-repeat: no-repeat;
		}
		#container_silver {
			width: 275px;
			height: 70px;
			background-image: url(images/container_silver.jpg);			
			background-repeat: no-repeat;
		}
		#container_bronze {
			width: 275px;
			height: 70px;
			background-image: url(images/container_bronze.jpg);			
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
/*  SECTIONS  */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}

/*  COLUMN SETUP  */
.col {
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
}
.col:first-child { margin-left: 0; }

/*  GROUPING  */
.group:before,
.group:after { content:""; display:table; }
.group:after { clear:both;}
.group { zoom:1; /* For IE 6/7 */ }
/*  GRID OF FOUR  */
.span_4_of_4 {
	width: 100%;
}
.span_3_of_4 {
	width: 74.6%;
}
.span_2_of_4 {
	width: 49.2%;
}
.span_1_of_4 {
	width: 23.8%;
}

/*  GO FULL WIDTH BELOW 480 PIXELS */
@media only screen and (max-width: 480px) {
	.col {  margin: 1% 0 1% 0%; }
	.span_1_of_4, .span_2_of_4, .span_3_of_4, .span_4_of_4 { width: 100%; }
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
	
	


<div class="section group">
	<div class="col span_1_of_4">
	<span id="red-orange-brown">rebuy stars Jackpot</span>
	
<div id="container_rebuy">
<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('https://c.kirota.hr/jackpots_main.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency" style="font-family: 'Frank Ruhl Libre', serif;">kn</span>    
</div>
</div>
	</div>
	<div class="col span_1_of_4">
	<span id="red-orange-brown">Gold Jackpot</span>
	
<div id="container_gold">
<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('https://c.kirota.hr/jackpots_gold.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency">kn</span>    
</div>
</div>
	</div>
	<div class="col span_1_of_4">
	<span id="red-orange-brown">Silver Jackpot</span>
	
<div id="container_silver">
<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('https://c.kirota.hr/jackpots_silver.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency">kn</span>    
</div>
</div>
	</div>
	<div class="col span_1_of_4">
	<span id="red-orange-brown">Bronze Jackpot</span>
	
<div id="container_bronze">
<div id="wrapper">
	<span><span class="counter circle" style="display: inline-block; padding-right: 1px;">
		<?php
				$homepage=file_get_contents('https://c.kirota.hr/jackpots_bronze.php');
				echo $homepage;
		?>
		</span></span>
	<span class="currency">kn</span>    
</div>
</div>
	</div>
</div>
	

	
	
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
<script src="jquery.counterup_gold.js"></script>
</body>
</html>