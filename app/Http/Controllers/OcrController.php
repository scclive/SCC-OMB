<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Ocr;
use Sunra\PhpSimple\HtmlDomParser;
use DB;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;

//use JFuentesTgn\OcrSpace\OcrAPI;
//use thiagoalessio\TesseractOCR\TesseractOCR;

use Image;


class OcrController extends Controller
{

    function index()
    {
        return view('ocr.ocrMain');
    }

    function test()
    {

        return view('ocr.ocrTest');
        
    }


    
    public function test2($x, $y, $w, $h, $img)
    {


        //$img = stream_get_contents(fopen($img, "r"));
        //$img = get_remote_data($img);


        // crop image
        // $img = Image::make(public_path('storage\\'.'393279924.jpg'));
        // $croppath = public_path('storage/crop/'.'393279924.jpg');
        // $img->crop($w, $h, $x, $y);
        // $img->save($croppath);
 
        //echo public_path('iamges\393279924.jpg');

        // crop image
        $img = Image::make(public_path('images/393279924.jpg'));
        $croppath = public_path('storage/crop/'.'393279924cropped.jpg');
        $img->crop($w, $h, $x, $y);
        $img->save($croppath);
        
    }

    
    











    public function Conversion()
    {

        $ocrData = Ocr::all();
        return view('ocr.ocrConversion', compact(['ocrData']));
        
    }

    public function process(Request $request)
    {

        $OCR_id = $request->get('OCR_id');
        $ocr = ocr::find($OCR_id);
        $Image_Remote = $ocr->Image_Remote;
        $compressed = false;

        // $filePath = "C:\wamp64\www\SCC-3\public\images\\".$ocr->Image_Dir;
        $filePath = public_path("images/".$ocr->Image_Dir);
        $source = $filePath; // File to upload to FTP server
        $destination = $ocr->Image_Dir; // File name on FTP server

        if($Image_Remote == "NO"){

            //compression
            $quality = 10;
            if(filesize($source)/1024 > 10024)
                $quality = 10;
            else if(filesize($source)/1024 > 9024)
                $quality = 15;
            else if(filesize($source)/1024 > 8024)
                $quality = 20;
            else if(filesize($source)/1024 > 7024)
                $quality = 25;
            else if(filesize($source)/1024 > 6024)
                $quality = 30;
            else if(filesize($source)/1024 > 5024)
                $quality = 40;
            else if(filesize($source)/1024 > 4024)
                $quality = 50;
            else if(filesize($source)/1024 > 3024)
                $quality = 60;
            else if(filesize($source)/1024 > 2024)
                $quality = 70;
            else if(filesize($source)/1024 > 1000)
                $quality = 75;

            if(filesize($source)/1024 >1000){
                $info = getimagesize($source);
                if ($info['mime'] == 'image/jpeg') 
                    $image = imagecreatefromjpeg($source);
                elseif ($info['mime'] == 'image/gif') 
                    $image = imagecreatefromgif($source);
                elseif ($info['mime'] == 'image/png') 
                    $image = imagecreatefrompng($source);
                $destinationCompressed = "images/compressed//".$ocr->Image_Dir;
                imagejpeg($image, $destinationCompressed, $quality);
    
                // $source = "C:\wamp64\www\SCC-3\public\images\compressed\\".$ocr->Image_Dir;
                $source = public_path("images/compressed/".$ocr->Image_Dir);
                $compressed = true;
            }

            
            // cURL Uploads to FTP
            // (0) FTP SETTINGS
            define('FTP_HOST', 'ftp://ohhmybug.com/');
            define('FTP_USER', 'tempImages@ohhmybug.com');
            define('FTP_PASSWORD', '=RYuReqFG-N4');
            // (1) INIT CURL + LOCAL FILE
            $curl = curl_init();
            $file = fopen($source, 'r');
            // (2) SET CURL OPTIONS
            curl_setopt_array($curl, [
                CURLOPT_URL => FTP_HOST . $destination,
                CURLOPT_USERPWD => FTP_USER . ":" . FTP_PASSWORD,
                CURLOPT_UPLOAD => 1,
                CURLOPT_INFILE => $file,
                CURLOPT_INFILESIZE => filesize($source)
            ]);
            // (3) EXECUTE CURL
            curl_exec($curl);
            // (4) CLOSE CONNECTION + FILE
            curl_close($curl);
            fclose($file);
            //delete local compressed
            if($compressed){
                unlink($source);
            }

            //conversion
            // $gateway = 'https://api.ocr.space/parse/imageurl';
            // $key = 'dc0ec62bdc88957'; //input your API KEY, this is test key
            // $img = 'https://ohhmybug.com/images/'.$ocr->Image_Dir;
            // $url = $gateway."?"."apikey=".$key."&url=".$img; //establish the url
            // $data = file_get_contents($url); // fetch content to variable array
            // $txt = json_decode($data, true); // decode the JSON feed
            
            $ocr = ocr::find($OCR_id);
            $ocr->Image_Remote =  "YES";
            $output = array(
                'Image_Dir'  => $ocr->Image_Dir,
            );
            $ocr->save();
            return response()->json($output);

        }else{
            $ocr = ocr::find($OCR_id);
            $ocr->Image_Remote =  "YES";
            $output = array(
                'Image_Dir'  => $ocr->Image_Dir,
            );
            $ocr->save();
            return response()->json($output);
        }


        
    }

    public function processSuccess(Request $request)
    {

        $ocr = ocr::find($request->get('OCR_id'));
        $ocr->Image_Text  =  "Processed";
        $ocr->Image_Conversion  =  $request->get('Image_Conversion');
        $ocr->save();
        
    }


    public function delete(Request $request)
    {
        $OCR_id = $request->get('OCR_id');


        $ocr = ocr::find($OCR_id);
        // $subPath = "C:\wamp64\www\SCC-3\public\images\\".$ocr->Image_Dir;
        $subPath = public_path("images/".$ocr->Image_Dir);
        unlink($subPath);
        $ocr->delete();


        try {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "ftp://ohhmybug.com/".$ocr->Image_Dir);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_USERPWD, "tempImages@ohhmybug.com" . ":" . "=RYuReqFG-N4");
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($ch, CURLOPT_QUOTE, array('DELE /' . $ocr->Image_Dir));
            $result = curl_exec($ch);
            curl_close($ch);
        }catch (Exception $e) {
            
        }




        $output = array(
            'success'  => "Deleted",
        );
        return response()->json($output);
    }

    public function toggleRead(Request $request)
    {
        $OCR_id = $request->get('OCR_id');
        $Image_Traversed = strval($request->get('Image_Traversed'));
        if($Image_Traversed == "Read"){
            $ocr = ocr::find($OCR_id);
            $ocr->Image_Traversed =  "Unread";
            $ocr->save();
        }else{
            $ocr = ocr::find($OCR_id);
            $ocr->Image_Traversed =  "Read";
            $ocr->save();
        }
    }


    function images()
    {

        //$ocrData = DB::table('ocr')->get();
        $ocrData = Ocr::all();
        return view('ocr.ocrImages', compact(['ocrData']));

    }

    function uploadNew()
    {
        return view('ocr.ocrUploadNew');
    }

    function upload(Request $request)
    {

        $image_code = '';
        $images = $request->file('file');
        foreach($images as $image)
        {
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $text = "Unprocessed";
            $traversed = "Unread";
            $conversion = "N/A";
            $remote = "NO";

            $newocr = new Ocr([
                'Image_Dir'   =>$new_name,
                'Image_Text'   =>$text,
                'Image_Traversed'  =>$traversed,
                'Image_Conversion'  =>$conversion,
                'Image_Remote'  =>$remote
            ]);
            $newocr->save();


            


            $image->move(public_path('images'), $new_name);
            $image_code .= '<div class="col-md-3" style="margin-bottom:24px;"><img src="/images/'.$new_name.'" class="img-thumbnail"/></div>';
        }

        $output = array(
        'success'  => 'Images uploaded successfully',
        'image'   => $image_code
        );
        return response()->json($output);
    }
}
