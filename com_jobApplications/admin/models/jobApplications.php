<?php
/**
 * Applications Model
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * jobApplications Model
 *
 * @since  0.0.2
 */

class jobapplicationsModeljobapplications extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */

	protected $mesages;

	public function getTable($type = 'jobApplications', $prefix = 'jobApplicationsTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
	public function getMsg($id = 1)
	{
		if (!is_array($this->messages))
		{
			$this->messages = array();
		}

		if (!isset($this->messages[$id]))
		{
			// Request the selected id
			$jinput = JFactory::getApplication()->input;
			$id 	= $jinput->get('id', 1, 'INT');

			// Get a table instance
			$table = $this->getTable();

			// Load the message
			$table->load($id);

			// assign the mgs
			$this->messages[$id] = $table->fname;	
		}

		return $this->messages[$id];

	}

	protected function getListQuery123()
	{
		/*
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select('*')->from($db->quoteName('#__helloworld'));
 
		return $query;
		*/
	}

	/*
	 * Returns an object array with all the information
	 */
	function getApplicationsQuery()
	{
		$db 	= JFactory::getDbo();
		$query 	= $db->getQuery(true);


		$query->from($db->quoteName('#__jobApplications'));
		$query->select($db->quoteName(array('id', 'date', 'jobTitle', 'fname', 'lname', 'experience', 'referedBy', 'summary')));

		$db->setQuery($query);

		$results = $db->loadObjectList();

		return $results;
	}

	/*
	 * Returns the number of applications
	 */ 
	function getApplicationsNumber()
	{
		$db 	= JFactory::getDbo();
		$query 	= $db->getQuery(true);

		$query->from($db->quoteName('#__jobApplications'));
		$query->select($db->quoteName(array('fname')));

		$db->setQuery($query);
		$db->execute();

		$numOfRows = $db->getNumRows();

		return $numOfRows;
	}

	/*
	function deleteApplication($input)
	{
		echo "$input"; 
	}
	*/
}