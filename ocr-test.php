<?php
// Define the image files in an array
$imageFiles = ['medium.jpg', 'large.png'];

// Loop through each image file
foreach ($imageFiles as $image) {
    // Run Tesseract OCR on each image
    $command = "tesseract " . escapeshellarg($image) . " stdout";
    
    // Execute the command and capture the output
    $output = shell_exec($command);
    
    // Display the result of each OCR operation
    echo "<h2>Text extracted from: $image</h2>";
    echo "<pre>" . htmlspecialchars($output) . "</pre>";
}

?>
