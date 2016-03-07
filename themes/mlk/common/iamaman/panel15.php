<?php
set_items_for_loop(get_items(array('range' => '207-212,69')));
?>

<div class="prev-next">
<p class="previous"><a href="panel14">Previous</a></p>
<p class="next"><a href="panel16">Next</a></p>
</div>

<div class="panel_text">

<p>The success of the sanitation strike in Memphis inspired thousands of other city employees from around the Southern United States to stand up and demand dignity, respect and more importantly, collective bargaining in their workplace.  The organizing drive in the South not only included sanitation workers but hospital and school employees, social workers and bus drivers.</p>

<p class="last">Despite right-to-work laws and anti-union sentiment in the South, new AFSCME locals were organized in Baltimore and Charlotte, North Carolina.  Local 1733 became the largest union in Memphis, and in Miami, sanitation workers gained one of the best union contracts in the nation.</p>


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
<p class="previous"><a href="panel14">Previous</a></p>
<p class="next"><a href="panel16">Next</a></p>
</div>

</div>
