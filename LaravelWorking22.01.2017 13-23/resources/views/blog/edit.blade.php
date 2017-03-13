@extends('layouts/app')
@section('css')
    <link href="/css/buyTicket.css" rel="stylesheet">
@endsection
<img src="/Images/asd.jpg" style="position: fixed; z-index: -10; height: 100%; width: 100%;">
<br><br><br>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <center>
                    <div class="panel panel-default" style="background-color: rgba(19, 79, 75, 0.8); width: 50%;">
                        <center>
                        <div class="panel-heading"><h1>Edit data</h1></div>
                            <div class="panel-body">
                                <form class="" action="/blog/{{$blog->id}}" method="post">
                                    <input type="text" name="title" value="{{ $blog->title }}" placeholder="Title" style="background-color: rgba(19, 79, 75, 0.0);">
                                        {{($errors->has('title')) ? $errors->first('title') : ''}}<br>
                                    <textarea name="post" id="txtarea" rows="8" cols="40" placeholder="Desc">{{ $blog->post }} </textarea>
                                        {{($errors->has('post')) ? $errors->first('post') : ''}}<br>
                                    <input type="hidden" name="_method" value="put">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" name="name" value="edit">
                                </form>
                                <a href="/blog"> back</a>
                            </div>
                            </center>
                    </div>
                        </center>
                </div>
            </div>
@endsection
