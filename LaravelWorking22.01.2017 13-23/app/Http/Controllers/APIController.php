<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Blog;
use App\User;

class APIController extends Controller
{
    //
    public function show()
    {
        $blogs = Blog::all();
        return json_decode($blogs);
    }
}
