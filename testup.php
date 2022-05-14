<?php 
putenv("GOOGLE_APPLICATION_CREDENTIALS=C:\Users\User\Desktop\SerViceKey_GoogleCloud.json");
require __DIR__ . '\vendor\autoload.php';


use Google\Cloud\Storage\StorageClient;

function upload_object($bucketName, $objectName, $source)
{
    // $bucketName = 'my-bucket';
    // $objectName = 'my-object';
    // $source = '/path/to/your/file';
    
    $storage = new StorageClient();
    $file = fopen($source, 'r');
    $bucket = $storage->bucket($bucketName);
    $object = $bucket->upload($file, [
        'name' => $objectName
        
    ]);
    
    
    
    
    
    printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
}
upload_object('keygen1_bucket','file12','C:\Users\User\Desktop\ontime class dia.txt')
?>
