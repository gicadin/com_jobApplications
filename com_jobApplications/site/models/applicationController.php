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
	public function addContactListToDB($input)
	{
		$db = JFactory::getDbo();

		$query = $db->getQuery(true); 

		$columns = array('fname', 'lname'); //, 'email', 'phoneNumber', 'otherNumber', 'address', 'zipCode');

		$values = array( $input[0], $input[1]);

		$query->insert($db->quoteName('#__jobApplications'))
			->columns($db->quoteName($columns))
			->values(implode(',', $values)); 

		$db->setQuery($query);
		$db->execute(); 
	}
}