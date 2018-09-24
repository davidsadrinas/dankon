<form method="POST" v-on:submit.prevent="createPost">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
			</div>
			<div class="modal-body">
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Name</label>
					<input type="text" name="name" class="form-control" v-model="newPost.name">
					<span v-for="error in errors" class="text-danger">@{{ error.name }}</span>	
				</div>
				<input type="hidden" name="user_id" v-model="newPost.user_id" value="30" />
				
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Link Image</label>
					<input type="text" name="file" class="form-control" v-model="newPost.file">
					<span v-for="error in errors" class="text-danger">@{{ error.file }}</span>	
				</div>
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Text</label>
					<input type="text" name="body" class="form-control" v-model="newPost.body">
					<span v-for="error in errors" class="text-danger">@{{ error.body }}</span>	
				</div>
				
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
		</div>
	</div>
</div>
</form>