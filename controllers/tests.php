<?php 
/**
 * Tests Controller
 *
 * @package Tests
 */
 
/**
 * Protect the Script
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Tests Controller
 *
 * This class handles the calling and display of all Unit Tests
 *
 * @category    Controllers
 * @package     Tests
 */
class Tests extends CI_Controller {
	
	/**
     * Constructor Function
     *
     * Load all models, libraries, helpers, and tests
     */
	public function __construct()
	{
    	parent::__construct();
        
        // Don't let anyone run the tests unless they are a logged-in admin
        if (! $this->session->userdata('logged_in') or ($this->session->userdata('role') !== 'administrator') ) {
            redirect('auth');    
        }

        // Load stuff here...
            	
	}
	
	/**
	 * Run All Tests
	 *
	 */
	public function index()
	{
		$this->example_tests->run_all();
    	echo $this->unit->report();
	}
	
	
	/**
	 * Run Single Test
	 *
	 * @param string $test Pass in the name of the test
	 */
	public function run($test)
	{	
    	$this->{strtolower($test).'_tests'}->run_all();
    	echo $this->unit->report();
	}
	
}

/* End of file tests.php */
/* Location: ./application/controllers/tests.php */