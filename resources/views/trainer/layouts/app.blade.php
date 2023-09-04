<html>
    <head>
        @include('master.css')
        <style>
            body {
                background-color: #EDF1FB;
                overflow-x: hidden !important;
                background-color: #EDF1FB;
            }
            .menu{
                transition: 0.5s;
                padding-top:10px;
                padding-bottom:10px;
                /* color: #000 !important; */
            }

            .menu:hover {
                /* background-color:#F5F6FF; */
                border-radius: 10px;
            }

            .menu > a{
                /* color:white; */
                font-size:10px;
                font-weight:400;
                /* opacity:0.6; */
                /* color: #000 !important; */
                color: #fff;
            }

            .menu:hover > a{
                opacity:1;
            }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand fixed-bottom bg-white">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}/trainer/dashboard/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="fas fa-home" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Home</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/trainer/salary/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="far fa-calendar-alt" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Salary</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-md rounded btn-primary pt-3 pb-3 pr-3 pl-3 rounded-circle m-0" onclick="openQr();">
                            <i class="fas fa-qrcode text-white" style="font-size: 20px;"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/trainer/customer/dashboard/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class='col-12'>
                                    <i class="fas fa-clipboard" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Customers</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/trainer/profile/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="fas fa-user-circle" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Me</span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="modal fade" id="qrCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-center">
                                    <div id="qrcode"></div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 12px;">Scan this link for fill ur attendances</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content.mobile')
            <div class="modal fade" id="qr_code_free" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <!-- Change class .modal-sm to change the size of the modal -->
                    <div class="modal-dialog modal-fluid modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                                <div class="row">
                                    <div class="col-12">
                                        <span class="text-white" style="font-size: 20px;">Generate</span><br />
                                        <span class="text-white" style="font-size: 20px;">Attendances</span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center align-items-center">
                                        <img id="qr_app">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px">Let the customers scan the QR Code</span>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 d-flex justify-conten-center">
                                        <span id="token_app" style="font-size: 10px;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        @include('master.js')
        <script type="text/javascript">
            var trainer = "{{ Auth::user()->id }}";
            var url = "{{ url('/') }}";

            const openQr = () => {
                $('#qr_code_free').modal('show');
                createQr();
            }

            const createQr = () => {
                // var qrcode = new QRCode(document.getElementById('qrcode'), {
                //     text: "{{ url('/') }}/customer/scan/" + trainer,
                //     width: 150,
                //     height: 150,
                //     correctLevel: QRCode.CorrectLevel.H,
                // });
                $.ajax({
                    method: 'POST',
                    url: url + '/trainer/generate/qr/' + trainer,
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        console.log(data);
                        $('#qr_app').attr('src', 'https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl=' + url + '/customer/attendances/scan/' + data.token +'&chld=L|1&choe=UTF-8')
                        $('#token_app').html("Use this token on Customer Account on Attendances Page, Token: " + data.token);
                    }
                })
            }

        </script>
    </body>
</html>