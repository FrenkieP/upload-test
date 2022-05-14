<?php


require __DIR__. '/vendor/autoload.php';
use Google\Cloud\Storage\StorageClient;

class storage{
    private $projectId;
    private $storage;
    

    public function __construct()
    {
        putenv("GOOGLE_APPLICATION_CREDENTIALS=C:\Users\User\Desktop\SerViceKey_GoogleCloud.json");
        $this->projectId = 'empyrean-yeti-348917';
        $this->storage = new StorageClient([
            'projectId' => $this->projectId
        ]);
        
    }
       
    function upload_object($bucketName, $objectName, $source)
    {    
        $storage = new StorageClient();
        $file = fopen($source, 'r');
        $bucket = $storage->bucket($bucketName);
        $object = $bucket->upload($file, [
            'name' => $objectName
        ]);
        printf('Uploaded %s to gs://%s/%s' . PHP_EOL, basename($source), $bucketName, $objectName);
    }

   
}

?>