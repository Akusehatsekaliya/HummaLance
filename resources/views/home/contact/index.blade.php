@extends('home.layout.app')
@section('content')
<section class="section-padding bg-dark py-5 inner-header">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <h1 class="mt-0 mb-3 text-white">Contact Us</h1>
             <div class="breadcrumbs">
                <p class="mb-0 text-white"><a class="text-white" href="#">Home</a>  /  <span class="text-success">Contact Us</span></p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Inner Header -->
 <!-- Contact Us -->
 <section class="py-5 bg-white">
    <div class="container">
       <div class="row">
          <div class="col-lg-4 col-md-4">
             <h3 class="mt-1 mb-4">Get In Touch</h3>
             <h6 class="text-dark"><i class="mdi mdi-home-map-marker"></i> Address :</h6>
             <p>86 Petersham town, New South wales Waedll Steet, Australia PA 6550</p>
             <h6 class="text-dark"><i class="mdi mdi-phone"></i> Phone :</h6>
             <p>+91 12345-67890, (+91) 123 456 7890</p>
             <h6 class="text-dark"><i class="mdi mdi-deskphone"></i> Mobile :</h6>
             <p>(+20) 220 145 6589, +91 12345-67890</p>
             <h6 class="text-dark"><i class="mdi mdi-email"></i> Email :</h6>
             <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97eef8e2e5e4fee3f2d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a>, <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="670e09010827000a060e0b4904080a">[email&#160;protected]</a></p>
             <h6 class="text-dark"><i class="mdi mdi-link"></i> Website :</h6>
             <p>www.Webartinfo.com</p>
             <div class="footer-social mb-4"><span>Follow : </span>
                <a href="#"><i class="mdi mdi-facebook"></i></a>
                <a href="#"><i class="mdi mdi-twitter"></i></a>
                <a href="#"><i class="mdi mdi-instagram"></i></a>
                <a href="#"><i class="mdi mdi-google"></i></a>
             </div>
          </div>
          <div class="col-lg-8 col-md-8">
             <div class="card">
                <div class="card-body">
                   <div class="map" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                      <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                      <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="5e57946cb2f94cdc613a2131-text/javascript">(function () {
                         var setting = {"height":450,"width":803,"zoom":15,"queryString":"Candás, Spain","place_id":"ChIJuXoxw-aANg0RZ1DUQHMSFTM","satellite":false,"centerCoord":[43.59051127662882,-5.768219799999998],"cid":"0x3315127340d45067","lang":"en","cityUrl":"/spain/candas-8349","cityAnchorText":"Map of Candas, Asturias, Spain","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"215844"};
                         var d = document;
                         var s = d.createElement('script');
                         s.src = 'https://1map.com/js/script-for-user.js?embed_id=215844';
                         s.async = true;
                         s.onload = function (e) {
                           window.OneMap.initMap(setting)
                         };
                         var to = d.getElementsByTagName('script')[0];
                         to.parentNode.insertBefore(s, to);
                         })();
                      </script><a href="https://1map.com/map-embed">1 Map</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- End Contact Us -->
@endsection
