<?php
	function unzip($file)
	{
		set_time_limit(3000);
		// get absolute path to $file
		$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

		$zip = new ZipArchive;
		$res = $zip->open($file);
		if ($res === TRUE)
		{
		  $zip->extractTo($path);
		  $zip->close();
		  echo "$file extracted to $path";
		}
		else
		  echo "Couldn't open $file";
	}
	unzip('FILE_TO_UNZIP.zip');
?>
