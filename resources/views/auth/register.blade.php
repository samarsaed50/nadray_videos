@extends('layouts.master')

@section('content')
<div class="space-50"></div>

<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="POST" action="{{ route('register') }}">
            @csrf
			<fieldset>
				<h2>Please Sign Up</h2>
				<hr class="colorgraph">
                <div class="form-group">
                    <input type="text"  class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }} input-lg" name="first_name" value="{{ old('first_name') }}" required autofocus placeholder="First Name">
                    @if ($errors->has('first_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                @endif
				</div>
                 <div class="form-group">
                    <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }} input-lg" name="last_name" value="{{ old('last_name') }}" required autofocus placeholder="Last Name">
                    @if ($errors->has('last_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                @endif
				</div>
				<div class="form-group">
                    <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-lg" name="email" value="{{ old('email') }}" required placeholder="Email Address ">
                    @if ($errors->has('email'))
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $errors->first('email') }}</strong>
                             </span>
                         @endif
				</div>
				<div class="form-group">
                    <input type="password"  id="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-lg" name="password" required placeholder="Password">
                    @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
				</div>
                <div class="form-group">
                    <input type="password"  id="password" class="form-control input-lg" name="password_confirmation" required placeholder="Confirm Password">
				</div>
				
				<div class="space-15"></div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="{{ route('login') }}" class="btn btn-lg btn-success btn-block">Sign In</a>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<input type="submit"  class="btn btn-lg btn-primary btn-block" value="Register">
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>

</div>

<div class="space-50"></div>
@endsection
