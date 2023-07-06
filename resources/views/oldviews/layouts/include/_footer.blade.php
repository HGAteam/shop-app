<footer class="footer" style="margin-top:50px;">
  <div class="container text-center">
      <hr>
    <span style="font-size:12px;">
      @php
          $string = 'Liftitfy LLC - 321-200-0440 - 2431 Aloma ave. - Suite 145 - ​Winter Park, FL 32792';
          $replaced = Str::replace(' - ', ' | ', $string);
          $item = $replaced;
          @endphp
        {{$item}}
      <br>
      <a href="mailto:info@liftitfy.com">info@liftitfy.com</a><br>
      &copy;Liftitfy 2022. {{ __('All rights reserved') }}
    </span><br>
    <a href="{{ route('terms') }}">{{ __('Terms & Conditions') }}</a>
  </div>
  <div class="container text-center" style="padding-top:10px">
    <span id="siteseal">
      <script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=pIq8Vh4VPovxB0QQcs2s3VLutk6OtYOPO50XlqwgAt7rAOXTJZhm9kHv8kHw"></script>
    </span>
  </div>

  </footer>