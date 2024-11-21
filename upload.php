<?php
$target_dir = "uploads/";

if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['fileToUpload'])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if ($_FILES["fileToUpload"]["error"] === UPLOAD_ERR_OK) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "<p style='text-align: center;'> The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded successfully.</p>";
        } else {
            echo "<p style='text-align: center;'>Sorry, there was an error uploading your file.</p>";
        }
    } else {
        echo "<p style='text-align: center;'>Sorry, there was an error with your upload.</p>";
    }
}
?>

