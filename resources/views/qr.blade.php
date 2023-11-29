<!DOCTYPE html>
<html>
<head>
  <title>QR Code Generator</title>
</head>
<body>
  <h1>QR Code Generator</h1>
  <form method="post">
    <input type="text" name="inputText" placeholder="Enter text or URL">
    <button type="submit" name="generateQRCode">Generate QR Code</button>
  </form>
  <div id="qrcode">
    <?php
    // Check if the form is submitted
    if (isset($_POST['generateQRCode'])) {
      // Get the input text
      $inputText = $_POST['inputText'];

      // Include the QR code library
      include 'phpqrcode/qrlib.php';

      // Set the QR code options
      $qrCodeOptions = [
        'errorCorrectionLevel' => 'L',
        'margin' => 2,
        'imageType' => 'png',
        'size' => 10
      ];

      // Generate the QR code image
      QRcode::png($inputText, 'qrcode.png', $qrCodeOptions);

      // Display the QR code image
      echo '<img src="qrcode.png" alt="QR Code">';
    }
    ?>
  </div>
</body>
</html>