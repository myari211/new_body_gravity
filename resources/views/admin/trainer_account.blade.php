@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Trainer</th>
                        <th>Session</th>
                        <th>Customers</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong>Trainer Example</strong></td>
                        <td>400</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="{{ asset('image/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Sophia Wilkerson">
                              <img src="{{ asset('image/img/avatars/6.png') }}" alt="Avatar" class="rounded-circle">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Christina Parker">
                              <img src="{{ asset('image/img/avatars/7.png') }}" alt="Avatar" class="rounded-circle">
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection