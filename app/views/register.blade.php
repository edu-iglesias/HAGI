<b>Register Here</b>

{{ Form::open(array('class' => 'form-signin', 'role' => 'form')) }}

    <div class="form-group @if ($errors->has('email')) has-error @endif">
        {{ Form::text('email',null,array('class' => 'form-control', 'placeholder' => 'Email address','maxlength'=>'100')) }}
        @if ($errors->has('email')) <p class="help-block"> {{ $errors->first('email') }} </p> @endif
    </div>

    <div class="sbs form-group input-group @if ($errors->has('password')) has-error @endif">
        {{ Form::password('password', array('class' => 'form-control col-md-6 sidebyside left-sbs', 'placeholder' => 'Password','maxlength'=>'100','id' => 'password','onkeyup'=>'check_password(this.value)')) }}
        {{ Form::password('password_confirmation', array('class' => 'form-control col-md-6 sidebyside', 'placeholder' => 'Re-Type Password','id'=>'password2','maxlength'=>'100','onkeyup'=>'password_match(this.value)')) }}
        @if ($errors->has('password')) <p class="help-block">{{ $errors->first('password') }} </p> @endif
    </div>
    <br><br>
<!-- 
    <div id="pass-strength-result" class="" style="margin-top:-5px;margin-bottom:30px; color:black;float:right;">Strength indicator</div>
    <div id="pwd_bar" style="float:right; display:none;" style="margin-top:-5px;"></div>
    <span id="pwd_meter" style="float:right; display:none;"></span><br/><br/> -->

    <div class="form-group @if ($errors->has('orgName')) has-error @endif" id="step1-name">
            {{ Form::text('organizationName',null,['class'=>'form-control', 'placeholder' => 'Organization Name','maxlength'=>'100']) }}
    </div>

    {{ Form::submit('Next', ['id'=>'submit','class' => 'btn btn-lg btn-success btn-block sbmt']) }}

{{ Form::close() }}
