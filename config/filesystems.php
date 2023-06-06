<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

         
        'gcs' => [
            'driver' => 'gcs',
            'key_file_path' => env('GOOGLE_CLOUD_KEY_FILE', base_path('C:\xampp\htdocs\easychic2\service-account.json')), // optional: /path/to/service-account.json
            'key_file' => [], // optional: Array of data that substitutes the .json file (see below)
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'capstone-project-easychic-1'), // optional: is included in key file
            'bucket' => env('GOOGLE_CLOUD_STORAGE_BUCKET', 'easychicb'),
            'path_prefix' => env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX', ''), // optional: /default/path/to/apply/in/bucket
            'storage_api_uri' => env('GOOGLE_CLOUD_STORAGE_API_URI', null), // see: Public URLs below
            'apiEndpoint' => env('GOOGLE_CLOUD_STORAGE_API_ENDPOINT', null), // set storageClient apiEndpoint
            'visibility' => 'public', // optional: public|private
            'visibility_handler' => null, // optional: set to \League\Flysystem\GoogleCloudStorage\UniformBucketLevelAccessVisibility::class to enable uniform bucket level access
            'metadata' => ['cacheControl'=> 'public,max-age=86400'], // optional: default metadata
        ],

        // 'gcs' => [
        //     'driver' => 'gcs',
        //     'project_id' => env('GCS_PROJECT_ID', 'capstone-project-easychic-1'),
        //     'key_file' => env('GCS_KEY_FILE', null),
        //     'bucket' => env('GCS_BUCKET', 'easychicb'),
        //     'visibility' => 'public',
        // ],

        
               

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
