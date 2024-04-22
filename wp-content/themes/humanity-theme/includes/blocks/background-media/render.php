<?php

declare( strict_types = 1 );

if ( !function_exists( 'render_background_media_block' ) ) {
	function render_background_media_block( array $attributes, $content ) {
		return sprintf(
			'<div %1$s>%2$s</div>',
			wp_kses_data( get_block_wrapper_attributes() ),
			$content
		);
	}
}
