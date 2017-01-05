@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-3">
			<h2>Sign Up</h2>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			@if(count($errors) > 0 )
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif
		</div>
	</div>
	<br>
	<form action="{{ route('user.signup') }}" method="post">
		<div class="form-group">
			<div class="row">
				<div class="col-md-2 col-md-offset-3">
					<label for="name">Name </label>
				</div>
				<div class="col-md-3">
					<input type="name" name="name" class="form-control">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2 col-md-offset-3">
					<label for="email">Email</label>
				</div>
				<div class="col-md-3">
					<input type="name" name="email" class="form-control">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-2 col-md-offset-3">
					<label for="password">Password</label>
				</div>
				<div class="col-md-3">
					<input type="password" name="password" class="form-control">
				</div>
			</div>
			<br>
			<div class="col-md-2 col-md-offset-5">
				<input type="submit" name="signup" value="Sign Up" class="btn btn-submit">
			</div>
			{{ csrf_field() }}
		</div>
	</form>
@endsection