@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Sales</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('Y') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($income->income)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Receieveable</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('Y') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($receivable)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Gross Profit</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('Y') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($gross)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-betweeen">
                        <span style="font-size:10px;">Sharing Profit</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('Y') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency( $sharing)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Net Profit</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('Y') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($net)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Session In Bank</span>
                        <span style="font-size: 10px;" class="badge badge-primary p-1 rounded z-depth-0">Total</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">{{ $sessionInBank->bank }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Sales</span>
                        <span style="font-size: 10px;" class="badge text-capitalize badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('M') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($incomeMonth->income)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Receieveable</span>
                        <span style="font-size: 10px;" class="badge text-capitalize badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('M') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($receivableMonth)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Gross Profit</span>
                        <span style="font-size: 10px;" class="badge text-capitalize badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('M') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($grossMonth)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Sharing Profit</span>
                        <span style="font-size: 10px;" class="badge text-capitalize badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('M') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($sharingMonth)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between">
                        <span style="font-size:10px;">Net Profit</span>
                        <span style="font-size: 10px;" class="badge text-capitalize badge-primary p-1 rounded z-depth-0">{{ \Carbon\Carbon::now()->format('M') }}</span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <span style="font-size: 25px; font-weight: 600">@currency($netMonth)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
        <div class="card">
            <div class="row row-bordered g-0">
                <div class="col-12">
                    <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                    <div id="totalRevenueChartAnnualy" class="px-2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    showRevenue();
</script>
@endsection