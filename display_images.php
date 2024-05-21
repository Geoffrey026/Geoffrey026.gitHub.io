<?php
// Define the path to the uploads directory
$uploadsDirectory = "uploads/";

// Check if the uploads directory exists
if (is_dir($uploadsDirectory)) {
    // Open the uploads directory
    if ($handle = opendir($uploadsDirectory)) {
        // Loop through each file in the directory
        while (($file = readdir($handle)) !== false) {
            // Check if the file is a valid image (you may add more checks here)
            if (in_array(pathinfo($file, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "gif"))) {
                // Display the image
                echo '<div class="image-container">';
                echo '<img src="' . $uploadsDirectory . $file . '" alt="Image">';
                echo '</div>';
            }
        }
        // Close the directory handle
        closedir($handle);
    }
} else {
    // Handle case where the uploads directory doesn't exist
    echo "The uploads directory does not exist.";
}
