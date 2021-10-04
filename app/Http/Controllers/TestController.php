<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;


use App\Http\Requests\GetPresignedUrlRequest;
use Aws\S3\S3Client;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class TestController extends Controller
{
    public function test()
    {
        $res = array();
        $res["data"] = "OK";
        return response()->json($res);
    }

    public function fileUpTest()
    {
        return view('test/file_up_test');
    }

    public function getS3Url(Request $request)
    {
        $res = array();
        $res["status"] = true;

        $req = $request->all();

        if (empty($req["file_name"])) {
            $res["status"] = false;
            return $res;
        }

        $fileName = $req["file_name"];

        // とりあえずファイル名に日時分秒を足してユニーク化
        $parts1 = pathinfo($fileName, PATHINFO_FILENAME);
        $parts2 = pathinfo($fileName, PATHINFO_EXTENSION);
        date_default_timezone_set('Asia/Tokyo');
        $datetime = date('YmdHis');

        // ファイル名構築
        $saveFileName = $parts1 . "_" . $datetime . "." . $parts2;
        $savePath = "public/" . $saveFileName;

        // S3からアップロード用URLを取得
        $S3 = app()->make('App\Http\Controllers\S3ClientController');
        $res["data"] = $S3->getPresignedUrl($savePath);

        return response()->json($res);
    }

    public function s3UploadTest(Request $request)
    {
        $form = $request->all();
        /*\Log::debug($form);
        $ybrr = app()->make('App\Http\Controllers\S3ClientController');
        $test = $ybrr->getPresignedUrl();
        \Log::debug($test);*/

        $image = $request->file('image');
        //$s3Client = app()->make('aws')->createClient('s3');

        $s3 = S3Client::factory([
            'credentials' => [
                'key' => "AKIAR5HTJSI4MEOIYC54",
                'secret' => "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",
            ],
            'version' => 'latest',
            'region'  => 'ap-northeast-1',
        ]);

        $cmd = $s3->getCommand('PutObject', [
            'Bucket' => 'photolize-dev',
            'Key' => 'uptest2.txt',
            'SourceFile' => $image
        ]);

        $request = $s3->createPresignedRequest($cmd, '+20 minutes');
        $presignedUrl = (string) $request->getUri();
        \Log::debug($presignedUrl);

        /*
        $command = $s3Client->getCommand('PutObject', array(
            'Bucket' => "photolize-dev",
            'Key'    => 'key',
            //SourceFile' => $image
        ));

        // 1分間有効な署名つきURLを発行
        $request = $s3Client->createPresignedRequest($command, '+5 minutes');
        $url = $request->getUri();
        $mimeType = $image->getMimeType();
        //file_put_contents($test, $image);
        \Log::debug($url);



        /*$param = array('file' => new \CURLFile($image, $mimeType, 'uptest.txt'));
        \Log::debug($param);

        // 必要に応じてオプションを追加してください。
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  'POST');
        //curl_setopt($ch, CURLOPT_HTTPHEADER,     $header);
        curl_setopt($ch, CURLOPT_URL,            $url);
        //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST,           true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,     $param);

        $response = curl_exec($ch);
        \Log::debug($response);
        curl_close($ch);
*/
        //$image = $request->file('image');
        //$path = Storage::disk('s3')->putFile('public', $image, 'public');
        //\Log::debug($path);
    }
}
