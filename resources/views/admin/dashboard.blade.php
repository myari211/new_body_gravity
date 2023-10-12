@extends('admin.layouts.app')
@section('content')
    {{-- <div class="d-none d-lg-block">
        <div class="pl-3 pr-3">
            <div class="row">
                <div class="col-12">
                    <span style="font-size: 12px; font-weight: 600">Dashboard</span>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="card z-depth-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span style="font-size: 12px; font-weight: 600">Customers</span>
                                            <span class="badge p-2 rounded z-depth-0 unique-color">
                                                <i class="fas fa-users"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span id="total_customer" style="font-size: 30px; font-weight: 600"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card z-depth-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span style="font-size: 12px; font-weight: 600">Trainer</span>
                                            <span class="badge p-2 rounded z-depth-0 unique-color">
                                                <i class="fas fa-user-tie"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span id="total_trainer" style="font-size: 30px; font-weight: 600"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="card z-depth-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span style="font-size: 12px; font-weight: 600">Hours</span>
                                            <span class="badge p-2 rounded z-depth-0 unique-color">
                                                <i class="fas fa-clock"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span id="total_hours" style="font-size: 30px; font-weight: 600"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card z-depth-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <span style="font-size: 12px; font-weight: 600">Revenue</span>
                                            <span class="badge p-2 rounded z-depth-0 unique-color">
                                                <i class="fas fa-money-bill"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span id="revenue" style="font-size: 30px; font-weight: 600"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 h-100">
                    <div class="card z-depth-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <span style="font-size: 12px; font-weight: 600">Revenue</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <canvas id="myChart" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <span style="font-size: 12px; font-weight: 600">Trainer</span>
                </div>
            </div>
            <div class="row mt-3">
                @foreach($trainer as $data)
                    <div class="col-3 mb-2">
                        <div class="card z-depth-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="{{ asset('image/body_gravity_black.png') }}" style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-weight: 600">{{ $data->first_name." ".$data->last_name }}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <span style="font-size: 12px; font-weight: 600">{{ $data->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
        {{-- <div class="row">
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
        </div> --}}
    {{-- </div> --}}
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
          <!-- Layout container -->
          <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
              <!-- Content -->
  
              <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                  <div class="col-lg-8 mb-4 order-0">
                    <div class="card">
                      <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                          <div class="card-body">
                            <h5 class="card-title text-primary">Hi, {{ Auth::user()->first_name }}! 🎉</h5>
                            <p class="mb-4">
                              We have done <span class="fw-bold">72%</span> revenue.
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                          <div class="card-body pb-0 px-0 px-md-4">
                            <img
                              src="{{ asset('image/img/illustrations/man-with-laptop-light.png') }}"
                              height="140"
                              alt="View Badge User"
                              data-app-dark-img="illustrations/man-with-laptop-dark.png"
                              data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 order-1">
                    <div class="row">
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="{{ asset('image/img/icons/unicons/chart-success.png') }}"
                                  alt="chart success"
                                  class="rounded"
                                />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt3"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Revenue ({{ \Carbon\Carbon::now()->format('M') }})</span>
                            <h5 class="card-title mb-2">@currency($revenue->revenue)</h5>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small> --}}
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img
                                  src="{{ asset('image/img/icons/unicons/wallet-info.png') }}"
                                  alt="Credit Card"
                                  class="rounded"
                                />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt6"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit ({{ \Carbon\Carbon::now()->format('M') }})</span>
                            <h5 class="card-title text-nowrap mb-1">@currency($profit->profit)</h5>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Total Revenue -->
                  <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                    <div class="card">
                      <div class="row row-bordered g-0">
                        <div class="col-md-8">
                          <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
                          <div id="totalRevenueChart" class="px-2"></div>
                        </div>
                        <div class="col-md-4">
                          <div class="card-body">
                            <div class="text-center">
                        
                            </div>
                          </div>
                          <div id="growthChart"></div>
                          <div class="text-center fw-semibold pt-3 mb-2">100% Company Growth</div>
  
                          <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                              <div class="me-2">
                                <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>2023</small>
                                <h6 class="mb-0">200M</h6>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="me-2">
                                <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>2022</small>
                                <h6 class="mb-0">100M</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Total Revenue -->
                  <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
                    <div class="row">
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt4"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="d-block mb-1 fw-semibold">Revenue ({{ \Carbon\Carbon::now()->format('D') }})</span>
                            <h5 class="card-title text-nowrap mb-2">@currency($revenue_day->revenue)</h5>
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt1"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Profit ({{ \Carbon\Carbon::now()->format('D') }})</span>
                            <h5 class="card-title mb-2">@currency($profit_day->profit)</h5>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +100%</small> --}}
                          </div>
                        </div>
                      </div>
                      <!-- </div>
      <div class="row"> -->
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt1"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Income</span>
                            <h5 class="card-title mb-2">@currency($profit_day->profit)</h5>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +100%</small> --}}
                          </div>
                        </div>
                      </div>
                      <div class="col-6 mb-4">
                        <div class="card">
                          <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                              <div class="avatar flex-shrink-0">
                                <img src="{{ asset('image/img/icons/unicons/cc-primary.png') }}" alt="Credit Card" class="rounded" />
                              </div>
                              <div class="dropdown">
                                <button
                                  class="btn p-0"
                                  type="button"
                                  id="cardOpt1"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                  <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                </div>
                              </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Bank Session</span>
                            <h5 class="card-title mb-2">@currency($profit_day->profit)</h5>
                            {{-- <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +100%</small> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <!-- Order Statistics -->
                  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
                    <div class="card h-100">
                      <div class="card-header d-flex align-items-center justify-content-between pb-0">
                          <div class="card-title mb-0">
                              <h5 class="m-0 me-2">Order Statistics</h5>
                              <small class="text-muted">100k total session</small>
                          </div>
                          <div class="dropdown">
                              <button
                                  class="btn p-0"
                                  type="button"
                                  id="orederStatistics"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                              >
                                  <i class="bx bx-dots-vertical-rounded"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                                  <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Share</a>
                              </div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                              <div class="d-flex flex-column align-items-center gap-1">
                                  <h2 class="mb-2">400 Hours</h2>
                                  <span>Total Session</span>
                              </div>
                              <div id="orderStatisticsChart"></div>
                          </div>
                          <ul class="p-0 m-0">
                              <li class="d-flex mb-4 pb-1">
                                  <div class="avatar flex-shrink-0 me-3">
                                      <span class="avatar-initial rounded bg-label-primary">
                                          <i class="bx bx-mobile-alt"></i>
                                      </span>
                                  </div>
                                  <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                      <div class="me-2">
                                          <h6 class="mb-0">Trainer Example</h6>
                                          <small class="text-muted"></small>
                                      </div>
                                      <div class="user-progress">
                                          <small class="fw-semibold">400</small>
                                      </div>
                                  </div>
                              </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Order Statistics -->
  
                  <!-- Expense Overview -->
                  <div class="col-md-6 col-lg-4 order-1 mb-4">
                    <div class="card h-100">
                      <div class="card-body px-0">
                        <div class="tab-content p-0">
                          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                              <div class="avatar flex-shrink-0 me-3">
                                <img src="{{ asset('image/img/icons/unicons/wallet.png') }}" alt="User" />
                              </div>
                              <div>
                                <small class="text-muted d-block">Profit</small>
                                <div class="d-flex align-items-center">
                                  <h6 class="mb-0 me-1">90M</h6>
                                  <small class="text-success fw-semibold">
                                    <i class="bx bx-chevron-up"></i>
                                    42.9%
                                  </small>
                                </div>
                              </div>
                            </div>
                            <div id="incomeChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--/ Expense Overview -->
  
                  <!-- Transactions -->
                  <div class="col-md-6 col-lg-4 order-2 mb-4">
                    <div class="card h-100">
                      <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Attendance</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="transactionID"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                          >
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="p-0 m-0">
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                          <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                              <img src="{{ asset('image/img/icons/unicons/paypal.png') }}" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                              <div class="me-2">
                                <small class="text-muted d-block mb-1">Customer Example</small>
                                <h6 class="mb-0">14/12/2023</h6>
                              </div>
                              <div class="user-progress d-flex align-items-center gap-1">
                                <span class="text-muted">Rp</span>
                                <h6 class="mb-0">+250K</h6>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Transactions -->
                </div>
              </div>
  
              <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
      </div>
      <!-- / Layout wrapper -->
@endsection
{{-- @section('content.mobile')
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
@endsection --}}


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
                    $('#total_hours').html(data.total_hours);
                    $('#revenue').html(nFormatter(data.total_revenue, 1));
                }
            });
        }

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