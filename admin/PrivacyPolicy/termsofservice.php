<?php
// Path to the PDF file
$pdfFile = "passmate_terms_of_service_en_in.pdf";

// Check if the file exists
if (file_exists($pdfFile)) {
    // Set the content type to application/pdf
    header('Content-Type: application/pdf');
    // Set the content disposition to inline to display in the browser
    header('Content-Disposition: inline; filename="' . basename($pdfFile) . '"');
    // Read the file and output it to the browser
    readfile($pdfFile);
    exit;
} else {
    echo "File not found.";
}
?>