@extends('app')

@section('content')
<div id="blog" class="row"> 	
	<div class="col-sm-offset-1 col-sm-11">
		<div v-for="post in posts">
				<div class="col-sm-offset-2 col-sm-10">
					<h1 class="page-header">@{{ post.name }}</h1>
				</div>
				<h2></h2>
				<div class="row small">
					<div class="row col-sm-offset-2 col-sm-10">
						User Id:@{{ post.user_id }}
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-2 col-sm-10">
						<img v-bind:src="post.file" width="600" height="400">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-offset-2 col-sm-6">
						@{{ post.body }}
					</div>
				</div>
		</div>
 		@include('create')
 		@include('edit')
	 </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@endsection
