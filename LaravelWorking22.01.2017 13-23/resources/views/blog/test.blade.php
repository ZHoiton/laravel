@extends('layouts.app')
@section('content')
    <center>
        <h1>My blog</h1>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            @foreach($blogs as $data)
                                <div class="panel-heading"><h2><a href="blog/{{ $data->id }}">{{ $data -> title }}</a></h2></div>
                                <div class="panel-body">
                                    <p>{{ $data -> post }}</p>
                                    <p>{{ date('F d, Y',strtotime($data ->created_at))}}</p>
                                    <a href="blog/{{ $data->id }}/edit">Edit Post</a>
                                    <form class="" action="blog/{{ $data-> id }}" method="post">
                                        <input type="hidden" name="_method" value="delete">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" name="name" value="Delete post">
                                    </form>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </center>
@endsection

