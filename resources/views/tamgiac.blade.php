<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/tamgiacvang" method="POST">
  @csrf
  <label for="num1">Nhap day:</label>
  <input type="text" name="num1" id="num1">
  <br>

  <label for="num2">Nhap chieu cao:</label>
  <input type="text" name="num2" id="num2">
  <br>
  <button type="submit">Calculate</button>
</form>
@if(isset($result))
  <h1>ket qua : {{$result}}</h1>
@endif
</body>
</html>
