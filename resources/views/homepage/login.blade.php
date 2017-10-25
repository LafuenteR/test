@extends('welcome')


@section('main_content')

	<form method="POST" action="/login">
		{{csrf_field()}}
		<div class="form-group">
			<input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" value="{{old('password')}}" placeholder="Password" class="form-control">
		</div>
		<input type="submit" name="submit" value="Login" class="btn btn-success">
	</form>
	@include('homepage.error')

@endsection