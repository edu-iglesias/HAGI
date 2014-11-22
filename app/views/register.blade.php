<b>Register Here</b>

{{ Form::open(array('class' => 'form-signin', 'role' => 'form')) }}

    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {{ Form::text('email',Session::get('email'),array('class' => 'form-control', 'placeholder' => 'Email address','maxlength'=>'100')) }}
        @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    </div>

    <div class="sbs form-group input-group @if ($errors->has('password')) has-error @endif">
        {{ Form::password('password', array('class' => 'form-control col-md-6 sidebyside left-sbs', 'placeholder' => 'Password','maxlength'=>'100','id' => 'password','onkeyup'=>'check_password(this.value)')) }}
        {{ Form::password('password_confirmation', array('class' => 'form-control col-md-6 sidebyside', 'placeholder' => 'Re-Type Password','id'=>'password2','maxlength'=>'100','onkeyup'=>'password_match(this.value)')) }}
        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }}</p> @endif
    </div>
    <br><br>

    <div id="pass-strength-result" class="" style="margin-top:-5px;margin-bottom:30px; color:black;float:right;">Strength indicator</div>
    <div id="pwd_bar" style="float:right; display:none;" style="margin-top:-5px;"></div>
    <span id="pwd_meter" style="float:right; display:none;"></span><br/><br/>



    <div class="form-group @if ($errors->has('firstname')) has-error @endif" id="step1-name">
            {{ Form::text('firstname',Session::get('firstname'), ['class'=>'form-control', 'placeholder' => 'First name','maxlength'=>'100']) }}
            @if ($errors->has('firstname')) 
                @if ( $errors->first('firstname') == 'Thefirst name field is required.')
                    <p class="help-block">The first name field is required.</p>
                @elseif($errors->first('firstname') == 'Thefirst name may only contain letters and spaces.')
                    <p class="help-block">The first may only contain letters and spaces.</p>
                @else
                    <p class="help-block">{{ $errors->first('firstname') }}</p> 
                @endif
            @endif
        </div>

        <div class="form-group @if ($errors->has('lastname')) has-error @endif">
            {{ Form::text('lastname',Session::get('lastname'), ['class'=>'form-control', 'placeholder' => 'Last name','maxlength'=>'100']) }}
            @if ($errors->has('lastname')) 
                @if ( $errors->first('lastname') == 'The lastname field is required.')
                    <p class="help-block">The last name field is required.</p>
                @elseif($errors->first('lastname') == 'The lastname may only contain letters and spaces.')
                    <p class="help-block">The last name may only contain letters and spaces.</p>
                @else
                    <p class="help-block">{{ $errors->first('lastname') }}</p> 
                @endif
            @endif
        </div>

        <div class="form-group @if ($errors->has('birthdate')) has-error @endif" id="datepicker" data-date="{{ date('Y-m-d') }}T" data-date-format="yyyy-mm-dd">
            {{ Form::text('birthdate',Session::get('birthdate'), ['class'=>'form-control','maxlength'=>'255','id'=>'birthdate', 'placeholder' => 'Birth date', 'onchange'=>"checkDate(this.value)"]) }}
            @if ($errors->has('birthdate')) <p class="help-block">{{ $errors->first('birthdate') }}</p> @endif
        </div>

        <div class="form-group @if ($errors->has('contact')) has-error @endif">
            {{ Form::text('contact',Session::get('contact'),array('class' => 'form-control', 'placeholder' => 'Contact number', 'id'=>'contact')) }}
            @if ($errors->has('contact')) <p class="help-block">{{ $errors->first('contact') }}</p> @endif
        </div>

        {{ Form::submit('Next', ['id'=>'submit','class' => 'btn btn-lg btn-success btn-block sbmt']) }}

{{ Form::close() }}
