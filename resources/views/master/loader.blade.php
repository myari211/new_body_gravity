<style type="text/css">
    .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #000;
  }
  .preloader .loading {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    font: 14px arial;
  }
</style>

<div class="preloader">
    <div class="loading">
        <img src="{{ asset('image/body_logo.png') }}" width="200" class="animated fadeIn infinite slower">
    </div>
</div>