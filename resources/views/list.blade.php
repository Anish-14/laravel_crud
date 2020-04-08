<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Crud</title>

	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
</head>
<body class="bg-light">
	<div class="p-3 mb-2 bg-dark text-white">
		<div class="container">
			<div class="h3 text-center">
				Laravel 6.0 CRUD APPLICATION
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-right" style="margin-bottom: 10px;">
				<a href="{{url('articles/add')}}" class="btn btn-success">ADD</a>
			</div>

			@if(Session::has('msg'))
				<div class="col-md-12">
					<div class="alert alert-success">{{Session::get('msg')}}</div>
				</div>
			@endif

			@if(Session::has('errorMsg'))
				<div class="col-md-12">
					<div class="alert alert-danger">{{Session::get('errorMsg')}}</div>
				</div>
			@endif
		</div>

		<div class="row" style="margin-top: 10px;">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-center"><h4>Articles</h4></div>

					<div class="card-body">
						<table class="table table-striped table-bordered table-hover">
							<thead class="thead-dark">
								<th>I.D</th>
								<th>Title</th>
								<th>Description</th>
								<th>Author</th>
								<th>Created</th>
								<th>Actions</th>
							</thead>

							<tbody>
								@if($articles)
									@foreach($articles as $article)
										<tr>
											<td>{{$article->id}}</td>
											<td>{{$article->title}}</td>
											<td>{{$article->description}}</td>
											<td>{{$article->author}}</td>
											<td>{{$article->created_at}}</td>
											<td><a href="{{url('articles/edit/'.$article->id)}}" class="btn btn-primary">Edit</a>&nbsp;&nbsp;
												<a href="#" class="btn btn-danger" onclick="deleteArticle({{$article->id}});">Delete</a></td>
										</tr>
									@endforeach
								@else
									<tr>
										<td colspan="6">Articles not added yet.</td>
									</tr>	

								@endif
							</tbody>
						</table>
						

					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	function deleteArticle(id){
		if(confirm('Are you sure you want to delete?')) {
			window.location.href='{{url('articles/delete')}}/'+id;
		}
	}
</script>