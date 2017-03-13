@extends('layouts/app')
@section('css')
    <link href="/css/buyTicket.css" rel="stylesheet">
@endsection
@section('content')
<img src="/Images/mlg.jpg" style="position: fixed;z-index: -10; height: 100%; width: 100%;">
<br><br><br><br>
        <div class="row">
            <div id="getTheInfo" style=" padding: 70px;">


                        <img src="/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px;">
                            <h2>{{$user->name}}'s Profile </h2>
                            <h4>Name: {{$user->name}}</h4>
                            <h4>Email: {{$user->email}}</h4>
                        <form enctype="multipart/form-data" action="/profile" method="POST">
                            <label class="pull-left">Update Profile Image:</label>
                            <input type="file" name="avatar" class="pull-left" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" value="Upload" class="pull-right btn btn-sm btn-primary" >
                        </form>

                <a href="/home">Back to Main Page</a>
            </div>
        </div>
@endsection
