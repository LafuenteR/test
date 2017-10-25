
@extends('logged.welcome')

@section('logged_main_content')

<!-- <div class="links"> -->
	<h4 class="text-danger">Are you sure you want to delete this account?</h4>
	<form method="POST" action="/delete">
		{{csrf_field()}}
		<!-- <a type="submit" name="submit" class="btn btn-danger">Yes</a> -->
		<input type="submit" name="submit" class="btn btn-danger" value="Yes">
		<a href="/home" class="btn btn-primary">No</a>        
	</form>
<!-- </div>       -->




@endsection