<?php
set_items_for_loop(get_items(array('range' => '186-187')));
?>

<div class="prev-next">
<p class="previous"><a href="panel9">Previous</a></p>
<p class="next"><a href="panel11">Next</a></p>
</div>

<div class="panel_text">

<p class="last">By the evening of March 28th, martial law had been declared and 4,000 soldiers of the Tennessee National Guard patrolled the streets.  Undaunted, the sanitation workers marched the following day, but this time, they were shadowed by soldiers with bayonets and tanks.  "It really was the classic confrontation between striking workers with nothing more then picket signs and the might of the armed forces of this city," stated Bill Lucy.</p>


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
<p class="previous"><a href="panel9">Previous</a></p>
<p class="next"><a href="panel11">Next</a></p>
</div>

</div>
