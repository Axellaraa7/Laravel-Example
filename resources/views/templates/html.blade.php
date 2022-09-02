<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="">
  <style>
    *{
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      padding: 0;
      margin: 0;
    }
    :root{
      --main: #040A0E;
      --sec: #4380B1;
      --third: #295074;
      --fourth: #3A668B;
      --white: #ded;
      --black: #232;
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-flow: column nowrap;
      gap: 1rem;
      min-height: 100vh;
      color: var(--white);
      background-color: var(--main);
    }

    .mainLink{
      display: inline-block;
      padding: 0 1rem;
      color: inherit;
      text-decoration: none;
      transition: .15s all ease 0s;
    }

    .mainLink:hover{
      transform: scale(1.25);
    }
  </style>
</head>
<body>
  <header>
    <nav class="nav">
      <a href="/" class="mainLink">Home</a> |
      <a href="/create" class="mainLink">Create</a> |
      <a href="/scientific/Tesla" class="mainLink">Get By Id</a> |
      <a href="/update/Tesla" class="mainLink">Update</a>
    </nav>
  </header>
  <main>
    @yield('main')
  </main>
  <footer>

  </footer>
</body>
</html>