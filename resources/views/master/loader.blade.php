<style type="text/css">
    .preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
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
        <img src="{{ asset('image/body_gravity.png') }}" width="200" class="animated fadeIn infinite slower bg-white rounded-circle">
    </div>
</div>