<?php 

$bodyclass = 'page simple-page';
if (simple_pages_is_home_page(get_current_simple_page())) {
    $bodyclass .= ' simple-page-home';
} ?>

<?php 

// TEST FOR SIMPLEPAGE, SET VARIABLES TO TRIGGER /themes/mlk/common/header.php
$asimplepage = get_current_simple_page();
$video_js = "no";

// PUT PAGES THAT NEED VIDEO_JS IN HERE
if (($asimplepage->id == 2) || 
	($asimplepage->id == 3) || 
	($asimplepage->id == 4) || 
	($asimplepage->id == 5) || 
	($asimplepage->id == 7) || 
	($asimplepage->id == 10)) { $video_js = 'yes'; }

// VARIABLES ADDED TO head()
head(array('title' => html_escape(simple_page('title')), 'bodyclass' => $bodyclass, 'bodyid' => html_escape(simple_page('slug')), 'video_js' => $video_js)); ?>

<div id="primary">
    <?php if (!simple_pages_is_home_page(get_current_simple_page())): ?>
    <!-- <p id="simple-pages-breadcrumbs"><?php echo simple_pages_display_breadcrumbs(); ?></p> -->
    <?php endif; ?>
    <h1><?php echo html_escape(simple_page('title')); ?></h1>
    <?php echo eval('?>' . simple_page('text')); ?>
</div>
<?php if (!simple_pages_is_home_page(get_current_simple_page())): ?>

<?php endif; ?>
<?php echo foot(); ?>