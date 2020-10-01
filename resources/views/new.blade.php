<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-title">
				Heading
			</div>
			<div class="card-body">
				<form action="store" method="post">
					@csrf
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
					</div>
					<div class="form-group">
						<label>Description</label>
						<input type="text" name="desc" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Submit">
					</div>
				</form>
				
			</div>
		</div>
		
	</div>
</body>
</html>