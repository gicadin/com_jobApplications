<?php
/**
 * applicationMoreController model
 * This class gets the post data from application and adds it to database
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
jimport('joomla.filesystem.file');
 
/**
 * jobApplications Model
 *
 * @since  0.0.2
 */

class jobapplicationsModelapplicationmorecontroller extends JModelList
{
	public function addMoreInfoToDB($input, $id)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true); 

		// Check if file was uploaded
		if ( isset($input[5]) )
		{
			if ($this->checkExtension($input[5]) && $this->checkFileSize($input[5]))
			{
				// Rename file for security 
				$temp = explode(".", $input[5]['name']); 
				$newname = round(microtime(true)) . '.' . end($temp);

				$uploadDirectory = 'administrator/components/com_jobapplications/uploads/';
				$uploadFile = $uploadDirectory . basename($newname) ;

				$filepath = JPATH_ROOT . '/administrator/components/com_jobapplications/uploads/' . basename($newname); 

				if (move_uploaded_file($input[5]['tmp_name'], $uploadFile))
				{
					if ( JFile::exists($filepath))
					{
						// Change permissions to read only for security 
						chmod($filepath, 0444);
						//echo "File uploaded successfully";
					}
				} else {
					echo "File not uploaded"; 
				}

				$fields = array( $db->quoteName('experience') . ' = ' . $db->quote((string)$input[0]),
					$db->quoteName('referedBy') . ' = ' . $db->quote((string)$input[1]),
					$db->quoteName('summary') . ' = ' . $db->quote((string)$input[2]),
					$db->quoteName('education') . ' = ' . $db->quote((string)$input[3]),
					$db->quoteName('skills') . ' = ' . $db->quote((string)$input[4]), 
					$db->quoteName('fileName') . ' =' . $db->quote($newname),
					$db->quoteName('fileType') . ' =' . $db->quote((string)$input[5]['type']),
					$db->quoteName('fileSize') . ' = ' . $db->quote((string)$input[5]['size']),
					);

			} else {
				echo "wrong extension";
			}
			
		} else {
			$fields = array( $db->quoteName('experience') . ' = ' . $db->quote((string)$input[0]),
				$db->quoteName('referedBy') . ' = ' . $db->quote((string)$input[1]),
				$db->quoteName('summary') . ' = ' . $db->quote((string)$input[2]),
				$db->quoteName('education') . ' = ' . $db->quote((string)$input[3]),
				$db->quoteName('skills') . ' = ' . $db->quote((string)$input[4]) 					
				);
		}

		$query->update($db->quoteName('#__jobApplications'))->set($fields)->where($db->quoteName('id') . ' = ' . $db->quote($id)); 

		$db->setQuery($query);
		$db->execute(); 

		//echo "DEBUGGING: file uploaded to database"; 
	}

	// Check if its a valid extension, 
	// Return true if its, pdf, doc or txt
	private function checkExtension($input)
	{
		$finfo = new finfo();
		$fileinfo = $finfo->file($input['tmp_name'], FILEINFO_MIME_TYPE);

		// file types dont match
		if ( $fileinfo != $input['type']){
			throw new Exception('File types dont match'); 
			return false;
		}
			
		switch ($fileinfo) 
		{
			case 'application/pdf':		
				return true; 
				break;
			case 'application/msword':
				return true;
				break;
			case 'text/plain':
				return true;
				break;
			default:
				throw new Exception('Invalid file format'); 
				echo "invalid file upload"; 
				return false;
				break;
		}
	}

	// Check if file size 
	// Return false if its bigger than 1024 kilo
	private function checkFileSize($input)
	{	
		if ($input['size'] < 1024000)
			return true;
		return false;
	}

	// TODO
	// Check the referer is its own site
	// Return true if its myself
	private function checkReferer()
	{
		return false;
	}

	// TODO
	// Change permissions to read only
	// Returns true after executing
	private function changePermissions()
	{
		return false;
	}
}