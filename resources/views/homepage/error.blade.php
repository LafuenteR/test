@if(count($errors))
	<div class="alert alert-danger form-group">
		<ul>
			@foreach($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif

@if($flash = session('message'))
	<div class="alert alert-success">{{$flash}}</div>
@endif

@if (Session::has('sweet_alert.alert'))
	<script>

		swal({
		title: "{!! Session::get('sweet_alert.title') !!}",
		text: "{!! Session::get('sweet_alert.text') !!}",
		timer: {!! Session::get('sweet_alert.timer') !!},
		icon: "success",
		// button: "Ok!",
		});

	</script>
@endif

