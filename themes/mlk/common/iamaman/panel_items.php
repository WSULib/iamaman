<?php
$panel_class = $panel_open = $panel_close = "";

if (($panel_counter % 3) == 1) {
	$panel_open = "<div class=\"panel_wrap\">\r\n";
	$panel_class = " buffer";
} else if (($panel_counter % 3) == 2) {
	$panel_class = " buffer";
} else {
	$panel_close = "</div><!-- .panel_wrap -->\r\n"; }

?>
<?php echo($panel_open); ?>
<div class="panel_item<?php echo($panel_class); ?>">
<div class="image"><?php echo link_to_item(display_files_for_item($options = array('imageSize' => 'thumbnail', 'linkToFile' => false))); ?></div>
<?php
$capDescription = item('Dublin Core', 'Description');
$capCreator = rtrim(item('Dublin Core', 'Creator'));
$capDate = item('Dublin Core', 'Date');
?><div class="caption"><p><?php if (!empty($capDescription)) { echo $capDescription; }
if (!empty($capCreator) && !empty($capDate)) { echo " <em>(Creator: {$capCreator}; Date: {$capDate})</em>"; }
else if (empty($capCreator) && !empty($capDate)) { echo " <em>(Date: {$capDate})</em>"; }
else if (!empty($capCreator) && empty($capDate)) { echo " <em>(Creator: {$capCreator})</em>"; }
?></p></div>
</div>
<?php echo($panel_close); ?>