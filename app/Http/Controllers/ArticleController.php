<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ArticleShow()
    {
        $arr = array(
            new Article('S21 Ultra', 15000),
            new Article('Iphone 13', 21000),
            new Article('Iphone14', 22500),
            new Article('Sumsung J1 2016', 900),
            new Article('OPPO a5s', 1300),
            new Article('Redmi', 2000)
        );


        return view('allArticles', ['arts' => $arr]);
    }
}
