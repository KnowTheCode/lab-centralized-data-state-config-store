<?php
/**
 * Data Store in a static class wrapper (procedural within a class).
 *
 * @package     KnowTheCode\Data_Store\Static_Class
 * @since       1.0.0
 * @author      hellofromTonya
 * @link        https://github.com/KnowTheCode/lab-data-store
 * @license     GPL-3.0+
 */

namespace KnowTheCode\Data_Store\Static_Class;

/**
 * Class Data_Store
 *
 * @package KnowTheCode\Data_Store\Static_Class
 */
class Data_Store {

	/**
	 * Store the given value in the store by its given key.
	 *
	 * @since 1.0.0
	 *
	 * @param string $key   Storage key to locate the value in the store.
	 * @param null   $value The data, state, or config to store.
	 *
	 * @return bool Returns true if the value is stored.
	 */
	public static function store( $key, $value ) {

		return true;
	}
}
