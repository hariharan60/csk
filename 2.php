<?php	
	$currentdir=getcwd(();
	$uploadDirectory="/Newfolder/";
	$errors=[];
	$fileExtensions=['jpeg','jpg','png'];
	$filename=$_FILES['myfile']['name'];
	$filesize=$_FILES['myfile']['size'];
	$fileTMPname=$_FILES['myfile']['tmp_name'];
	$imageFileType=strtolower(pathinfo($fileNmae,FATHINFO_EXTENSTION));
	$uploadPath=(curreantDir.$uploadDirectory.basename($filename);
	if(isset($_POST['submit']))
	{
		if(!in_array($imageFileType,$fileExtensions))
		{
			$error[]="This fileextension is not allowed.please upload a JPEG OR PNG file";
		}
		if($filesize>2000000)
		{
			$errors[]="this file is more than 2mb.sorry,it has to be less than or equal";
		}
		if(empty($errors)) {
			$didupload=move_uploaded_file($fileTMPName,$uploadPath);
			if($didupload)
			{
				echo"The file".basename($fileName)."has been uploaded";
			}
			else
			{
				echo "an arror  not occured somewhere.Tryagain or contact the admin";
			}
		}
		else{
			foreach($errors as $error)
			{
				echo $error."There are the errors"."\n";
				
			}
		}
		
	}
