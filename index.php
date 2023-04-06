<?php
require_once 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

// Upload Object Function
function s3UploadObject($file)
{
  $options = [
    'region' => 'us-east-1',
    'version' => '2006-03-01',
    'credentials' => [
      'key' => 'Your Key',
      'secret' => 'Your Secret'
    ]
  ];

  $file_name = $file['name'];
  $file_path = $file['tmp_name'];
  try {
    $s3Client = new S3Client($options);
    $result = $s3Client->putObject([
      'Bucket' => 'ecosystem-files',
      'Key' => $file_name,
      'SourceFile' => $file_path
    ]);

    echo '<pre>';
    var_dump($result, true);
    echo '</pre>';

    echo '<pre>';
    var_dump($result['ObjectURL']);
    echo '</pre>';


  } catch (S3Exception $e) {
    echo $e->getMessage() . '\n';
  }
}

if (isset($_FILES['file']) && !empty($_FILES['file'])) {
  s3UploadObject($_FILES['file']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subida de Archivos a Amazon AWS S3</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="file">Subir Archivo</label>
    <input type="file" name="file" id="file">
    <input type="submit" value="Subir archivo">
  </form>
</body>

</html>