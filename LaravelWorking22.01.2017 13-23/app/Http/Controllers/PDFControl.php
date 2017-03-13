<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use PDF;
use App\Blog;


class PDFControl extends Controller
{
    //
    public function getPDF() {
        $blogs = Blog::all();
        $pdf = PDF::loadView('blog.test', compact('blogs'));
        return $pdf -> download('blog.pdf');
    }
}
