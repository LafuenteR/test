@extends('logged.welcome')

@section('logged_main_content')


<form method="POST" action="/edit_user">
	{{csrf_field()}}
	<div class="form-group">
		<input type="text" name="name" placeholder="Name" value="{{Auth::user()->name}}" class="form-control" required>	
	</div>
	<div class="form-group">
		<input type="password" name="password" placeholder="********" class="form-control" required>
	</div>
	<div class="form-group">
		<input type="password" name="password_confirmation" placeholder="********" class="form-control" required>
	</div>
	<input type="submit" name="submit" value="Submit" class="btn btn-success">
	<a href="/home" class="btn btn-danger">Cancel</a>
</form>
@include('homepage.error')
@endsection