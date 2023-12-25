<!DOCTYPE html>
<html>

<head>

@include('includes.head')

</head>

<body>
  <div class="hero_area">
    
 @include('includes.header')

 @include('includes.slider')

 @include('includes.about')

 @include('includes.service')
 
 @include('includes.client')

 @include('includes.contact')
 
 @include('includes.team')

 @include('includes.info')

 @include('includes.footer')
 

  <script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>

</html>