<?php
$targetPath = "uploads/" . basename($_FILES["inputFile"]["name"]);
move_uploaded_file($_FILES["inputFile"]["tmp_name"], $targetPath);
?>
