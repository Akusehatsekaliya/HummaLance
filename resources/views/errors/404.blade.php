@extends('home.layout.app')
@section('content')
<!-- 404 Page -->
<section class="py-5 bg-white border-top border-bottom">
    <div class="container">
       <div class="row py-lg-5">
          <div class="col-lg-8 col-md-8 mx-auto text-center">
             <h1><img class="img-fluid" src="images/404.png" alt="404"></h1>
             <h1>Sorry! Page not found.</h1>
             <p class="land">Unfortunately the page you are looking for has been moved or deleted.</p>
             <div class="mt-5">
                <a href="index.html" class="btn btn-success"><i class="mdi mdi-home"></i> GO TO HOME PAGE</a>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
