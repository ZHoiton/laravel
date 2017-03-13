@extends('layouts.app')
{{Session::get('message')}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Detail posts</h1></div>
                        <div class="panel-body">
                            <h2>{{ $detailpage->title }}</h2>
                            <p>{{ $detailpage->post }}</p>
                            <a href="/blog"> back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
