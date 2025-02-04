<?php
$pdfFile = 'admin\PrivacyPolicy\passmate_privacy_policy_en.pdf';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Preview</title>
</head>
<body>
    <h1>PDF Preview</h1>
    <iframe src="<?php echo $pdfFile; ?>" width="100%" height="600px"></iframe>
</body>
</html>