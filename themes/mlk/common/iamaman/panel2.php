<?php
set_items_for_loop(get_items(array('range' => '222')));
?>

<div class="prev-next">
<p class="previous"><a href="memphis">Previous</a></p>
<p class="next"><a href="panel3">Next</a></p>
</div>

<div class="panel_text">

<p class="last">Wages and working conditions for Memphis sanitation workers were atrocious.  The average pay was $1.80 an hour.  The wages were so low that forty percent of the workers qualified for welfare and many worked second jobs.  They lifted leaky garbage tubs into decrepit trucks and were treated unfairly.  During foul weather, black workers were sent home without pay while the white workers were paid a full day.  There were neither benefits, vacation, nor pension.  The sanitation department refused to modernize ancient equipment used by the black workers.  Black sanitation workers were called 'walking buzzards.'</p>

<?php include('videonest.php'); ?>


<?php
set_items_for_loop(get_items(array('range' => '145,146,147')));
?>

<?php if(has_items_for_loop()): ?>
<?php $panel_counter = 1; ?>
   <!-- Loop for items -->
   <?php while(loop_items()):

	include('panel_items.php');
    $panel_counter++;
	
	endwhile;
	
	if (empty($panel_close)) { echo("</div>\r\n"); }
	
	?>
 
<?php else: ?>
 
    <!-- Message if there are no items -->
    <p>No images for display</p>
<?php endif; ?>

<div class="prev-next">
<p class="previous"><a href="memphis">Previous</a></p>
<p class="next"><a href="panel3">Next</a></p>
</div>

</div>
