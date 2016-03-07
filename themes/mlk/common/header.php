<!DOCTYPE html>
<html>
<head>
<title><?php echo settings('site_title'); echo isset($title) ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Plugin Stuff -->
<?php plugin_header(); ?>

<!-- Stylesheets -->
<?php
queue_css('style');
if ($video_js == 'yes') { queue_css('video-js'); }
display_css(); 
?>
<!-- JavaScripts -->
<?php 
if ($video_js == 'yes') { queue_js('video-js/video'); queue_js('video-js/video_js_initialize'); }
echo display_js(); ?>

<!-- Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30419619-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body<?php echo isset($bodyid) ? ' id="'.$bodyid.'"' : ''; ?><?php echo isset($bodyclass) ? ' class="'.$bodyclass.'"' : ''; ?>>
	<div id="wrap">

		<div id="header">
		<div id="site-title"><?php echo link_to_home_page(custom_display_logo()); ?></div>
		</div>
		    
        <div id="primary-nav">
          <!--  <div id="search-wrap">
                <h2>Search</h2>
                <?php echo simple_search(); ?>
                <?php /* echo link_to_advanced_search(); */ ?>
            </div>
            
            <ul class="navigation">
                <?php echo public_nav_main(
    					array(
					        'Browse Items' => uri('items'),
							'Resources' => uri('resources') )
					  	); ?>
            </ul>  -->
            
            <ul class="exhibit-navigation">
            <?php
			$links = array(	'Home' => uri(''),
							'Introductory Essay' => uri('memphis'),
							'Lives of the Sanitation Workers' => uri('panel2'),
							'The Strike Begins' => uri('panel3'),
							'Negotiations, Vigils, and Sandwiches' => uri('panel4'),
							'The Macing March' => uri('panel5'),
							'A Community Awakens' => uri('panel6'),
							'A Nation Awakens' => uri('panel7'),
							'Dr. King Arrives In Memphis' => uri('panel8'),
							'Terrible Thursday' => uri('panel9'),
							'The Men March, The Guards Watch' => uri('panel10'),
							"I've Been To The Mountain Top" => uri('panel11'),
							'Lorraine Motel' => uri('panel12'),
							'Mourning' => uri('panel13'),
							'Victory for Local 1733' => uri('panel14'),
							'Impact on the South, 1968-1970' => uri('panel15'),
							'Remembering Memphis' => uri('panel16'),
							'Resources' => uri('resources'),
							'Credits/Contact' => uri('contact') );
			echo nav($links);
			?>
            </ul>
        </div>
		
		<div id="content">