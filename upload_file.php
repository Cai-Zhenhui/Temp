<?php
echo $_FILES;
if($_FILES["file"]["error"]>0){
	echo "Error:".$_FILES["file"]["error"]."<br/>";
}
else{
	echo "Upload:".$_FILES["file"]["name"]."<br/>";
	echo "Size".$_FILES["file"]["size"]."<br/>";
	echo "Stored in:".$_FILES["file"]["tmp_name"]."<br/>";
	
}
?>