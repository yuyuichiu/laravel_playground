<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $header }}</title>
</head>
<body>
  <h1>Restaurants</h1>
  <p>Fetched from a MySQL database.</p>
  <ul>
    @foreach ($restaurants as $restaurant)
      <li>{{$restaurant->name}}, located at {{$restaurant->street}}</li>
    @endforeach
  </ul>
</body>
</html>