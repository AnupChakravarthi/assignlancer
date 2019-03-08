<?php
class FileManagement {
   // Get list of Files in a Folder 
   function get_listOfFiles($dir) {
		$StringData='';
		$contentArry=scandir($dir);
		for($index=0;$index<count($contentArry);$index++) {
			if($contentArry[$index]!='.' && $contentArry[$index]!='..') {
				$StringData.=$contentArry[$index].'|';
			}
		}
		$StringData=chop($StringData,'|');
	   return $StringData;
   }
	
   // Deletes the Folder including list of Files
   function rrmdir($dir) {
     $fileManagement = new FileManagement();
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != "." && $file != "..") { $fileManagement->rrmdir("$dir/$file"); }
			}
            rmdir($dir);
        }
        else if (file_exists($dir)) { unlink($dir); }
    }

    // Function to Copy folders and files       
   function rcopy($src, $dst) {
	  $fileManagement = new FileManagement();
        if (file_exists ( $dst )) {
            $fileManagement->rrmdir ( $dst );
		}
        if (is_dir ( $src )) {
            mkdir ( $dst );
            $files = scandir ( $src );
            foreach ( $files as $file )
                if ($file != "." && $file != "..")
                    $fileManagement->rcopy ( "$src/$file", "$dst/$file" );
        } else if (file_exists ( $src )) {
            copy ( $src, $dst );
		}
		
		if (file_exists ( $src )) {
            $fileManagement->rrmdir ( $src );
		}
    }

	// Delete a File in a Folder
	function deleteAFile($fileInAFolder){
	  unlink($fileInAFolder);
	}
}
?>