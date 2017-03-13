    @extends('layouts/app')
    @section('css')
        <link href="/css/buyTicket.css" rel="stylesheet">
        @endsection
@section('javabefore')
    <script language="javascript" type="text/javascript">
        function dateofbirthh(day,month,year) {
            var day1 = document.getElementById(day).value;
            var month1 = document.getElementById(month).value;
            var year1 = document.getElementById(year).value;
            var data = document.getElementById('dateofbirth');
            data.value = day1 + '-' +month1+'-'+year1;
        }
        function daysTicket() {
            var day1 = document.getElementById('friday').value;
            var day2 = document.getElementById('saturday').value;
            var day3 = document.getElementById('sunday').value;
            var data = document.getElementById('days');
            var nrdays = document.getElementById('nrofdays');
            if(document.getElementById('friday').checked&&document.getElementById('saturday').checked&&document.getElementById('sunday').checked){
                data.value = day1 + ',' +day2+','+day3;
                nrdays.value = 3;
            }
            else if(document.getElementById('friday').checked&&document.getElementById('saturday').checked){
                data.value = day1 + ',' +day2;
                nrdays.value = 2;
            }
            else if(document.getElementById('friday').checked&&document.getElementById('sunday').checked){
                data.value = day1 + ',' +day3;
                nrdays.value = 2;
            }
            else if(document.getElementById('saturday').checked&&document.getElementById('sunday').checked){
                data.value = day2 + ',' +day3;
                nrdays.value = 2;
            }
            else if(document.getElementById('friday').checked){
                data.value = day1;
                nrdays.value = 1;
            }
            else if(document.getElementById('saturday').checked){
                data.value = day2;
                nrdays.value = 1;
            }
            else{
                data.value = day3;
                nrdays.value = 1;
            }

        }
    </script>
@endsection
@section('content')
    <img src="Images/mlg.jpg" style="position: fixed; z-index: -10; height: 100%; width: 100%;">
    <br>

    <h2>Personal Information</h2>
    <form class="form-horizontal" id="formaZaRegistraciq" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div id="getTheInfo">
            <div class="redove" style="opacity: 1;">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">First Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="redove">
                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <label for="lastname" class="col-md-4 control-label">Last Name</label>

                    <div class="col-md-6">
                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                        @if ($errors->has('lastname'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="redove">
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
            </div>
            <div class="redove">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="redove">
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="redove" style="opacity: 1;">
                <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                    <label for="gender" class="col-md-4 control-label">Gender</label>
                    <div class="col-md-6">
                        <input type="radio" name="gender" id="gender" value="female" required /> female
                        <input type="radio" name="gender" id="gender" value="male" required/> male

                        @if ($errors->has('gender'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="redove">
                <div class="form-group{{ $errors->has('dateofbirth') ? ' has-error' : '' }}">
                    <div style="position: relative;left:21%;">
                    <label for="dateofbirth" class="cal-md-4 control-label">Date Of Birth</label>

                    <select name="day" id="Day" style="position: relative;left:3.5%;">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="month" id="Month" style="position: relative;left:3.5%";>
                        <option value="01">Jan</option>
                        <option value="02">Feb</option>
                        <option value="03">Mar</option>
                        <option value="04">Apr</option>
                        <option value="05">May</option>
                        <option value="06">Jun</option>
                        <option value="07">Jul</option>
                        <option value="08">Aug</option>
                        <option value="09">Sep</option>
                        <option value="10">Oct</option>
                        <option value="11">Nov</option>
                        <option value="12">Dec</option>
                    </select>
                    <select name="year" id="Year" style="position: relative;left:3.5%;">
                        <option value="1999">1999</option>
                        <option value="1998">1998</option>
                        <option value="1997">1997</option>
                        <option value="1996">1996</option>
                        <option value="1995">1995</option>
                        <option value="1994">1994</option>
                        <option value="1993">1993</option>
                        <option value="1992">1992</option>
                        <option value="1991">1991</option>
                        <option value="1990">1990</option>
                        <option value="1989">1989</option>
                        <option value="1988">1988</option>
                        <option value="1987">1987</option>
                        <option value="1986">1986</option>
                        <option value="1985">1985</option>
                        <option value="1984">1984</option>
                        <option value="1983">1983</option>
                        <option value="1982">1982</option>
                        <option value="1981">1981</option>
                        <option value="1980">1980</option>
                        <option value="1979">1979</option>
                        <option value="1978">1978</option>
                        <option value="1977">1977</option>
                        <option value="1976">1976</option>
                        <option value="1975">1975</option>
                        <option value="1974">1974</option>
                        <option value="1973">1973</option>
                        <option value="1972">1972</option>
                        <option value="1971">1971</option>
                        <option value="1970">1970</option>
                        <option value="1969">1969</option>
                        <option value="1968">1968</option>
                        <option value="1967">1967</option>
                        <option value="1966">1966</option>
                        <option value="1965">1965</option>
                        <option value="1964">1964</option>
                        <option value="1963">1963</option>
                        <option value="1962">1962</option>
                        <option value="1961">1961</option>
                        <option value="1960">1960</option>
                    </select>
                    <input type="text" name="dateofbirth" id="dateofbirth" style="visibility: hidden" value="">
                    @if ($errors->has('dateofbirth'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('dateofbirth') }}</strong>
                                    </span>
                    @endif
                    </div>
                </div>
            </div>
            <div class="redove" id="dniBilet">
                <div class="form-group{{ $errors->has('days') ? ' has-error' : '' }}">
                    <label id="specialen">For which days would you like to buy a ticket?</label>
                    <br>
                    <div style="position: relative; left: 13%;">
                        <input type="checkbox" name="daysT" id="friday" value="friday" required/> Friday
                        <input type="checkbox" name="daysT" id="saturday" value="saturday" /> Saturday
                        <input type="checkbox" name="daysT" id="sunday" value="sunday" /> Sunday
                        <input type="text" name="days" id="days" style="visibility: hidden"  value="" >
                        @if ($errors->has('days'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('days') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="redove" id="dniBilet" style="visibility: hidden">
                <div class="form-group{{ $errors->has('nrofdays') ? ' has-error' : '' }}">
                    <div style="position: relative; left: 13%;">
                        <input type="number" name="nrofdays" id="nrofdays" style="visibility: hidden"  value=0>
                        @if ($errors->has('nrofdays'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nrofdays') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
            </div>

        </div>
        <div class="formButoni">
            <input class="butoncheta" value="Cancel" type="reset" id="cancel">
            <input class="butoncheta" value="Register" onclick="daysTicket();" type="submit" id="register">
        </div>

    </form>
@endsection