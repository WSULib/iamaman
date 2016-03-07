<?php
set_items_for_loop(get_items(array('range' => '160-164')));
?>

<div class="prev-next">
<p class="previous"><a href="panel4">Previous</a></p>
<p class="next"><a href="panel6">Next</a></p>
</div>

<div class="panel_text">

<p>On February 23, an estimated 1500 strikers and their supporters arrived at City Hall to hear the city council vote on the sub-committee's resolution on union recognition.  The council voted to support the mayor and then quickly adjourned.  Promised the day before that the resolution would be addressed, the workers were left feeling betrayed and angry.</p>  

<p class="last">Union leaders and ministers sought nonviolent ways for the workers to protest.  Police gave permission for the strikers to march from City Hall to Mason Temple Church.  As they marched, police cruisers began to push into the crowd until one landed on top of a woman's foot.  The marchers began to rock the patrol car and police responded by spraying mace on the demonstrators, and anyone in the vicinity - ministers, union officials, strikers, and supporters.  The march ended in chaos and brutality.</p>

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
<p class="previous"><a href="panel4">Previous</a></p>
<p class="next"><a href="panel6">Next</a></p>
</div>

</div>
