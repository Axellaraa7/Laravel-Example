@php
  $links = [
    ['name' => 'Home' , 'route' => 'exIndex'],
    ['name' => 'Create' , 'route' => 'exCreate'],
    ['name' => 'Contact us' , 'route' => 'mailCreate']
];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <script src="{{ asset('js/index.js') }}" type="module"></script>
</head>
<body class="dFlex jcStart aiCenter flexColumn gap1">
  <header>
    <nav class="dFlex gap1 aiCenter" >
      {{-- <a href="{{route('exIndex')}}" class="btn btnMain {{ request()->routeIs('exIndex') ? 'active' : '' }}">Home</a> | 
      <a href="{{route('exCreate')}}" class="btn btnMain {{ request()->routeIs('exCreate') ? 'active' : '' }}">Create</a>
      <a href="{{route('mailCreate')}}" class="btn btnMain {{ request()->routeIs('mailCreate') ? 'active' : '' }}">Contact us</a> --}}
      @foreach ($links as $link)
        <a href="{{route($link['route'])}}" class="btn btnMain {{ request()->routeIs($link['route']) ? 'active' : '' }}">{{$link['name']}}</a>
      @endforeach
    </nav>
  </header>
  <main>
    <h1>@yield('h1')</h1>
    @yield('main')
  </main>
  <footer>
  </footer>
</body>
</html>