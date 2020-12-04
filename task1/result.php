<?php 

if(isset($_POST['name'])){

$dir = $_POST['name'];
$items = new RecursiveDirectoryIterator($dir,RecursiveDirectoryIterator::SKIP_DOTS);
$iter = new RecursiveIteratorIterator($items,RecursiveIteratorIterator::SELF_FIRST,RecursiveIteratorIterator::CATCH_GET_CHILD);

$fp = fopen("file11.txt", "w");
$loc = "Folder path: \"".$dir."\"\r\n----------------";
fwrite($fp, $loc."\r\n");
	foreach ($iter as $file) {
		$sd = $file->getPathname();
		fwrite($fp, $sd."\r\n");
	}
fclose($fp);
echo "File with name \"file11.txt\" created in directory with project files. ";
}



// $files1 = scandir($dir);
// $count1 = count(scandir($dir)); // number of files in directory
?>