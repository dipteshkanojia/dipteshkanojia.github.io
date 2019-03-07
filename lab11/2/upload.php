<!DOCTYPE HTML>
<html>
	<head>
    	<!-- Title of Page -->
        <title>
       		CS699-Lab11-PHPTwo
        </title>
        
        <!-- jQuery local -->
        <script src="../base/jquery.js"></script>
        
        <!-- Bootstrap headers required -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">        
		<link href="../bootstrap/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
		<script src="../bootstrap/js/plugins/sortable.min.js" type="text/javascript"></script>
		<script src="../bootstrap/js/plugins/purify.min.js" type="text/javascript"></script>
		<script src="../bootstrap/js/fileinput.min.js"></script>
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script src="../bootstrap/themes/fa/theme.js"></script>
	<head>

<?php
	session_start();
	if(isset($_SESSION['msg']) && $_SESSION['msg']=="OK"){
		$target_dir = "images/";
		$target_file = $target_dir . basename($_FILES["input-1"]["name"]);
		$uploadOk = 1;
		$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$csv = file('images.csv');
		
		foreach($csv as $line) {
			$line = str_getcsv($line);
			$array[$line[0]] = trim($line[1]);
		}
		$end=sizeof($array);
		if ($_FILES["input-1"]["size"] > 204800) { //200KB is 204800 not 200000
			echo "<br/><br/><div class='alert alert-danger' style='font-size: 20px;'>Sorry, your file is too large.</div>";
			$uploadOk = 0;
		}
		else if($FileType != "jpg" && $FileType != "gif" && $FileType != "jpeg" && $FileType != "png") {
			echo "<div class='alert alert-danger' style='font-size: 20px;'>Sorry, only image files are allowed.</div><br/><br/>";
			$uploadOk = 0;
		}
		else if($end==10){
			echo "<br/><div class='alert alert-danger' style='font-size: 20px;'>Sorry, Only 10 files are allowed.</div><br/>";
			$uploadOk = 0;
		}
		if($end==1){ //when uploading the first file
			$curr = $end;
		}
		else{
			$curr = $end + 1;
		}
		if ($uploadOk == 0) {
			echo "<div class='alert alert-danger' style='font-size: 20px;'>No file was uploaded.</div><br/><br/>";
		} else {
			$currName = $curr . "." . $FileType;
			$target_file = $target_dir . basename($currName);
			//echo $target_file;
			if (move_uploaded_file($_FILES["input-1"]["tmp_name"], $target_file)) {
				echo "<br/><br/><div class='alert alert-success' style='font-size: 20px;'>The file has been uploaded and appended to the end of your album</div><br/>";
//				echo "<br/><br/><div class='alert alert-success'>The file ". $currName . " has been uploaded.</div><br/>";
				$file = fopen("images.csv","a");
				$line=array($curr,$currName);
				//print_r($line);
				fputcsv($file,$line);
				fclose($file);
			} else {
				echo "<br/><br/><div class='alert alert-danger' style='font-size: 20px;'>Sorry, there was an error uploading your file.</div><br/><br/>";
			}
		}
		echo "<br/><br/>";
	}
	else{
		header("location:index.php");
	}
?>
<center><br/><a href="album.php?image_id=<?php if($uploadOk==1){echo $curr;} else{echo '1';} ?>"><button type="button" class="btn btn-lg btn-primary">Back to album</button></a></center>
</html>
