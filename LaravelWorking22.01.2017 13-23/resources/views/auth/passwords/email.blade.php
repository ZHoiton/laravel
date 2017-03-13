@extends('layouts/app')
@section('css')
    <link href="/css/buyTicket.css" rel="stylesheet">
@endsection
@section('content')
<img src="/Images/mlg.jpg" style="position: fixed;z-index: -10; height: 100%; width: 100%;">
<br><br><br><br>
<div id="getTheInfo" style=" padding: 40px;">
                <div class="panel-body">

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" href="/">
                                    Send Password Reset Link

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection
