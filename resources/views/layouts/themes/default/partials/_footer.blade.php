 <!-- begin::Footer Start -->
 <footer class="ec-footer">
     <div class="footer-container">
        @guest
         <div class="footer-offer">
             <div class="container">
                 <div class="row">
                     <div class="text-center footer-off-msg">
                         <span>{{__('Comenzá a comprar y vender desde nuestro sitio')}}</span>
                         <span class="footer-off-text">{{__('ES GRATIS')}}</span>
                         <a href="#" target="_blank">{{__('Más información')}}</a>
                     </div>
                 </div>
             </div>
         </div>
         @else
         @endguest
         <div class="footer-top section-space-footer-p">
             <div class="container">
                 <div class="row">
                     <div class="col-sm-12 col-lg-3 ec-footer-contact">
                         <div class="ec-footer-widget">
                             <div class="ec-footer-logo">
                                 <a href="javascript:void(0)">
                                     <img src="{{ asset('assets/images/logo/logo.png') }}" alt="{{ config('app.name') }}">
                                 </a>
                             </div>
                             <h4 class="ec-footer-heading">Location</h4>
                             <div class="ec-footer-links">
                                 <ul class="align-items-center">
                                     <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, MD 20815, USA</li>
                                 </ul>
                                 <div class="col-sm-12 col-lg-3 ec-footer-social">
                                     <div class="ec-footer-widget">
                                         <div class="ec-footer-links">
                                             <ul class="align-items-center">
                                                 <li class="list-inline-item">
                                                     <a href="#">
                                                         <i class="ecicon eci-facebook"></i>
                                                     </a>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <a href="#">
                                                         <i class="ecicon eci-twitter"></i>
                                                     </a>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <a href="#">
                                                         <i class="ecicon eci-instagram"></i>
                                                     </a>
                                                 </li>
                                                 <li class="list-inline-item">
                                                     <a href="#">
                                                         <i class="ecicon eci-linkedin"></i>
                                                     </a>
                                                 </li>
                                             </ul>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-3 ec-footer-news">
                         <div class="ec-footer-widget">
                             <h4 class="ec-footer-heading">Newsletter</h4>
                             <div class="ec-footer-links">
                                 <ul class="align-items-center">
                                     <li class="ec-footer-link">Get instant updates about our new products and
                                         special promos!</li>
                                 </ul>
                                 <div class="ec-subscribe-form">
                                     <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                         action="#">
                                         <div id="ec_news_signup" class="ec-form">
                                             <input class="ec-email" type="email" required=""
                                                 placeholder="Enter your email here..." name="ec-email"
                                                 value="" />
                                             <button id="ec-news-btn" class="button btn-secondary" type="submit"
                                                 name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                     aria-hidden="true"></i></button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-2 ec-footer-account">
                         <div class="ec-footer-widget">
                             <h4 class="ec-footer-heading">Account</h4>
                             <div class="ec-footer-links">
                                 <ul class="align-items-center">
                                     <li class="ec-footer-link"><a href="user-profile.html">My Account</a></li>
                                     <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                     <li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
                                     <li class="ec-footer-link"><a href="offer.html">Specials</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-2 ec-footer-service">
                         <div class="ec-footer-widget">
                             <h4 class="ec-footer-heading">Services</h4>
                             <div class="ec-footer-links">
                                 <ul class="align-items-center">
                                     <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                     <li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy </a>
                                     </li>
                                     <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                     <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="col-sm-12 col-lg-2 ec-footer-info">
                         <div class="ec-footer-widget">
                             <h4 class="ec-footer-heading">Information</h4>
                             <div class="ec-footer-links">
                                 <ul class="align-items-center">
                                     <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                     <li class="ec-footer-link"><a href="faq.html">FAQ</a></li>
                                     <li class="ec-footer-link"><a href="track-order.html">Delivery Information</a>
                                     </li>
                                     <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="footer-bottom">
             <div class="container">
                 <div class="row align-items-center">
                     <!-- Footer Copyright Start -->
                     <div class="col footer-copy">
                         <div class="footer-bottom-copy ">
                             <div class="ec-copy">Copyright © 2023 <a class="site-name text-upper"
                                     href="index.html">Ekka</a>. All Rights Reserved</div>
                         </div>
                     </div>
                     <!-- Footer Copyright End -->
                     <!-- Footer payment -->
                     <div class="col footer-bottom-right">
                         <div class="footer-bottom-payment d-flex justify-content-end">
                             <div class="payment-link">
                                 <img src="assets/images/icons/payment.png" alt="">
                             </div>

                         </div>
                     </div>
                     <!-- Footer payment -->
                 </div>
             </div>
         </div>
     </div>
 </footer>
 <!-- Footer Area End -->
