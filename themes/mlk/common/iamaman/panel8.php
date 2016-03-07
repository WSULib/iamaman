<?php
set_items_for_loop(get_items(array('range' => '178')));
?>

<div class="prev-next">
<p class="previous"><a href="panel7">Previous</a></p>
<p class="next"><a href="panel9">Next</a></p>
</div>

<div class="panel_text">

<p>The strike continued and Reverend James Lawson, with support of other COME leaders, urged Dr. Martin Luther King, Jr. to come to Memphis.  Although he was tired from recent travels, Dr. King viewed the sanitation workers strike as "an ideal scenario to eliminating poverty" and an opportunity to show America why he was organizing the Poor People's Campaign later that spring.  The Poor People's Campaign aimed to bring 3000 protesters to Washington, D.C. to lobby Congress and other governmental agencies for an "economic bill of rights."</p>

<p>King gave a <a href="http://www.aft.org/yourwork/tools4teachers/bhm/mlkpeech031868.cfm">riveting speech</a> to 10,000 sanitation strikers and supporters in Mason Temple on March 18:</p>

<blockquote><p>"You are demanding that this city will respect the dignity of labor.  So often we over look the worth and significance of those who are not in the professional jobs, in the so called big jobs, but let me say to you tonight, that when ever you are engaged in work, that serves humanity, for the building of humanity it has dignity and it has worth."</p></blockquote>

<p class="last">A few minutes after his speech was over, King spoke again and answered the crowd's primary question:  he promised to return and lead a march.</p>


<?php if(has_items_for_loop()): ?>
<?php $panel_counter = 1; ?>
   <!-- Loop for items -->
   <?php while(loop_items()):

	include('panel_items.php');
    $panel_counter++;
	
	endwhile;
	
	?>
 
<?php else: ?>
 
    <!-- Message if there are no items -->
    <p>No images for display</p>
<?php endif; ?>

<?php
set_items_for_loop(get_items(array('range' => '175-177')));
?>

<?php if(has_items_for_loop()): ?>
<?php $panel_counter = 2; ?>
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
<p class="previous"><a href="panel7">Previous</a></p>
<p class="next"><a href="panel9">Next</a></p>
</div>

</div>
