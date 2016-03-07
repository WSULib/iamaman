<?php
set_items_for_loop(get_items(array('range' => '192-201')));
?>

<div class="prev-next">
<p class="previous"><a href="panel12">Previous</a></p>
<p class="next"><a href="panel14">Next</a></p>
</div>

<div class="panel_text">


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
<p class="previous"><a href="panel12">Previous</a></p>
<p class="next"><a href="panel14">Next</a></p>
</div>

</div>
