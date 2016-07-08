@section("footer")
<footer class="page-footer">
 <div class="container">
   <div class="footer-main">
    <div class="row">
      <div class="col s12 l4 sitemap">
        <ul>
          <li><a href="{{ route('main') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li><a href="{{ route('packages') }}">Packages</a></li>
          <li><a href="{{ route('materials') }}">Materials</a></li>
          <li><a href="{{ route('products') }}">Products</a></li>
          <li><a href="{{ route('faq') }}">FAQ</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
      <div class="col s12 l4 social">
        <h5>AIE ENGINEERING SVC</h5>
        <p>LADFSFDS</p>
        <ul>
          <li><i class="icon-aieicons-facebook"></i></li>
          <li><i class="icon-aieicons-instagram"></i></li>
          <li><i class="icon-aieicons-twitter"></i></li>
        </ul>
      </div>
      <div class="col s12 l4 details">
        <ul>
          <li>
            <i class="icon-aieicons-location"></i>
            <div class="content">
              <p>ADDRESS</p>
              <p>Blk 2 Defu Lane 10 #03-515</p>
              <p>Singapore 539183</p>
            </div>
          </li>
          <li>
            <i class="icon-aieicons-phone"></i>
            <div class="content">
              <p>CALL US</p>
              <p>+65 6592 6887 (T)</p>
              <p>+65 6228 0270 (F)</p>
            </div>
          </li>
          <li>
            <i class="icon-aieicons-email"></i>
            <div class="content">
              <p>EMAIL US</p>
              <p>service@aiesg.com</p>
            </div>
          </li>
          <li>
            <i class="icon-aieicons-clock"></i>
            <div class="content">
              <p>OPERATING HOURS</p>
              <p>Mon to Fri - 9am to 6pm</p>
            </div>
          </li>
        </ul>
      </div>
     </div>
   </div>
   <div class="footer-copyright">
     <div class="row">
       <div class="col s6">
        <ul>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Terms & Conditions</a></li>
        </ul>
       </div>
       <div class="col s6 right">
        <p>© 2016 AIE Engineering SVC. All Rights Reserved</p>
       </div>
     </div>
   </div>
 </div>

</footer>
@show