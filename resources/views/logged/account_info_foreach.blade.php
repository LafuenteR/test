
@foreach($personal_info as $info)
	@if($info->id == Auth::user()->id)
		<table style="text-align: left;">
			<tr>
				<td>Nickname</td>
				@if(empty($info->nickname))
				<td>---</td>
				@else
				<td>{{$info->nickname}}</td>
				@endif
			</tr>
			<tr>
				<td>Age</td>
				@if(empty($info->age))
				<td>---</td>
				@else
				<td>{{$info->age}}</td>
				@endif
			</tr>
			<tr>
				<td>Weight</td>
				@if(empty($info->weight))
				<td>---</td>
				@else
				<td>{{$info->weight}}</td>
				@endif
			</tr>
			<tr>
				<td>Height</td>
				@if(empty($info->height))
				<td>---</td>
				@else
				<td>{{$info->height}}</td>
				@endif
			</tr>
			<tr>
				<td>Birthdate</td>
				@if(empty($info->birthdate))
				<td>---</td>
				@else
				<td>{{$info->birthdate}}</td>
				@endif
			</tr>
			<tr>
				<td>
				<a href="/edit" class="btn btn-warning">Edit Personal Info</a>
				</td>
				<td>
				<a href="/delete" class="btn btn-danger">Delete Account</a>
				</td>
			</tr>
		</table>
	@endif
@endforeach