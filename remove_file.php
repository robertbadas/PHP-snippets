<?php
	function delete_directory($dir)
	{
		if (!file_exists($dir))
			return true;

		if (!is_dir($dir))
			return unlink($dir);

		foreach (scandir($dir) as $item) {
			if ($item == '.' || $item == '..')
				continue;

			if (!delete_directory($dir . DIRECTORY_SEPARATOR . $item))
				return false;
		}

		return rmdir($dir);
	}
	delete_directory('THE_FILE_OR_FOLDER_TO_REMOVE');
?>
