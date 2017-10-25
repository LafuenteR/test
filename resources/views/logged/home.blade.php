@extends('logged.welcome')

@section('logged_main_content')

@if($personal_info_bool == false)
	@include('logged.account_info_form')
@endif

@if($personal_info_bool == true)
	@include('logged.account_info_foreach')
@endif
@include('homepage.error')


@endsection