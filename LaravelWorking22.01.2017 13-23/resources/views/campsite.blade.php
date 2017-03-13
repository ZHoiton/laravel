@extends('layouts/app')
@section('css')
    <link href="css/campingSpot.css" type="text/css" rel="stylesheet"/>
    @endsection
@section('content')
    <div id="razlika"></div>

    <div id="wrap">
        <h1 id="zaglavie">Book a camping spot.</h1>

        <div id="infoCS">
            <p>Welcome to our camping spots! During the event there will be a camping ground where you can stay if you have reserved a camping spot. A camping spot is reserved by only one person, who is the host of the camping. The same person takes care of the bill. You are allowed to have up to 5 gueasts of your camping spot. Your guests have to have a ticket to the event, in order for you to enter them as guests. You have to know the ID of your guests if you want to add them.</p>
            <h3>Book your camping spot below.</h3>
        </div>

        <img id="karta" src="Images/CampingPark.png" alt="Map of the camping ground">
        <div>
            <form class="formCS">
                <div>
                    <label class="labelcheta">Choose a camping spot: </label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
                <div>
                    <label class="labelcheta">How many guests do you have? </label>
                    <select>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div>
                    <label class="labelcheta">Please enter the ID's of your guests. </label>
                    <br>
                    <label class="labelcheta">Guest 1</label>
                    <input type="text" name="guest1" id="guest1" required>
                    <br>
                    <label class="labelcheta">Guest 2</label>
                    <input type="text" name="guest2" id="guest2" required>
                </div>
                <input class="butnchenca" type="reset" name="cancel" value="Cancel" >
                <input class="butnchenca" type="submit" name="paynow" value="Pay Now" >
            </form>
        </div>

    </div>
@endsection