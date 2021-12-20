<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<form action="{{ route('movies.update', $movie->id) }}" method='post'>

@csrf
@method('put')
  <div class="form-group">
    <label >movie name :</label>
    <input type="text" class="form-control" name='movie_name' value="{{ $movie->movie_name }}">
  </div>
  <div class="form-group">
    <label >movie desc:</label>
    <input type="text" class="form-control" name='movie_desc' value="{{ $movie->movie_desc  }}" >
  </div>
  <div class="form-group">
    <label >movie gener:</label>
    <input type="text" class="form-control" name='movie_gener' value="{{ $movie->movie_gener }}" >
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</body>
</html>