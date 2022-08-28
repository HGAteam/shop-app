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
      &copy;Liftitfy 2022. All rights reserved
    </span>
    </div>

  </footer>