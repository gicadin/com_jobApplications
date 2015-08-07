<?php
/**
 * applicationMoreController model
 * This class gets the post data from application and adds it to database
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

		// Check if file was uploaded
		if ( isset($input[5]) )
		{
			if ($this->checkExtension($input[5]))
			{
				// Rename file for security 
				$temp = explode(".", $input[5]['name']); 
				$newname = round(microtime(true)) . '.' . end($temp);

				$uploadDirectory = 'administrator/components/com_jobapplications/uploads';
				$uploadFile = $uploadDirectory . basename($input[5]['name']) ; 

				echo $uploadFile; 

				if (move_uploaded_file($input[5]['tmp_name'], $uploadFile))
				{
					echo " file is valid and uploaded to directory";
				} else {
					echo "file not uploaded"; 
				}

				$fields = array( $db->quoteName('experience') . ' = ' . $db->quote((string)$input[0]),
					$db->quoteName('referedBy') . ' = ' . $db->quote((string)$input[1]),
					$db->quoteName('summary') . ' = ' . $db->quote((string)$input[2]),
					$db->quoteName('education') . ' = ' . $db->quote((string)$input[3]),
					$db->quoteName('skills') . ' = ' . $db->quote((string)$input[4]), 
					$db->quoteName('fileName') . ' =' . $db->quote($newname),
					$db->quoteName('fileType') . ' =' . $db->quote((string)$input[5]['type']),
					$db->quoteName('fileSize') . ' = ' . $db->quote((string)$input[5]['size']),
					//$db->quoteName('fileContent') . ' = ' . $db->quote($content)
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

		echo "DEBUGGING: file uploaded to database"; 
	}

	// Check if its a valid extension, 
	// Return true if its, pdf, doc or txt
	public function checkExtension($input)
	{
		var_dump($input); 

		$finfo = new finfo();
		$fileinfo = $finfo->file($input['tmp_name'], FILEINFO_MIME_TYPE);

		var_dump($fileinfo); 

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
}