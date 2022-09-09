<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <style>
    *{ font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: hsla(0,0%,15%,1); }
    .name{ color: hsla(157,65%,25%,1); font-weight: bold}
  </style>
</head>
<body>
  <h1><span class="name">{{ $contact['name'] }}</span> Contact Us</h1>
  <p>{{ $contact['message'] }}</p>
  <p>By: <span class="name">{{ $contact['name'] }}</span></p>
</body>
</html>