<?php
set_items_for_loop(get_items(array('range' => '202-206')));
?>

<div class="prev-next">
<p class="previous"><a href="panel13">Previous</a></p>
<p class="next"><a href="panel15">Next</a></p>
</div>

<div class="panel_text">

<p>As mass meetings continued in Memphis, local merchants and Federal officials increased the pressure on Mayor Loeb and other city officials to settle the strike.  Finally on April 16, city and union officials formalized a strike settlement.  An agreement was adopted by city council by a vote of 12 to 1 and Mayor Loeb signed it.  The agreement included fifteen cents per hour wage increase, dues check off, memorandum of understanding, promotion and an end to racial discrimination.</p>

<p class="last">For a time, AFSCME 1733 became the largest single union in the city with 6000 members.  Bill Lucy commented later that the strike went beyond Memphis, and a "new kind of respect and a new kind of recognition" for sanitation workers developed across the country.</p>


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
<p class="previous"><a href="panel13">Previous</a></p>
<p class="next"><a href="panel15">Next</a></p>
</div>

</div>
