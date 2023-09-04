<html>
    <head>
        @include('master.css')
        <style type="text/css">
            html, body{
                background-color: #F5F6FF;
            }
        </style>
    </head>
    <body>
        @include('sweetalert::alert')
        <div class="d-block d-lg-none">
            <nav class="navbar navbar-expand fixed-bottom bg-white">
                <ul class="navbar-nav nav-justified w-100">
                    <li class="nav-item active">
                        <a href="{{ url('/') }}/customer/dashboard/{{ Auth::user()->id }}" class="nav-link">
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
                        <a href="{{ url('/') }}/customer/attendances/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class="col-12">
                                    <i class="far fa-calendar-alt" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Attendances</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/') }}/customer/package/{{ Auth::user()->id }}" class="nav-link">
                            <div class="row">
                                <div class='col-12'>
                                    <i class="fas fa-clipboard" style="font-size: 25px;"></i>
                                </div>
                            </div>
                            <div class="row mt-1">
                                <div class="col-12">
                                    <span style="font-size: 10px;">Package</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href='{{ url('/') }}/customer/profile/{{ Auth::user()->id }}' class="nav-link">
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
            <div class="modal fade" id="modalCanvas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('content')


        <script type="text/javascript">
            const qrcode = window.qrcode;
            const video = document.createElement('video');
            const canvasElement = document.getElementById("qr-canvas");
            const canvas = canvasElement.getContext("2d");

            const qrResult = document.getElementById("qr-result");
            const outputData = document.getElementById('outputData');
            const btnScanQR = document.getElementById('btnScanQr');

            let scanning = false;

            qr.callback = (res) => {
                if (res) {
                    outputData.innerText = res;
                    scanning = false;

                    video.srcObject.getTracks().forEach(track => {
                    track.stop();
                });
                qrResult.hidden = false;
                btnScanQR.hidden = false;
                canvasElement.hidden = true;
                }
            };

            btnScanQR.onclick = () => {
                navigator.mediaDevices
                .getUserMedia({ video: { facingMode: "environment" } })
                .then(function(stream) {
                    scanning = true;
                    qrResult.hidden = true;
                    btnScanQR.hidden = true;
                    canvasElement.hidden = false;
                    video.setAttribute("playsinline", true); // required to tell iOS safari we don't want fullscreen
                    video.srcObject = stream;
                    video.play();
                    modalCanvas();
                    tick();
                    scan();
                });
            };

            function modalCanvas() {
                $('#modalCanvas').modal('show');
            }

            function tick() {
                canvasElement.height = video.videoHeight;
                canvasElement.width = video.videoWidth;
                canvas.drawImage(video, 0, 0, canvasElement.width, canvasElement.height);

                scanning && requestAnimationFrame(tick);
            }

            function scan() {
                try {
                    qrcode.decode();
                } catch (e) {
                    setTimeout(scan, 300);
                }
            }
        </script>
        @include('master.js')
    </body>
</html>