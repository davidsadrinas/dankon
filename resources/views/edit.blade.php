<form method="POST" v-on:submit.prevent="updatePost(fillPost.id)">
<div class="modal fade" id="edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Name</label>
					<input type="text" name="name" class="form-control" v-model="fillPost.name">
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>	
				</div>
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Link Image</label>
					<input type="text" name="file" class="form-control" v-model="fillPost.file">
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>	
				</div>
				<div class="row col-sm-11 col-sm-offset-1">
					<label for="post">Text</label>
					<input type="text" name="body" class="form-control" v-model="newPost">
					<span v-for="error in errors" class="text-danger">@{{ error }}</span>	
				</div>
				
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Update">
			</div>
		</div>
	</div>
</div>
</form>