@extends('app')
@section('content')
<div id="blog" class="row">
	<div class="col-xs-offset-10 col-xs-2">
		<a class="btn btn-primary pull-right" data-toggle="modal" data-target="#create">Nueva Orden</a>
	</div>
	
	<div class="col-sm-offset-0 col-sm-12">
		<div v-for="post in posts">
			<table class="table ">
				<thead>
					<tr>
						<th>

						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="col-sm-1">
							<img v-bind:src="post.file" width="50" height="50">
						</td>
						<td class="col-sm-2">
							@{{ post.name }}
						</td>
						<td class="col-sm-1">
							@{{ post.user_id }}
						</td>
						<td class="col-sm-1">
							1 u
						</td>
						<td class="col-sm-4">
							@{{ post.body }}
						</td>
						<td class="col-sm-1">
							<a href="#" class="btn btn-warning" v-on:click.prevent="editPost(post)">+</a>

							<a href="#" class="btn btn-warning" v-on:click.prevent="editPost(post)">-</a>
							<a href="#" class="btn btn-danger" v-on:click.prevent="deletePost(post)">Delete</a>
						</td>

					</tr>
				</tbody>
			</table>
		</div>
 		@include('create')
 		@include('edit')
	</div>
</div>
<script src="{{ asset('js/app.js') }}"></script>

@endsection
