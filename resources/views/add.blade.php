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
			<div class="col-md-12 text-right">
				<a href="{{url('articles')}}" class="btn btn-danger">Back</a>
			</div>
		</div>

		<div class="row" style="margin-top: 10px;">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-center"><h4>Add the Articles</h4></div>

					<div class="card-body">
						<form action="{{url('articles/add')}}" method="post" id="addArticles" name="addarticles">
							@csrf
							<div class="form-group">
								<label for="">Title:</label>
								<input type="text" class="form-control {{($errors->any() && $errors->first('title')) ? 'is-invalid' : ''}}" id="title" name="title" value="{{old('title')}}">

								@if($errors->any())
									<p class="invalid-feedback">{{$errors->first('title')}}</p>
								@endif
							</div>

							<div class="form-group">
								<label for="">Description:</label>
								<textarea class="form-control {{($errors->any() && $errors->first('description')) ? 'is-invalid' : ''}}" name="description" id="description" cols="30" rows="5">{{Request::old('description')}}</textarea>

								@if($errors->any())
									<p class="invalid-feedback">{{$errors->first('description')}}</p>
								@endif
							</div>

							<div class="form-group">
								<label for="">Author:</label>
								<input type="text" class="form-control {{($errors->any() && $errors->first('author')) ? 'is-invalid' : ''}}" id="author" name="author" value="{{old('author')}}">

								@if($errors->any())
									<p class="invalid-feedback">{{$errors->first('author')}}</p>
								@endif
							</div>

							<div class="form-group">
								<button class="btn btn-success" type="submit" name="submit">Save Article</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>