<?php
$uploadsDirectory = "uploads/";
if (is_dir($uploadsDirectory)) {
        if ($handle = opendir($uploadsDirectory)) {
               while (($file = readdir($handle)) !== false) {
                       if (in_array(pathinfo($file, PATHINFO_EXTENSION), array("jpg", "jpeg", "png", "gif"))) {
                            echo '<div class="image-container">';
                            echo '<img src="' . $uploadsDirectory . $file . '" alt="Image">';
                            echo '</div>';
            }
        }
        
        closedir($handle);
    }
} else {
  
    echo "The uploads directory does not exist.";
}
