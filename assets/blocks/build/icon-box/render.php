<?php

$title        = !empty($attributes['title']) ? esc_html($attributes['title']) : '';
$content      = !empty($attributes['content']) ? wp_kses_post($attributes['content']) : '';
$titleColor   = !empty($attributes['titleColor']) ? esc_attr($attributes['titleColor']) : '#000000';
$contentColor = !empty($attributes['contentColor']) ? esc_attr($attributes['contentColor']) : '#666666';

?>
<div <?php echo get_block_wrapper_attributes(['class' => 'icon-box-block']); ?>>
	<div class="icon-box-content">
		<h3 style="color: <?php echo $titleColor; ?>;"><?php echo $title; ?></h3>
		<p style="color: <?php echo $contentColor; ?>;"><?php echo $content; ?></p>
	</div>
</div>