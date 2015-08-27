<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');

class jobapplicationsControllerjobapplications extends JControllerAdmin
{
	public function addApplicationToDB()
	{
		echo "Add Application pressed!!!";

		$mainframe = JFactory::getApplication();

				echo "Add Application pressed!!!";

		$db = JFactory::getDBo();

		$columns = array('fname', 'lname', 'email', 'phoneNumber', 'otherNumber', 'address', 'zipCode', 'date');

		$values = array( $db->quote('TestFirstName'), $db->quote('TestLastName'),
						 $db->quote('TestEmail@test.com'), $db->quote('6781234567'),
						 $db->quote('1235671234'), $db->quote('123-TestStreet'),
						 $db->quote('424213'), $db->quote('testDate') );

		$query->insert($db->quoteName('#__jobApplications'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values)); 	

		$db->setQuery($query);
		$db->execute(); 

		$mainframe->close(); 
	}
}