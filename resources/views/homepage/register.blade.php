@extends('welcome')


@section('main_content')

	<form method="POST" action="/register">
		{{csrf_field()}}
		<div class="form-group">
			<input type="text" name="name" placeholder="Name" value="{{old('name')}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password" value="{{old('password')}}" placeholder="Password" class="form-control">
		</div>
		<div class="form-group">
			<input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" placeholder="Confirm Password" class="form-control">
		</div>
			<input type="submit" name="submit" value="Register" class="btn btn-success">
	</form>
	@include('homepage.error')
  
@endsection