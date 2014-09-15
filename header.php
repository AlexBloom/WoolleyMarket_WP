<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1, user-scalable = no">
<meta name="author" content="Will Honea, Alex Bloom">
<meta name="description" content="The Woolley Market is located in the heart of downtown Sedro-Woolley, on the corner of State and Metcalf Streets, in a beautifully restored historic building that was home to the J.C. Penney’s Department Store for nearly half a century.   The Woolley Market is a journey to an earlier time that celebrates our community’s heritage, a place where we still know and love the land and people that grow our food. Stop on by!">
<meta name="keywords" content="The Woolley Market, Sedro Woolley, North Cascades, Skagit Valley Food, Washington Markets, Washington Food, Local Food">

<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


		<script type="text/javascript" src="//use.typekit.net/aqv7alw.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body id="body"
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>


			<nav role="navigation" class="site-navigation clearfix">
				
<!--Uncomment the previous line and "array" to turn on the user-defined navigation for the theme. -->
			</nav>
			

			<header id="header" class="clearfix">
				<ul id="masthead" class="clearfix">
					<li id="message"> Provisioner <br> of the <br> North Cascades </li>
					<li id="logotype"> 
						<img src="<?php echo get_template_directory_uri(); ?>/img/wm_masthead.gif" alt="Woolley Market Masthead">
					</li>
					<li id="currently">  
						
						<span id="day"> </span> <br>
						<span id="month"> </span>&nbsp;<span id="date"> </span>,&nbsp;<span id="year"> </span><br>
	
						<script>
						var d = new Date();
						var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
						var D = d.getDate();
						var month = new Array();
						month[0] = "January";
						month[1] = "February";
						month[2] = "March";
						month[3] = "April";
						month[4] = "May";
						month[5] = "June";
						month[6] = "July";
						month[7] = "August";
						month[8] = "September";
						month[9] = "October";
						month[10] = "November";
						month[11] = "December";
						var m = month[d.getMonth()];
						var Y = d.getFullYear();
						document.getElementById("day").innerHTML = days[d.getDay()];												
						document.getElementById("date").innerHTML = D;
						document.getElementById("month").innerHTML = m;
						document.getElementById("year").innerHTML = Y;
						</script>
						
						<span id="weather">
							
						</span>        
					
					</li>
				</ul>
				
				
				<nav id="site-nav">
					<ul class="clearfix">
						<li><a class="" href="http://woolleymarket.com/files/billoffare.pdf"target=_blank> Bill Of Fare </a></li>
						<li><a class="" href="http://facebook.com/woolleymarket"target=_blank> News &amp; Events </a></li>
						<li><a class="" href="tel:1-360-982-2649"target=_blank> 360-982-2649 </a></li>
						<li><a class="" href="mailto:info@woolleymarket.com"target=_blank> info@woolleymarket.com </a></li>
					</ul>
				</nav>
				
				
				
				<nav class="clearfix" style="display:none;">
					<hr/>
					<?php wp_nav_menu( array( 'theme_location' => 'page' ) ); // Display the user-defined menu in Appearance > Menus ?>	
				</nav>
				
				<hr/>
				<div id="address">
					829 Metcalf Street • Sedro-Woolley, WA 98284
				</div>
				<hr>
			</header>



	<section id="main" class="clearfix"><!-- start the page containter -->
		



