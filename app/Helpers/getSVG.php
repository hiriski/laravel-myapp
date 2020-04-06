<?php


if(!function_exists('getSVG')) {

	/**
	 * Get User SVG (icon) for Blog
	 * 
     * @param String - name of svg
	 * @return String
	 */
	function getsvg($svg) {
        $path = 'front.components.svg.';
		return $path . strtolower(str_replace('.', '', $svg));
	}

}