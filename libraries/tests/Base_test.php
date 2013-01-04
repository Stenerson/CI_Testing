<?php
/**
 * Base Tests
 *
 * @package        	Tests
 * @category    	Tests
 */
 
/**
 * Protect the Script
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base Test
 * 
 * Abstract class to set up all other tests
 * @abstract
 * @package Tests
 */
abstract class Base_test
{
	
	/** 
	 * Codeigniter Singleton
	 * @var object
	 */
	protected $ci;
	
	/**
     * Constructor Function
     *
     * Load test data and config items
     */
	public function __construct()
	{
    	$this->ci =& get_instance();
    	
    	// Kick-start this thing...
    	
	}

}

/* End of file Base_test.php */
/* Location: ./application/libraries/tests/Base_test.php */