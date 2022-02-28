<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Example page</title>
</head>
<body>
    <h1>Example page 2</h1>

    <p id="count-box">Current count: 0</p>
    <button id="increase-btn">increase count</button>
    <button id="decrease-btn">decrease count</button>

    <script type="text/javascript">
      let counter = 0;
      document.getElementById("increase-btn").onclick = () => {
        document.getElementById("count-box").innerHTML = 'Current count: ' + ++counter;
      };
      document.getElementById("decrease-btn").onclick = () => {
        document.getElementById("count-box").innerHTML = 'Current count: ' + --counter;
      };
    </script>
</body>
</html>