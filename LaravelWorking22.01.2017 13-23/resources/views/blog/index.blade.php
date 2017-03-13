@extends('layouts/app')
@section('css')
    <link href="/css/buyTicket.css" rel="stylesheet">
@endsection
@section('content')
<img src="/Images/asd.jpg" style="width: 100%;display: block; height: 100%; position: fixed; z-index:-10;">
<center>
    <br><h2 style="margin-left: 0px;">News</h2>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <style>.panel {margin: 20px; padding: 30px;}</style>
            @foreach($blogs as $data)
                <div class="panel panel-default" style="background-color: rgba(19, 79, 75, 0.8); position:relative;z-index: -9;">
                    <div class="panel-heading" style="background-color: rgba(19, 79, 75, 0.0);"><h2 style="margin-left: 0px;"><a>{{ $data -> title }}</a></h2></div>
                    <div class="panel-body" id="stroke">
                        <p>{{ $data -> post }}</p>
                        <p>{{ date('F d, Y',strtotime($data ->created_at))}}</p>
                        <hr>
                    </div>
                    @if (Gate::allows('update-post', $data))
                        <a href="blog/{{ $data->id }}/edit">Edit Post</a>
                    @endif
                    <form class="" action="blog/{{ $data-> id }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if (Gate::allows('update-post', $data))
                            <input type="submit" name="name" value="Delete post">
                        @endif
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    <br>
    {!! $blogs->links() !!}
@endsection
