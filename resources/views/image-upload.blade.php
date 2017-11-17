<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo AWS-S3 y Laravel 5.5 con validacion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <div class="panel panel-primary">
    <div class="panel-heading"><h2>Laravel 5.5 Amazon S3 </h2></div>

    <div class="panel-body">

      @if (count($errors) > 0)
	 <div class="alert alert-danger">
	    <strong>Problemas!</strong> Algo esta mal con tu ingreso.<br><br>
		<ul>
		  @foreach ($errors->all() as $error)
		    <li>{{ $error }}</li>
		  @endforeach
		 </ul>
	    </div>
      @endif

	  @if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
		        <strong>{{ $message }}</strong>
		</div>
		<img src="{{ Session::get('path') }}">
	  @endif

	  <form action="{{ url('aws-s3') }}" enctype="multipart/form-data" method="POST">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-md-12">
				<input type="file" name="image" />
			</div>
			<div class="col-md-12">
				<button type="submit" class="btn btn-success">Subir a AWS-S3</button>
			</div>
		</div>
	  </form>
    </div>

  </div>
</div>

</body>
</html>