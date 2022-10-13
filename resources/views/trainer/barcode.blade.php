@extends('trainer.layouts.app')
@section('content')
    <div class="container">
        {{-- <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {!! DNS2D::getBarcodeHTML("/localhost/login", 'QRCODE', 10, 10) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div id="barcode"></div>
    </div>
    <script type="text/javascript">
        jQuery('#barcode').qrcode({
            width: 128,
            height: 128,
            text: "http://test.com",
        });
    </script>
@endsection