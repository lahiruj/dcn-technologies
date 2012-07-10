<?php
// $Id: page.tpl.php,v 1.1.4.4 2008/08/23 20:58:56 johnforsythe Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <meta name="keywords" content="dcn,technologies,telecommunication,telecom,engineering,sri lanka,colombo,network,project management,consultancy service,GSM,3G,CDMA,Wimax,DVB,Installation,Digital,microwave,systems,Fault rectification,Radio,Site survey,Path calculation,Power,Electrical,Earthing,Access,Transmission,Infrastructure,spectrum,acquisition,Frequency,capacity" />
  <meta name="description" content="Welcome to DCN Technologies, Sri Lankan Telecommunication company. Undertakes Network development, operation and maintenance,Project management and consultancy service" />
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  
  <link type="text/css"  media="all" href="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.cluetip.css"  rel="stylesheet" />

  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/easySlider.js"></script>  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.hoverIntent.js"></script>    
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/cluetip-1.0.6/jquery.cluetip.min.js"></script>  
  <script type="text/javascript" src="<?php print base_path() . path_to_theme(); ?>/assets/js/DCN.js"></script>

  
</head>

<body id="home">

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

    <div id="image_gallery">
        <div id="image_wrapper">
            <div id="slider">
                <ul>            
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/f_optic-structure.png" height="260" width="800" alt="optics"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/add.png" height="260" width="800" alt="add"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/unknown device.png" height="260" width="800" alt="device"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/climb.png" height="260" width="800" alt="climb"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/fiber_optic_cable_fpym.png" height="260" width="800" alt="cable"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/procesna.png" height="260" width="800" alt="procesna"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/optic-fiber.png" height="260" width="800" alt="optic-fiber"/></a></li>
                        <li><a href="#"><img src="<?php print base_path() . path_to_theme(); ?>/assets/images/page-front/hand.png" height="260" width="800" alt="hand"/></a></li>
                </ul>
            </div>
            <p id="slide_caption">" We'll make your communications secure, flexible, reliable &amp; valuable...beyond your expectations...!!! "</p>
        </div>
    </div>

    <div id="page"<?php if (!$left) { print " class='wide-page'"; } ?>>
    
      <div id="main">
       <div id="main_content">
        <div id="content">
    
            <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
            <div class="tabs"><?php print $tabs ?></div>
            <?php print $help ?>
            <?php if ($show_messages && $messages) { print $messages; } ?>
    
            
            
                <?php //print $content ?><!--displays drupal menu & published content -->   
                
                <div id="left">
                

                	<h2>Welcome to DCN Technologies !</h2>
                 	<blockquote><p><em id="vision">"To be the pioneers in telecommunication exceeding the expectation of every client by offering outstanding customer service, increase flexibility and greater value, while adhering to the quality of standards in multiple areas of telecommunication.."</em></p></blockquote>
                 
                 	<blockquote><p><strong>"DCN Technologies</strong>, ...We believe in above vision when we undertake your telecommunication projects. And we provide you the most possible best solution for your telecommunication needs. You are about to get assured when your need is handled by our friendly-skilled-experienced <a href="node/21">staff</a>!"</p>
                    <p>"Come, take a look at what we have <a href="node/3">achieved</a> and who <a href="node/23">reccomends us</a> with compliments. <a href="galleries">See</a> it all for yourself! If you are in need of any of <a href="node/1">our assistance </a>feel free to <a href="node/4">contact us</a>. We are looking forward to hear from you! You are welcome to explore our <strong>Official Site</strong>!"</p>
                    <p>- <em>DCN Staff</em></p></blockquote>
                    </div>
 
                
                <div id="right">
                  <?php if ($left) { ?>
                    <div id="sidebar-left">
                      <?php print $left ?>
                    </div>
                  <?php } ?>
                  <?php if ($right) { ?>
                    <div id="sidebar-right">
                      <?php print $search_box ?>
                      
                      <?php print $right ?>
                      
                    </div>
                  <?php } ?>
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
<?php print $closure ?>
</body>
</html>