<!DOCTYPE HTML>
<html lang="eng">
    <head>
        @include('layouts.head')
    </head>

<body>

  <div class="container">

      @include('layouts.navigation')

      @include('errors.error')

      @yield('content')

      @include('layouts.footer')
      
  </div>

</body>
</html>
