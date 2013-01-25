<?php 
/**
 * Address Tests
 *
 * @package        	Address
 * @category    	Tests
 */
 
/**
 * Protect the Script
 */
defined('BASEPATH') OR exit('No direct script access allowed');
 
/**
 * Need to use the Base_test Abstract Class
 */
require_once(APPPATH .'/libraries/tests/Base_test.php');

/**
 * Address Tests
 *
 * All tests for the Address Library
 *
 * @uses address
 * @category Tests
 * @package Address
 */
class Address_tests extends Base_test
{
	
	/**
     * Constuctor Function
     */
	public function __construct()
	{
    	parent::__construct();

    	// Load the library
    	$this->ci->load->library('example');
	}
	
	/**
     * Run All Tests
     */
	public function run_all()
	{
        $this->test_simple_test();
	}
	
	/**
     * Single Address Test
     *
     * Test Address Library using single address
     */
	public function test_simple_test()
	{ 
        $result = $this->ci->example->add(2,2);
        $this->ci->unit->run($result,4,'Running the test');	
	}

}

/* End of file Example_test.php */
/* Location: ./application/libraries/tests/Example_test.php */
