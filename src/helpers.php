<?php
/**
 * Make link base on menu item given.
 *
 * @param $item
 * @param bool $force
 *
 * @return string
 */
function make_menu_link($item, $force = true){
	
	if( array_has($item, 'route') ){
		$link = route(array_get($item, 'route'), array_get($item, 'route_attributes', []));
	} else {
		$link = array_get($item, 'link', null);
	}
	
	if( $force && !$link ){
		return '#';
	}
	
	return $link;
}

function is_menu_item_active($item){

	return make_menu_link($item) == url()->current();

}