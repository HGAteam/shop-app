<!-- Vendor JS -->
<script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-migrate-3.3.0.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/modernizr-3.11.2.min.js')}}"></script>

<!--Plugins JS-->
<script src="{{asset('assets/js/plugins/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/countdownTimer.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/scrollup.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/infiniteslidev2.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery.sticky-sidebar.js')}}"></script>
<!-- Google translate Js -->
<script src="{{asset('assets/js/vendor/google-translate.js')}}"></script>
<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<!-- Main Js -->
<script src="{{asset('assets/js/vendor/index.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

@yield('scripts')
