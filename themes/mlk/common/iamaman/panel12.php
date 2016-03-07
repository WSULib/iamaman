<?php
set_items_for_loop(get_items(array('range' => '190-191')));
?>

<div class="prev-next">
<p class="previous"><a href="panel11">Previous</a></p>
<p class="next"><a href="panel13">Next</a></p>
</div>

<div class="panel_text">

<p>April 4, 1968 was a day that changed the nation.  After a series of meetings, Dr. Martin Luther King, Jr. was sleeping late at the Lorraine Motel in Memphis, in a room with Reverend Ralph Abernathy.  At 5:30, Reverend S.B. Kyles arrived to take them to dinner.</p>

<p class="last">King emerged from Room 306 at about 6:00 and chatted with friends Jesse Epps, Ben Branch and Reverend Kyles.  He leaned over the balcony to greet the many supporters gathered in the courtyard just to get a glimpse of the great civil rights leader.  By 6:03, King lay dying, the victim of a sniper's bullet.</p>


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
<p class="previous"><a href="panel11">Previous</a></p>
<p class="next"><a href="panel13">Next</a></p>
</div>

</div>
