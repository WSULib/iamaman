<div class="prev-next">
<p class="previous"><a href="panel15">Previous</a></p>
<p class="next">End</p>
</div>

<div class="panel_text">

<p>Civil rights leaders, King's family, and AFSCME have played large roles in remembering Dr. Martin Luther King, Jr. in the years following his assassination. With memorial marches held in Memphis on April 4 each year, Dr. King's legacy has not been forgotten.</p>

<p class="last">The striking members of Local 1733 have not been forgotten either. On April 29, 2011, the 1,300 sanitation workers who participated in the 1968 strike were inducted into the U.S. Department of Labor's Labor Hall of Fame. Eight of the original strikers attended the ceremony. <a href="http://www.afscme.org/video?slug=memphis-comes-to-washington-1">A video about the induction can be viewed here</a>.</p>

<?php
set_items_for_loop(get_items(array('range' => '215-216,218')));
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

<?php
set_items_for_loop(get_items(array('range' => '214,217,219')));
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
<p class="previous"><a href="panel15">Previous</a></p>
<p class="next">End</p>
</div>

</div>
