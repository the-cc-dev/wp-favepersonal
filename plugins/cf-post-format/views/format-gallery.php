<div id="cfpf-format-gallery-preview" class="cp-elm-block cp-elm-block-image" style="display: none;">
	<label><span><?php _e('Gallery Images', 'favepersonal'); ?></span></label>
	<div class="cp-elm-container">
<?php

// TODO - check for images
if (1 == 0) {
}
else {
?>
		<ul class="cp-elm-image-gallery clearfix">
<?php
cfcp_gallery_excerpt(array(
	'number' => -1
));
?>
		</ul>
<?php
}
?>
	</div>
</div>