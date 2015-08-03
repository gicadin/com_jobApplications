<?php
/**
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');

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

			$conditions = array(
			    $db->quoteName('id') . "= $id", 
			);

			$query->delete($db->quoteName('#__jobApplications'));
			$query->where($conditions);
			 
			$db->setQuery($query);			 
			$result = $db->execute();

			echo "muie tro lo lo";
       	} 
  
        $mainframe->close();
	}
	

}