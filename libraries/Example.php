<?php 
/**
 * Example Library
 *
 * @package        	Example
 * @category    	Libraries
 */
 
/**
 * Protect the Script
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Exceptions
 *
 * Class to save exceptions to db
 *
 * @access public
 * @package Example
 * @category Libraries
 */
class Logging 
{
    
    /**
     * CI singleton
     *
     * @var object
     */
    public $ci;
    
    /**
     * Constructor function
     */
    public function __construct()
    {
        $this->ci =& get_instance();  
    }
    
    /**
     * Add Example
     *
     * Just add 2 numbers
     * 
     * @param int $left
     * @param int $right
     * @return int
     */
    public function add($left,$right) 
    {    
           return $left + $right;
    }
}
    
/* End of file Example.php */
/* Location: ./application/libraries/Example.php */