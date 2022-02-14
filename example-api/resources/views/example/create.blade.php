<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example page</title>
</head>
<body>
    <h1>Creating...</h1>

    <form method="POST" action="/">
      @csrf
      <input name="username" placeholder="Username" />
      <button type="submit" name="submit">send</button>
    </form>
</body>
</html>