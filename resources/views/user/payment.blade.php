@include('user.header')

@if (session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">X</button>
    {{ session()->get('message') }}
</div>
@endif
       <div align="center" style="padding:70px;">
       
   
  <!-- Ödeme formunun açılması için gereken HTML kodlar / Başlangıç -->
  <script src="https://www.paytr.com/js/iframeResizer.min.js"></script>
    <iframe src="https://www.paytr.com/odeme/guvenli/" id="paytriframe" frameborder="0" scrolling="no" style="width: 100%;"></iframe>
    <script>iFrameResize({},'#paytriframe');</script>
    <!-- Ödeme formunun açılması için gereken HTML kodlar / Bitiş -->



       </div>
</body>
</html>