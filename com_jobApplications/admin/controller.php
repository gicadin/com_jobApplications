<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');

/**
 * General Controller of jobApplications component
 */
class jobApplicationsController extends JControllerLegacy
{
	/**
	 * The default view for the display method.
	 */
	protected $default_view = 'jobApplications';
	/*
	public function display($cachable = false, $urlparams = false)
	{
		$app = JFactory::getApplication();
		$view = $app->input->getCmd('view', 'default');
		$app->input->set('view', $view);
		parent::display($cachable, $urlparams);
		return $this;
	}

	public function execute()
	{
		$task = JFactory::getApplication()->input->get('task');
		echo "muie"; 
		try
		{
			parent::execute($task);
		}
		catch (Exception $e)
		{
			echo new JResponseJson($e); 
		}
	}

	*/
	public function deleteApplication()
	{
		$mainframe = JFactory::getApplication();
 
        $id = JRequest::getVar("id",null,"post","int");
       	
       	// Check if id is set
       	if ( isset( $id ) )
       	{
       		// remove that application from database
       		$db = JFactory::getDbo();

			$query = $db->getQuery(true);

			$query->from($db->quoteName('#__jobApplications'));
			$query->select($db->quoteName('fileName'));
			$query->where($db->quoteName('id') . ' = ' . "$id");

			// Return resume file name
			$db->setQuery($query);
			$fileName = $db->loadResult();

			$filePath = JPATH_ROOT . '/administrator/components/com_jobapplications/uploads/' . basename($fileName);
			
			// remove file from system
			if ( !empty($fileName) )
			{
				if (JFile::exists($filePath)) {
					JFile::delete($filePath);
					echo "File deleted";
				} else 
					echo "File is there, Error deleting!";
			} else 
				echo "No resume attached."; 

			$query = $db->getQuery(true);
			$query->clear();

			$conditions = array(
			    $db->quoteName('id') . "= $id", 
			);

			$query->delete($db->quoteName('#__jobApplications'));
			$query->where($conditions);
			 
			$db->setQuery($query);			 
			$result = $db->execute();

			echo "Profile deleted!";
       	} 
  
        $mainframe->close();
	}
	

}