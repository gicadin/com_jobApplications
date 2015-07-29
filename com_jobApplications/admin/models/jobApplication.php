<?php
/**
 * jobApplications model
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * jobApplications Model
 *
 * @since  0.0.2
 */
class jobApplicationsModeljobApplication extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	function getApplicantQuery($input)
	{
		//$input = 2;

		$db		= JFactory::getDbo();
		$query  = $db->getQuery(true) ; 

		$query->from($db->quoteName('#__jobApplications'));
		$query->select($db->quoteName(array('id', 'date', 'jobTitle', 'fname', 'lname', 'experience', 'referedBy', 'summary')));
		$query->where($db->quoteName('id'). " = " . "$input");

		$db->setQuery($query);

		$results = $db->loadObjectList(); 

		//mail("developer@sandmanmedia.com", "muie", "suie"); 

		return $results; 
	}
}