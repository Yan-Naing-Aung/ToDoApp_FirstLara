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
				<div>
					Create Todo Task  <a href="new" class="btn btn-success">Create +</a>
				</div>
				<br>
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Description</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($data as $value)
						<tr>
							<td>{{$value->id}}</td>
							<td>{{$value->title}}</td>
							<td>{{$value->description}}</td>
							<td>
								<a href="edit/{{$value->id}}" class="btn btn-warning">Edit</a>
								<a href="delete/{{$value->id}}" class="btn btn-danger">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		
	</div>
</body>
</html>