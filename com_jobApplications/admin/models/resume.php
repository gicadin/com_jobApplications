<?php
/**
 * resume model
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * resume Model
 *
 * @since  0.0.2
 */
class jobApplicationsModelresume extends JModelList
{
	function getResume($input)
	{
		$db		= JFactory::getDbo();
		$query  = $db->getQuery(true); 

		$query->from($db->quoteName('#__jobApplications'));
		$query->select($db->quoteName(array('fileType', 'fileContent')));
		$query->where($db->quoteName('id'). " = " . "$input");

		$db->setQuery($query);
		$results = $db->loadObjectList(); 

		return $results;
	}
}