<?php session_start();
if (!isset($_SESSION['user'])) { header('location:tracking.php'); } 
require_once('db_connect.php');
$tracknum=$_SESSION['user'];
$sql="SELECT * FROM users WHERE track=$tracknum";
$resultid=mysql_query($sql);
$rowid=mysql_fetch_array($resultid);
 $trackid=$rowid['id'];
 ?>
<!DOCTYPE html> 
<html lang="en-US">

<!-- Mirrored from newflightd.com/?page_id=177 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2016 17:37:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalabe=no">
<title>MyTracking | Express Air</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="xmlrpc.php">
<!--[if lt IE 9]>
	<script src="http://newflightd.com/wp-content/themes/accesspress-lite/js/html5.min.js"></script>
<![endif]-->

<meta name='robots' content='noindex,follow' />
<link rel="alternate" type="application/rss+xml" title="New Flight &raquo; Feed" href="indexd784.html?feed=rss2" />
<link rel="alternate" type="application/rss+xml" title="New Flight &raquo; Comments Feed" href="indexa6da.html?feed=comments-rss2" />
<link rel="alternate" type="application/rss+xml" title="New Flight &raquo; MyTracking Comments Feed" href="index9609.html?feed=rss2&amp;page_id=177" />
<link rel='stylesheet' id='social-widget-css'  href='wp-content/plugins/social-media-widget/social_widget5219.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='wp-polls-css'  href='wp-content/plugins/wp-polls/polls-css5727.css?ver=2.68' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C400italic%2C300italic%2C300%2C600%2C600italic%7CLato%3A400%2C100%2C300%2C700&amp;ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='wp-content/themes/accesspress-lite/css/font-awesome.min5219.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css-css'  href='wp-content/themes/accesspress-lite/css/nivo-lightbox5219.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='bx-slider-style-css'  href='wp-content/themes/accesspress-lite/css/jquery.bxslider5219.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='accesspresslite-style-css'  href='wp-content/themes/accesspress-lite/style5219.css?ver=3.9.6' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='wp-content/themes/accesspress-lite/css/responsive5219.css?ver=3.9.6' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquerya4e6.js?ver=1.11.0'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='My Account' href='index9747.html?page_id=119' />
<meta name="generator" content="WordPress 3.9.6" />
<link rel='canonical' href='indexd36c.html?page_id=177' />
<link rel='shortlink' href='indexb7c7.html?p=177' />
<style type="text/css">
.wp-polls .pollbar {
	margin: 1px;
	font-size: 6px;
	line-height: 8px;
	height: 8px;
	background-image: url('wp-content/plugins/wp-polls/images/default/pollbg.gif');
	border: 1px solid #c8c8c8;
}
</style>
<style type="text/css"></style></head>

<body class="page page-id-177 page-template page-template-trackhome-php custom-background right-sidebar">
<div id="page" class="site">

	<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">
			<div class="site-branding">
				
				
								<a href="index.html" rel="home">
					<img src="wp-content/uploads/2013/11/cropped-logo.png" alt="logo">
				</a>
								
				
			</div><!-- .site-branding -->
        

			<div class="right-header clearfix" style="font-size: 32px;">
				<div class="header-text"><p>Prompt Delivery</p>
</div>                <div class="clearfix"></div>
                		<div class="socials">
				<a href="##" class="facebook" title="Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a>
		
				<a href="##" class="twitter" title="Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a>
		
				<a href="##" class="gplus" title="Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a>
		
				<a href="##" class="youtube" title="Youtube" target="_blank"><span class="font-icon-social-youtube"></span></a>
		
				<a href="##" class="pinterest" title="Pinterest" target="_blank"><span class="font-icon-social-pinterest"></span></a>
		
				<a href="##" class="linkedin" title="Linkedin" target="_blank"><span class="font-icon-social-linkedin"></span></a>
		
		
		
		
		
		
		
				</div>
					<div class="ak-search">
						<form method="get" class="searchform" action="http://newflightd.com/" role="search">
		<input type="text" name="s" value="" class="s" placeholder="Search..." />
		<button type="submit" name="submit" class="searchsubmit"><i class="fa fa-search"></i></button>
	</form>
				</div>
							</div><!-- .right-header -->
		</div><!-- .ak-container -->
  </div><!-- #top-header -->

		
		<nav id="site-navigation" class="main-navigation menu-left">
			<div class="ak-container">
				<h1 class="menu-toggle">Menu</h1>

				<div class="menu-menu-container"><ul id="menu-menu" class="menu"><li id="menu-item-30" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-30"><a href="index.html">Home</a></li>
<li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-215"><a href="##">About us</a>
<ul class="sub-menu">
	<li id="menu-item-31" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31"><a href="indexba53.html?page_id=2">Overview</a></li>
	<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="index16e4.html?page_id=24">Our Responsibility</a></li>
</ul>
</li>
<li id="menu-item-47" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-47"><a href="##">Delivery</a>
<ul class="sub-menu">
	<li id="menu-item-34" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="index8db2.html?page_id=17">International Delivery</a></li>
	<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-35"><a href="index307d.html?page_id=19">Local Delivery</a></li>
	<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="index787c.html?page_id=11">Same Day Delivery</a></li>
</ul>
</li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="index5534.html?page_id=6">Freight Services</a></li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-38"><a href="index3f35.html?page_id=8">Parcel Services</a></li>
<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="indexc185.html?page_id=15">Tracking</a></li>
<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="indexc583.html?page_id=28">Contact us</a></li>
</ul></div>			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<section id="slider-banner">
			</section><!-- #slider-banner -->
		<div id="content" class="site-content">



<div style="margin-left: 40px; padding: 10px;">

	  <marquee>
				      Welcome! 
				      </marquee>
	  </p>
					<table width="987" border="0" align="center" cellpadding="0" cellspacing="0">
					  <tr>
					    <td height="50" colspan="2" bgcolor="#FFFFCC"><div align="center">
					      <h2>Track Your Shipment</h2>
					      </div></td>
				      </tr>
					  <tr>
					    <td width="192" height="118" bgcolor="#FFFFCC"><table width="175" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
					      <tr>
					        <td width="175">Welcome</td>
				          </tr>
					      <tr>
					        <td>&nbsp;</td>
				          </tr>
					      <tr>
					        <td height="70" bgcolor="#FFFFCC"><div align="center">Current status of this shipment:
					          <?php
$getTotal = "SELECT COUNT(*) FROM status WHERE trackid=$trackid";
$total = mysql_query($getTotal);
$row2 = mysql_fetch_row($total);
$totalPix = $row2[0];
$curPage2=isset($_GET['curPage2']) ? $_GET['curPage2'] : 0;
define('SHOWMAX3', 1);
$startRow = $curPage2 * SHOWMAX3;
$sql="SELECT * FROM status WHERE trackid=$trackid ORDER BY id DESC LIMIT $startRow,".SHOWMAX3;
$result23=mysql_query($sql);
$rowspost23=mysql_fetch_array($result23)
?>
					          <br />
					          <h2><strong><?php echo $rowspost23['status']; ?></strong></h2>
					          </div></td>
				          </tr>
					      <tr>
					        <td>&nbsp;</td>
				          </tr>
					      <tr>
					        <td><a href="logout.php">Log Out</a></td>
				          </tr>
					      </table></td>
					    <td width="795" rowspan="2" valign="top"><table width="640" border="0" align="center" cellpadding="0" cellspacing="0">
					      <tr>
					        <td width="631" height="30"><h3 align="center"> Your Shipment </h3>
					          <?php
$sql="SELECT * FROM users WHERE id=$trackid";
$result=mysql_query($sql);
?></td>
				          </tr>
					      <tr>
					        <td><table class="mainbox" width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
					          <tr bgcolor="#FFFFCC">
					            <td width="78" height="30"><div align="center"><strong>Tracking No.</strong></div></td>
					            <td width="90"><div align="center"><strong>Sender</strong></div></td>
					            <td width="96"><div align="center"><strong>Receiver</strong></div></td>
					            <td width="98"><div align="center"><strong>Item</strong></div></td>
					            <td width="69"><div align="center"><strong>Origin</strong></div></td>
					            <td width="73"><div align="center"><strong>Destination</strong></div></td>
				              </tr>
					          <?php
$rowspost=mysql_fetch_array($result);
?>
					          <tr bgcolor="#FFFFCC">
					            <td height="40" bgcolor="#FFCCFF"><div align="center"><a href="#"><?php echo $rowspost['track']; ?></a></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['sn']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['rn']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['item']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['origin']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['desti']; ?></div></td>
				              </tr>
					          </table></td>
				          </tr>
					      <tr>
					        <td><table class="mainbox" width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
					          <tr bgcolor="#FFFFCC">
					            <td width="78" height="30"><div align="center"><strong>Sender Address </strong></div></td>
					            <td width="90"><div align="center"><strong>Sender Phone </strong></div></td>
					            <td width="96"><div align="center"><strong>Receiver Address </strong></div></td>
					            <td width="98"><div align="center"><strong>Receiver Phone </strong></div></td>
					            <td width="69"><div align="center"><strong>Reference Number </strong></div></td>
				              </tr>
					          <tr bgcolor="#FFFFCC">
					            <td height="40" bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['sa']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['sp']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['ra']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['rp']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost['ref']; ?></div></td>
				              </tr>
					          </table></td>
				          </tr>
					      <tr>
					        <td bgcolor="#FFCCCC">&nbsp;</td>
				          </tr>
					      <tr>
					        <td>&nbsp;</td>
				          </tr>
					      <tr>
					        <td><div align="center">
					          <h1>Shipment status</h1>
					          </div></td>
				          </tr>
					      <tr>
					        <td><?php
$getTotal = "SELECT COUNT(*) FROM status WHERE trackid=$trackid";
$total = mysql_query($getTotal);
$row2 = mysql_fetch_row($total);
$totalPix = $row2[0];
$curPage1=isset($_GET['curPage1']) ? $_GET['curPage1'] : 0;
define('SHOWMAX2', 20);
$startRow = $curPage1 * SHOWMAX2;
$sql="SELECT * FROM status WHERE trackid=$trackid ORDER BY id ASC LIMIT $startRow,".SHOWMAX2;
$result2=mysql_query($sql);
?></td>
				          </tr>
					      <tr>
					        <td><table class="mainbox" width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
					          <tr bgcolor="#FFFFCC">
					            <td width="107" height="30"><div align="center"><strong>Date</strong></div></td>
					            <td width="103"><div align="center"><strong>Time</strong>(GMT)</div></td>
					            <td width="148"><div align="center"><strong>Location</strong></div></td>
					            <td width="162"><div align="center"><strong>Details</strong></div></td>
					            <td width="101"><div align="center"><strong>Status</strong></div></td>
				              </tr>
					          <?php
while($rowspost2=mysql_fetch_array($result2)) { // Start looping table row 
?>
					          <tr bgcolor="#FFFFCC">
					            <td height="40" bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost2['date']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost2['time']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost2['location']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost2['details']; ?></div></td>
					            <td bgcolor="#FFCCFF"><div align="center"><?php echo $rowspost2['status']; ?></div></td>
				              </tr>
					          <?php
// Exit looping and close connection 
}
?>
					          </table></td>
				          </tr>
					      <tr>
					        <td><table width="453" border="0" align="center" cellpadding="0" cellspacing="0">
					          <tr>
					            <td width="261"><table width="180" border="0" align="left" cellpadding="0" cellspacing="0">
					              <tr>
					                <td width="180"><div id="sectionLinks">
					                  <div align="center">
					                    <?php
// create a back link if current page greater than 0
if ($curPage1 > 0) {
echo '<a href="'.$_SERVER['PHP_SELF'].'?curPage=1'.($curPage1-1).'"> 
<< Go back</a>';
}
// otherwise leave the cell empty
else {
echo '&nbsp;';
}
?>
				                      </div>
					                  </div></td>
				                  </tr>
					              </table></td>
					            <td width="245"><table width="197" border="0" align="right" cellpadding="0" cellspacing="0">
					              <tr>
					                <td width="198"><div id="sectionLinks">
					                  <div align="center">
					                    <?php
// create a forward link if more records exist
if ($startRow+SHOWMAX2 < $totalPix) {
echo '<a href="'.$_SERVER['PHP_SELF'].'?curPage1='.($curPage1+1).'"> 
View older tracks >></a>';
} else {
echo '&nbsp;';
}
?>
				                      </div>
					                  </div></td>
				                  </tr>
					              </table></td>
				              </tr>
					          </table></td>
				          </tr>
					      </table></td>
				      </tr>
					  <tr>
					    <td valign="top" bgcolor="#FFFFCC">&nbsp;</td>
				      </tr>
	  </table>
					<p>&nbsp;</p>
</div>
</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	
		
		<div id="bottom-footer">
		<div class="ak-container">
			<div class="site-info">
				
				
			</div><!-- .site-info -->

			<div class="copyright">
				Copyright &copy; 2016 
				<a href="index.html">
			Elmer Global Services 		</a>
			</div>
		</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type='text/javascript'>
/* <![CDATA[ */
var pollsL10n = {"ajax_url":"http:\/\/newflightd.com\/wp-admin\/admin-ajax.php","text_wait":"Your last request is still being processed. Please wait a while ...","text_valid":"Please choose a valid poll answer.","text_multiple":"Maximum number of choices allowed: ","show_loading":"1","show_fading":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/wp-polls/polls-js5727.js?ver=2.68'></script>
<script type='text/javascript' src='wp-content/themes/accesspress-lite/js/jquery.bxslider.min2f54.js?ver=4.1'></script>
<script type='text/javascript' src='wp-content/themes/accesspress-lite/js/nivo-lightbox.min53cf.js?ver=2.1'></script>
<script type='text/javascript' src='wp-content/themes/accesspress-lite/js/jquery.actual.mine0a5.js?ver=1.0.16'></script>
<script type='text/javascript' src='wp-content/themes/accesspress-lite/js/skip-link-focus-fix08e0.js?ver=20130115'></script>
<script type='text/javascript' src='wp-content/themes/accesspress-lite/js/custom4963.js?ver=1.1'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min5219.js?ver=3.9.6'></script>

</body>

<!-- Mirrored from newflightd.com/?page_id=177 by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 May 2016 17:37:53 GMT -->
</html>
<!-- www.serversfree.com Analytics Code -->
<script src="http://www.serversfree.com/"></script><noscript><a title="Free hosting servers" href="http://www.serversfree.com/">Free servers</a><a title="Free websites hosting server" href="http://www.serversfree.com/">Free websites hosting server</a><a title="Free hosting server features" href="http://www.serversfree.com/server-features/">Free server features</a><a title="Free hosting" href="http://www.bugs3.com/">Free hosting</a><a title="Page rank" href="http://www.1pagerank.com/">Page rank</a></noscript>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24425628-3']);
  _gaq.push(['_setDomainName', window.location.host]);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="../www.bugs3.com/ganalytics.js"></script>
<!-- End Of Analytics Code -->