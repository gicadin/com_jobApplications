<?php
/**
 * applicationController model
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * jobApplications Model
 *
 * @since  0.0.2
 */
class jobApplicationsModelapplicationController extends JModelList
{

	var $applicationId = 0; 

	public function addContactListToDB($input)
	{

		$db = JFactory::getDbo();
		$query = $db->getQuery(true); 

		$columns = array('fname', 'lname', 'email', 'phoneNumber', 'otherNumber', 'address', 'zipCode', 'date');

		$values = array( $db->quote((string)$input[0]), $db->quote((string)$input[1]),
						 $db->quote((string)$input[2]), $db->quote((string)$input[3]),
						 $db->quote((string)$input[4]), $db->quote((string)$input[5]),
						 $db->quote((string)$input[6]), $db->quote($input[7]) );

		$query->insert($db->quoteName('#__jobApplications'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values)); 	

		$db->setQuery($query);

		$db->execute(); 

		$this->applicationId = $db->insertid(); 
	}

	public function getID()
	{
		return $this->applicationId; 
	}
}