@extends('trainer.layouts.app')
@section('content')
    <div class="d-none d-lg-block">
        <div class="row">
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <span style="font-weight: 600; font-size: 14px;" class="text-muted">Customers</span>
                                        <span class="badge front-color rounded z-depth-0 pt-1 pb-1 pr-2 pl-2" style="font-weight: 600; font-size: 12px;">
                                            Total
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="customers_count" style="font-size:50px; font-weight: 700;"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class='card-body z-depth-0'>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-between">
                                <span style="font-weight: 600; font-size: 14px;" class="text-muted">Sharing Income</span>
                                <span class="badge front-color rounded pt-1 pb-1 pr-2 pl-2 z-depth-0" style="font-weight: 600">
                                    {{ \Carbon\Carbon::now()->month }}
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <span style="font-weight: 600; font-size:50px;">{{ $salary->salary }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card z-depth-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12 d-flex justify-content-between">
                                        <span style="font-weight: 600; font-size: 14px;">Hours</span>
                                        <span class="badge front-color text-white z-depth-0 rounded pt-1 pb-1 pr-2 pl-2 rounded" style="font-weight: 600">
                                            Month
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span id="hours" style="font-weight: 600; font-size: 50px;">157</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content.mobile')
    <div class="d-block d-lg-none">
        <div class="row">
            <div class="col-12">
                <div class="card z-depth-0">
                    <div class="card-body pl-0 pr-0 z-depth-0">
                        <div class="row mt-4">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="{{ asset('image/body_black.jpeg') }}" style="width: 70px; height: 70px;" class="rounded-circle border">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-weight: 500">Hi, {{ Auth::user()->first_name." ".Auth::user()->last_name }}</span>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-12 d-flex justify-content-center">
                                <span style="font-size: 10px;" class='text-primary'>Lihat Profil</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;">
                                            Sharing Profit
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>@currency($salary->salary)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span style="font-size: 10px;">
                                            {{ \Carbon\Carbon::now()->format('M') }} Session
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center">
                                        <span>{{ $total_hours->total_hours }} Session</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 12px; font-weight: 600">Client</span>
                                    <button type="button" class="btn btn-md btn-primary rounded-circle z-depth-0 p-2 border-0" data-toggle="modal" data-target="#createCustomers">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($customers as $data)
                                                <tr>
                                                    <td style="font-size: 10px;">
                                                        @if($data->avatar != null)
                                                            <img src="{{ asset(url('/').'/avatar/'.$data->avatar) }}" style="width: 20px; height: 20px;" class="rounded-circle mr-2">
                                                        @else
                                                            <img src="{{ asset(url('/').'/image/body_black.jpeg') }}" style="width: 2 0px; height: 20px;" class="rounded-circle mr-2">
                                                        @endif
                                                        {{ $data->first_name }}
                                                    </td>
                                                    <td class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-md rounded btn-primary text-capitalize border-0 z-depth-0 p-2 m-0" onclick="location.href='{{ url('/') }}/trainer/customers/details/{{ $data->users_id }}'">
                                                            Profile
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px;">Lihat Semua</span>
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
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 12px; font-weight: 600">Attendances</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                @foreach($attendances as $data)
                                    <div class="col-6 mb-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 30px; font-weight: 700" class='text-primary'>{{ date("d", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 12px; font-weight: 600">{{ date("M", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 12px; font-weight: 600">{{ date("Y", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-12 d-flex justify-content-center">
                                                        <span style="font-size: 12px; font-weight: 600" class="badge badge-primary pt-1 pb-1 pr-2 pl-2 z-depth-0">{{ date("H:i", strtotime($data->updated_at)) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px; font-weight: 600">Lihat Semua</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4" style="margin-bottom: 100px;">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span style="font-size: 12px; font-weight: 600">Sharing Profit</span>
                                    <span style="font-size: 10px; font-weight: 600">{{ \Carbon\Carbon::now()->format('M') }}</span>
                                </div>
                            </div>
                            <div class="row mt-4">
                                @foreach($sharing_profit as $data)
                                    <div class="col-12 mb-1">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <span style="font-size: 10px;">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="row">
                                                            <div class="col-12 d-flex justify-content-end">
                                                                <span style="font-size: 10px;" class="text-success">+ @currency($data->nominal)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 d-flex justify-content-center">
                                    <span style="font-size: 10px;">Lihat Semua</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- modal create customers --}}
        <div class="modal fade" id="createCustomers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <!-- Change class .modal-sm to change the size of the modal -->
            <div class="modal-dialog modal-fluid modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary" style="min-height: 150px; border-bottom-right-radius: 60px;">
                        <div class="row">
                            <div class="col-12">
                                <span class="text-white" style="font-size: 20px;">Create</span><br />
                                <span class="text-white" style="font-size: 20px;">Customers</span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('trainer.create_customers') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form md-outline m-0">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control rounded" name="first_name" id="first_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form md-outline m-0">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control rounded" name="last_name" id="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form md-outline m-0">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control rounded" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="md-form md-outline m-0">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control rounded" name="password" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary rounded z-depth-0 border-0 text-capitalize">
                                        Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- endmodal --}}
    </div>
    <script type="text/javascript">
        var userID = "{{ Auth::user()->id }}";

        $(document).ready(function() {
            $('#headers').slick({
                'arrows': false,
            });

            $('#customer_role').slick({
                'arrows': false,
                'slidesToShow': 2,
            })

            $('#mobileView').addClass('d-none');

            const nFormatter = (num, digits) => {
                const lookup = [
                    { value: 1, symbol: ""},
                    { value: 1e3, symbol: "K"},
                    { value: 1e6, symbol: "M"},
                    { value: 1e9, symbol: "G"},
                ];
                const rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
                var item = lookup.slice().reverse().find(function(item) {
                    return num >= item.value;
                });
                return item ? (num / item.value).toFixed(digits).replace(rx, "$1") + " " + item.symbol : "0";
            }

            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: '/trainer/' + userID,
                success:function(data) {
                    variableCard(data.customer_count, data.customer);
                    $('#name').html(data.user.first_name + " " + data.user.last_name);
                    // $('#customers_count').append(data.customer_count);
                    $('#customer_list').html(data.customer);
                    $('#sallary').html(nFormatter(25000000, 1));
                    $('#incomeMobile').html(nFormatter(data.income, 1));
                }
            });
        });

        const variableCard = (customer_count, customer) => {
            var totalCustomer;

            customer_count > 0 ? totalCustomer == customer_count : totalCustomer == "0";
            console.log('totalCustomer');
            $('#customers_count').append(totalCustomer);
        }

    </script>
@endsection