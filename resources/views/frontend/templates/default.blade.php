<!DOCTYPE html>
<html lang="en">
<head>
   @include('frontend/templates/partials/head')
</head>
<body>
    <!-- nav -->
    @include('frontend/templates/partials/navbar')
      <!-- Content -->
      <div class="container">    
      @yield('content')
      </div>
     @include('frontend/templates/partials/scripts')
     @include('frontend/templates/partials/toast')
    </body>
</html>