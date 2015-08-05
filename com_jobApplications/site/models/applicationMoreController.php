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

class jobapplicationsModelapplicationMoreController extends JModelList
{
	public function addMoreInfoToDB($input, $id)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true); 

		$fields = array( $db->quoteName('experience') . ' = ' . $db->quote((string)$input[0]),
						$db->quoteName('referedBy') . ' = ' . $db->quote((string)$input[1]),
						$db->quoteName('summary') . ' = ' . $db->quote((string)$input[2]),
						$db->quoteName('education') . ' = ' . $db->quote((string)$input[3]),
						$db->quoteName('skills') . ' = ' . $db->quote((string)$input[4]) 
						);

		echo "muie";
		echo var_dump($input[5]); 

		$query->update($db->quoteName('#__jobApplications'))->set($fields)->where($db->quoteName('id') . ' = ' . $db->quote($id)); 

		$db->setQuery($query);
		$db->execute(); 
	}
}