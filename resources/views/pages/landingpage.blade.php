@extends('layouts.app')
@section('content')
	<div id="header_area">
		<div class="container" >
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div id="overlaytext">
						<h1 style="text-transform: capitalize;">Eloquent ORM</h1>
						<a href="{{route('register')}}" type="button" class="btn btn-info">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection