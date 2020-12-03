<?php 

if(isset($_POST['name'])){

$dir    = $_POST['name'];
if($dir == ""){echo "Error #1: Enter any folder path"; exit;}
$files1 = scandir($dir);
$count1 = count(scandir($dir)); // number of files in directory

$loc = "Folder path: \"".$dir."\"\r\n----------------";

$fp = fopen("file11.txt", "w");
fwrite($fp, $loc."\r\n");
	for($i = 0; $i < $count1; $i++){
		$test321 = $files1[$i];
		fwrite($fp, $i.". ".$test321."\r\n");
	}
fclose($fp);

}

echo "File with name \"file11.txt\" created in directory with project files. ";



?>