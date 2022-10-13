@extends('admin.layouts.app')
@section('content')
    <div class="d-none d-lg-block">
        <div class="row">
            <div class="col-lg-4">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-lg-12 d-flex justify-content-between'>
                                <span style="font-size:14px; font-weight: 600">Customer</span>
                                <span class="badge front-color pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded" style="font-weight: 500; font-size: 12px;">
                                    Total
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <span style="font-size: 50px" id="total_customer"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <span style="font-size: 14px; font-weight: 600">Trainer</span>
                                <span class="badge front-color pt-1 pb-1 pr-2 pl-2 z-depth-0 rounded" style="font-weight: 500; font-size: 12px;">
                                    Total
                                </span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <span style="font-size: 50px" id="total_trainer"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content.mobile')
    <div class="row">
        <div class="col-12">
            <div class="card z-depth-0 bg-primary">
                <div class="card-body">
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ asset('image/body_black.jpeg') }}" style="width: 80px; height: 80px;" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 d-flex justify-content-center">
                            <span style="font-size: 20px;" class="text-white">Hi, {{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-12 d-flex justify-content-between align-items-center'>
                                <span style="font-size: 10px;">Customer</span>
                                <span style="font-size: 10px;" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">Total</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 30px;">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-12 d-flex justify-content-between align-items-center'>
                                <span style="font-size: 10px;">Trainer</span>
                                <span style="font-size: 10px;" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">Total</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 30px;">1</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-12 d-flex justify-content-between align-items-center'>
                                <span style="font-size: 10px;">Revenue</span>
                                <span style="font-size: 10px;" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">{{ date('M') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 30px;">13M</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 10px;">
                                    <span class='text-success'>
                                        <i class="fas fa-caret-up"></i>
                                        +15%
                                    </span>
                                    From Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class='col-12 d-flex justify-content-between align-items-center'>
                                <span style="font-size: 10px;">Revenue</span>
                                <span style="font-size: 10px;" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">{{ date('Y') }}</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 30px;">13M</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span style="font-size: 10px;">
                                    <span class='text-danger'>
                                        <i class="fas fa-caret-down"></i>
                                        -80%
                                    </span>
                                    From Last Month
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <canvas id="myCustomer" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 80px;">
        </div>
    </div>
@endsection


@section('javascript')
    <script type="text/javascript">
        $(document).ready(function () {
            initial();
        });

        const initial = () => {
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/admin/api/dashboard',
                success:function(data) {
                    $('#total_customer').html(data.customer_count);
                    $('#total_trainer').html(data.trainer_count);
                }
            });
        }

        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Revenue 2022',
                    data: [5, 7, 9, 6, 5, 7, 8, 13],
                    backgroundColor: [
                        // 'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        // 'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        // 'rgba(75, 192, 192, 1)',
                        // 'rgba(153, 102, 255, 1)',
                        // 'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const customer = document.getElementById('myCustomer');
        const myChartCustomer = new Chart(customer, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug'],
                datasets: [{
                    label: 'Customer 2022',
                    data: [10, 7, 6, 9, 8, 5, 6, 3],
                    backgroundColor: [
                        // 'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        // 'rgba(255, 206, 86, 0.2)',
                        // 'rgba(75, 192, 192, 0.2)',
                        // 'rgba(153, 102, 255, 0.2)',
                        // 'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        // 'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        // 'rgba(255, 206, 86, 1)',
                        // 'rgba(75, 192, 192, 1)',
                        // 'rgba(153, 102, 255, 1)',
                        // 'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection