
new Vue({
	el:"#blog",
	created: function() {
		this.getPosts();
	},
	data: {
		posts: [],
		newPost: {"user_id":30, "name":"",  "file":"", "body":""},
		fillPost: {"id":"","user_id":30, "name":"",  "file":"", "body":""},
		errors: []
	},
	methods: {
		getPosts: function() {
			var urlPosts = "/posts";
			axios.get(urlPosts).then(response => {
				this.posts = response.data
			});
		},
		editPost: function(post) {
			this.fillPost.id = post.id;
			this.fillPost.post = post.post;
			$("#edit").modal("show");
		},
		updatePost: function(id) {
			var url = "/posts/"+ id;
			axios.put(url, this.fillPost).then(response => {
				this.getPosts();
				this.fillPost = {"id":"","user_id":30, "name":"", "file":"", "body":""};
				this.errors = [];
				$("#edit").modal("hide");
				toastr.success("Post Edited! =)");
			}).catch(error => {
				this.errors = erorr.response.data
			})	
		},
		deletePost: function(post) {
			var url = "/posts/" + post.id;
			axios.delete(url).then(response => {
				this.getPosts();
				toastr.success(" DELETE SUCCESSFULLY!! ");
			});
		},
		createPost: function() {
			var url = "/posts";
			axios.post(url, this.newPost).then(response => {
				this.getPosts();
				this.newPost = "";
				this.errors = [];
				$("#create").modal("hide");
				toastr.success("NEW POST CREATED");
			}).catch(error => {
				this.errors = error.response.data
			});
		}
	
	}
}); 