<?php
/**
 * filtered Applications Model
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class jobapplicationsModelfilteredapplications extends JModelList
{
	
	function searchColumnDB($input, $column)
	{
		$db		= JFactory::getDbo();
		$query  = $db->getQuery(true); 

		$query->from($db->quoteName('#__jobApplications'));
		$query->select($db->quoteName('id'));
		$query->where($db->quoteName("$column") . ' LIKE ' . $db->quote("$input"));
		
		$db->setQuery($query);
		$results = $db->loadObjectList(); 

		return $results;

	}
}