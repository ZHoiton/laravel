@extends('layouts/app')
@section('css')
    <link href="css/expences.css" type="text/css" rel="stylesheet"/>
    <link href="/css/buyTicket.css" rel="stylesheet">
    @endsection
@section('content')
    <img src="Images/kat.jpeg" style="position: fixed; z-index:-10; height: 100%; width: 100%;">
    <br><br><br><br>
    <form class="form-horizontal" id="formaZaRegistraciq" role="form" method="POST" action="/asd/{{Auth::user()->id}}">
        {{ csrf_field() }}
        <div id="getTheInfo">

            <div id="razlika"></div>
            <p id="warning">You still haven’t paid your ticket. Please pay it now in order to book a camping spot. If you don’t want a camping spot you can pay it at the entrance as well, but please be aware that without paying your ticket you won’t be able to enter the event!</p>
            <div id="expenceMsg">
                @if(Auth::user()->nrofdays === 1)
                <h4>You owe 55 euros.</h4>
                @elseif(Auth::user()->nrofdays === 2)
                    <h4>You owe 75 euros.</h4>
                @else
                    <h4>You owe 105 euros.</h4>
                @endif
                <div class="redove" style="visibility: hidden">
                    <input type="number" name="paid" value="1" >
                    {{($errors->has('paid')) ? $errors->first('paid') : ''}}<br>
                </div>
            </div>
            <input class="butoncheta" value="Pay Now"  type="submit" style=" position:relative;left:44%;">
        </div>
    </form>
    @endsection