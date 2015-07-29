<?php
/**
 * jobApplications tables 
 */
// No direct access
defined('_JEXEC') or die('Restricted access');
 
/**
 * jobApplications Table class
 *
 * @since  0.0.1
 */
class HelloWorldTableHelloWorld extends JTable
{
	/**
	 * Constructor
	 *
	 * @param   JDatabaseDriver  &$db  A database connector object
	 */
	function __construct(&$db)
	{
		parent::__construct('#__jobApplications', 'id', $db);
	}
}