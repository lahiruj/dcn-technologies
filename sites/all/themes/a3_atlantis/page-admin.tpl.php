<?php
// $Id: page-admin.tpl.php,v 1.1.4.4 2008/08/23 20:58:56 johnforsythe Exp $
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

<head>

  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="keywords" content="dcn,technologies,telecommunication,telecom,engineering,sri lanka,colombo,network,project management,consultancy service,GSM,3G,CDMA,Wimax,DVB,Installation,Digital,microwave,systems,Fault rectification,Radio,Site survey,Path calculation,Power,Electrical,Earthing,Access,Transmission,Infrastructure,spectrum,acquisition,Frequency,capacity" />
  <meta name="description" content="DCN undertakes Transmission Network Planning,Network development, operation and maintenance,Project management and consultancy service" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <link type="text/css"  media="all" rel="stylesheet" href="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.cluetip.css" />
  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/easySlider.js"></script>  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.hoverIntent.js"></script>    
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.cluetip.min.js"></script>  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/DCN.js"></script>    
  
</head>

<body id="admin">

<div id="login_box">
  	     <?php print $top_header; ?>
       </div>

  <div id="header">
	<?php global $user ?>
    <?php if ($user->uid) {?>
		<span id="login"><a href="<?php print url('logout') ?>" title="Logout">Logout</a></span>                
    <?php } else {?>
		<span id="login"><a href="#login_box" rel="#login_box" title="Login">Login</a></span>        
    <?php } ?>

     <div id="title">
      <?php if ($site_name) { ?><h1><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
      <div id="title-spacer"></div>
     </div>
    
   	<?php print $header ?>   
    
     <div id="nav">           	
		<?php
			if (module_exists('nice_menus')) {
			  print theme('nice_menus_primary_links');
			}
			else {
			  print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist'));
			}
        ?>
     </div>
  </div>
  
  <div id="container">
    <div id="page" class="wide-page">
      <div id="main_content">
        <div id="main">
          <div id="content">
            <?php print $breadcrumb ?>
            <div class="block" id="right-toggle"><a>[<?php print t('Expand'); ?></a>]</div>
            <div class="tabs"><?php print $tabs ?></div>
            <?php print $help ?>	
            <?php if ($show_messages && $messages) { print $messages; } ?>
            <?php print $content ?>
           </div>
           <div id="right">
             <div id="sidebar-left">
              <?php print $left ?>
        	  <?php print $right ?>
        	  <?php print $search_box ?>
	  	     </div>
           </div>
         </div>
       </div>
         
       <div id="footer">
         <?php print 'Copyright &copy; 2009 - '. date("Y").' '.$footer_message?>
         <div id="designers">Designed by <a href="http://techknights.drupalgardens.com">Tech-Knights&trade;</a></div>
       </div>
     </div>
   </div>
   
   <script type="text/javascript">
     /* <![CDATA[ */
		$(document).ready(function(){
	    $("#right-toggle").click( function() {
        $("#right-toggle").hide();
        $("#content").width("953px");
        $("#sidebar-left").css("padding-left","775px");
        $("#right").css("float","none");
        $("#content").css("border-right","1px solid #1A4864");
        $("#content").css("border-left","1px solid #1A4864");
        $("#content").css("border-bottom","1px solid #1A4864");
        $("#content").css("margin","0");
			});
     });
     /* ]]> */
   </script>
   
   <?php print $closure ?>
</body>
</html>