<?php

namespace App\Http\Controllers;

class S3ClientController extends Controller
{
    public function getPresignedUrl($path)
    {
        $s3Client = app()->make('aws')->createClient('s3');

        // コマンドを作成
        $command = $s3Client->getCommand('PutObject', array(
            'Bucket' => config('filesystems.disks.s3.bucket'),
            'Key'    => $path
        ));

        // 1分間有効な署名つきURLを発行
        $request = $s3Client->createPresignedRequest($command, '+1 minutes');

        return (string) $request->getUri();
    }
}
