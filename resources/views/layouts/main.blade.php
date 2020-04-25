<!doctype html>
<html lang="en">
  
  @include('layouts.partials.head')

  <body>

     @include('layouts.partials.nav')

    <div class="container-fluid">
      <div class="row">

         @include('layouts.partials.side')

         @yield('content')
      </div>
    </div>

    @include('layouts.partials.script')
  </body>
</html>