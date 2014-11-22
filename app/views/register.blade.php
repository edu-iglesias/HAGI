@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')

<!--     {{ HTML::style('combobox/docs/css/bootstrap-3.2.0.min.css') }}
    {{ HTML::style('combobox/docs/css/bootstrap-example.css') }}
    {{ HTML::style('combobox/docs/css/prettify.css') }} -->

    {{ HTML::script('combobox/docs/js/jquery-2.1.1.min.js') }}
    {{ HTML::script('combobox/docs/js/bootstrap-3.2.0.min.js') }}
    {{ HTML::script('combobox/docs/js/prettify.js') }}

    {{ HTML::style('combobox/dist/css/bootstrap-multiselect.css') }}
    {{ HTML::script('combobox/dist/js/bootstrap-multiselect.js') }}

    <script type="text/javascript">
        $(document).ready(function() {
            window.prettyPrint() && prettyPrint();
        });
    </script>
@stop

@section('contents')
    <div class="col-sm-6 col-lg-6 col-centered padding main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Register Here</h1>
            </div>
        </div><!--/.row-->

        {{ Form::open(array('class' => 'form-signin registration-form', 'role' => 'form')) }}

            <div class="form-group @if ($errors->has('organizationName')) has-error @endif">
                {{ Form::text('organizationName',null,array('class' => 'form-control reg-form', 'placeholder' => 'Organization Name','maxlength'=>'100')) }}
                @if ($errors->has('organizationName')) <p class="help-block">{{ $errors->first('organizationName') }}</p> @endif
            </div>

             <div class="sbs form-group @if ($errors->has('userType')) has-error @endif" >
                <div class="input-group">
                  <span class="input-group-addon">Select user type</span>
                  <div class="btn-group" data-toggle="buttons" style="margin-left:15px;">
                        {{ Form::radio('userType', 'Merchant', true); }} Merchant
                    </div>
                    <div style="margin-left:15px;">
                        {{ Form::radio('userType', 'Government Agency');}} Government Agency
                    </div>
                </div>
                @if ($errors->has('userType')) <p class="help-block">{{ $errors->first('userType') }}</p> @endif
            </div>

           <!--  <div class="sbs form-group @if ($errors->has('password')) has-error @endif" >
                <div class="input-group">
                  <span class="input-group-addon">Select user type</span>
                  <div class="btn-group" data-toggle="buttons" style="margin-left:2px;">
                        <label class="btn btn-primary @if(Input::old('userType') != '3') active @endif">
                            <input type="radio" value="2" name="userType" id="option1" checked style="border:1px;"> Crowdie
                        </label>
                        <label class="btn btn-primary @if(Input::old('userType') == '3') active @endif" >
                            <input type="radio" value="3" name="userType" id="option2"> Merchant
                        </label>
                    </div>
                </div>
            </div> -->

            <div class="form-group @if ($errors->has('email')) has-error @endif">
                {{ Form::text('email',Session::get('email'),array('class' => 'form-control reg-form', 'placeholder' => 'Email address','maxlength'=>'100')) }}
                @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
            </div>

            <div class="sbs form-group input-group @if ($errors->has('password')) has-error @endif">
                {{ Form::password('password', array('class' => 'form-control col-md-6 sidebyside left-sbs reg-form', 'placeholder' => 'Password','maxlength'=>'100','id' => 'password','onkeyup'=>'check_password(this.value)')) }}
                {{ Form::password('password_confirmation', array('class' => 'form-control col-md-6 sidebyside reg-form', 'placeholder' => 'Re-Type Password','id'=>'password2','maxlength'=>'100','onkeyup'=>'password_match(this.value)')) }}
                @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
            </div>
            <br>

            <div id="pass-strength-result" class="" style="margin-top:-5px;margin-bottom:30px; color:black;float:right;">Strength indicator</div>
            <div id="pwd_bar" style="float:right; display:none;" style="margin-top:-5px;"></div>
            <span id="pwd_meter" style="float:right; display:none;"></span><br/><br/>

            <div>
                <label>Preferences: </label>
                <select name="preferences[]" id="example-getting-started" multiple="multiple">
                    <option value="cheese">Cheese</option>
                    <option value="tomatoes">Tomatoes</option>
                    <option value="Mozzarella">Mozzarella</option>
                    <option value="Mushrooms">Mushrooms</option>
                    <option value="Pepperoni">Pepperoni</option>
                    <option value="Onions">Onions</option>
                </select>
                <br><br>
            </div>

            {{ Form::submit('Register', ['id'=>'submit submit-reg','class' => 'btn btn-lg btn-success btn-block sbmt']) }}

        {{ Form::close() }}
    </div>

    <!-- Scripts Here -->

    <script>
        function check_password(pwd)
        {
            var span_log = document.getElementById("pwd_log");      // Where the debug info appears
            var span_bar = document.getElementById("pwd_bar");      // Where the colored strength bar appears
            var span_meter = document.getElementById("pwd_meter");  // Where the strength word appears
            var floatEntropy;       // Maximum possible combinations of password characters
            var intBase = 0;        // Total number of characters in the character sets used in the password
            var intPwdLen;      // length of the password
            var strUnique="";       // Sort of unique characters used, I count no more than 2 of each
            var intUniqueLen=0;     // Length of "unique" character string, allowing 2 of each character max
            var intStrength = 0;    // Calculated password strangth
            var x;          // General counter
            var barWidth;       // Current width and color of the bar
            var barColor;
            var DEBUG=0;            // Set to 1 for debug output
            intPwdLen = pwd.length; // Length of typed password
            if (pwd.match(/[a-z]/))
            {
                intBase = intBase + 26;
            }

            // Uppercase = 26

            if (pwd.match(/[A-Z]/))
            {
                intBase = intBase + 26;
            }

            // Digits = 10

            if (pwd.match(/[0-9]/))
            {
                intBase = intBase + 10;
            }

            // Special characters = 33

            if (pwd.match(/[\W_]/))
            {
                intBase = intBase + 33;
            }

            // Strip out duplicate bytes (allow 2 only) to avoid passwords like aaaaaaaaaaaaaaaaaa or 123123123123
            // Don't use regex because special characters mess it up

            for (x = 0; x < intPwdLen; x++)
            {
                var intMatches = 0;
                for (var i = x+1; i < intPwdLen; i++)
                {
                    if (pwd.charAt(x) == pwd.charAt(i))
                        intMatches = intMatches + 1;
                }
                if (intMatches < 2)
                    strUnique = strUnique + pwd.charAt(x);
            }
            strUniqueLen = strUnique.length;

            // Entropy for only unique bytes in password

            floatEntropy = Math.pow(intBase, strUniqueLen);

            // Calculate pwd strength as the exponent of entropy

            x = floatEntropy;
            while (x >= 10) {
                intStrength = intStrength + 1;
                x = x / 10;
            }

            // Scale from 0 - 50, max strength is 50

            if (intStrength > 50) intStrength = 50;

            // Convert strength into words and colors.
            // If you want to evaluate strength differently
            // you can change this section.

            if (intStrength == 0) strDesc = "";
            else if (intStrength <= 7) 
            {
                strDesc = "Weak";
                barColor = "Red";
            }
            else if (intStrength <= 14) 
            {
                strDesc = "Fair";
                barColor = "Orange";
            }
            else if (intStrength <= 20) 
            {
                strDesc = "Good";
                barColor = "yellow";
            }
            else if (intStrength <= 30) 
            {
                strDesc = "Strong";
                barColor = "GreenYellow";
            }
            else if (intStrength > 30) 
            {
                strDesc = "Very strong";
                barColor = "Green";
            }

            // Output debug/information text

            if (DEBUG)
            span_log.innerHTML = "<br>Length is " + intPwdLen + ". "
                + "<br>Unique string is " + strUnique + " with length " + strUniqueLen + "."
                + "<br>Base is " + intBase + ". " + "<br>Entropy is " 
                + floatEntropy.toExponential() + ". "
                + "<br>Password strength is " + intStrength + "."
                + "<br>Password is " + pwd + "."
                ;

            // Show strength meter bar

            barWidth = intStrength * 4;     // Scale up to 200px width

            span_bar.innerHTML = "";
            span_bar.style.width=barWidth + "px";
            span_bar.style.height="8px";
            span_bar.style.border="1px solid gray";
            span_bar.style.backgroundColor=barColor;
            span_bar.style.margin="0px";
            span_bar.style.padding="0px";

            // Show the strength word

            span_meter.innerHTML = strDesc + "&nbsp;";

            // Return password strengh

            //alert(strDesc);

            if(strDesc == "Weak")
            {
                document.getElementById("pass-strength-result").className = "bad";
                document.getElementById("pass-strength-result").innerHTML = "BAD";
            }

            else if(strDesc == "Fair" || strDesc == "Good")
            {
                document.getElementById("pass-strength-result").className = "short";
                document.getElementById("pass-strength-result").innerHTML = "GOOD";
            }

            else if(strDesc == "Strong")
            {
                document.getElementById("pass-strength-result").className = "good";
                document.getElementById("pass-strength-result").innerHTML = "BETTER";
            }

            else if( strDesc == "Very strong")
            {
                document.getElementById("pass-strength-result").className = "strong";
                document.getElementById("pass-strength-result").innerHTML = "BEST";
            }

            else
            {
                document.getElementById("pass-strength-result").className = "";
                document.getElementById("pass-strength-result").innerHTML = "Strength indicator";
            }

            if (intPwdLen > 0)
                return(intStrength);
        }

        function password_match(value)
        {
            var password1 = document.getElementById('password').value;
            if(password1 !=  value )
            {
                document.getElementById("pass-strength-result").className = "bad";
                document.getElementById("pass-strength-result").innerHTML = "MISMATCH";
            }
            else
            {
                document.getElementById("pass-strength-result").className = "good";
                document.getElementById("pass-strength-result").innerHTML = "MATCHED";
            }
        }
    </script>

    <style>
            #pass-strength-result {
            background-color: #eee;
            border-color: #ddd !important;
            border-style: solid;
            border-width: 1px;
            float: left;
            margin: 13px 5px 5px 1px;
            padding: 3px 5px;
            text-align: center;
            width: 200px;
        }

        #pass-strength-result.bad {
            background-color: #ffb78c;
            border-color: #ddd !important;
        }


        #pass-strength-result.short {
            /* background-color: #ffa0a0; */
            background-color: #ffec8b;
            border-color: #ddd !important;
        }

        #pass-strength-result.good {
            /* background-color: #ffec8b; */
            background-color: #c3ff88;
            border-color: #ddd !important;
        }

        #pass-strength-result.strong {
            /* background-color: #c3ff88; */
            background-color: #44a20b; 
            border-color: #ddd !important;
        }
        </style>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#example-getting-started').multiselect();
            });
        </script>
@stop
