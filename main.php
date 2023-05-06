<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['inputFile'])) {
    $target_dir = "/upload/";
    $target_file = $target_dir . basename($_FILES["inputFile"]["name"]);

    if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $target_file)) {
        $command = "bash /backend.sh " . escapeshellarg($target_file) . " 2>&1";
        $output = shell_exec($command);
        echo "<pre>$output</pre>";
    } else {
        echo "Error uploading file.";
    }
}
?>
