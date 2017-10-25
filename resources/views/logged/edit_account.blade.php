@extends('logged.welcome')

@section('logged_main_content')

<div class="links">
        <h4 class="text-info">Account Information</h4>
        <form method="POST" action="/edit_info">
                {{csrf_field()}}
                <div class="form-group">
                        <input type="text" name="nickname" placeholder="Nickname" value="{{$personal_info->nickname}}" class="form-control">
                </div>
                <div class="form-group">
                        <input type="number" name="age" placeholder="Age" value="{{$personal_info->age}}" class="form-control">
                </div>
                <div class="form-group">
                        <input type="number" name="weight" placeholder="Weight" value="{{$personal_info->weight}}" class="form-control" step=".01">
                </div>
                <div class="form-group">
                        <input type="number" name="height" placeholder="Height" value="{{$personal_info->height}}" class="form-control" step=".01">
                </div>
                <div class="form-group">
                         <input type="date" name="birthdate" value="{{$personal_info->birthdate}}" class="form-control">
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-success">
                <a href="/home" class="btn btn-danger">Cancel</a>
        </form>
</div>
@include('homepage.error')



@endsection