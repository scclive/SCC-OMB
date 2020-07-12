<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sunra\PhpSimple\HtmlDomParser;

class CrawlerController extends Controller
{
    public function index()
    {
        return view('crawler.crawlerMain');
    }
    
    public function universities()
    {
      //  $html = file_get_html('https://www.4icu.org/pk/');
        return view('crawler.crawlerUniversities');
    }
    public function Rank()
    {
        return view ('crawler.crawlerUniversitiesRank');
    }
    

    public function universitiescampuses()
    {
        return view('crawler.crawlerUniversitiesCampuses');
    }
}
