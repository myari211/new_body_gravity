@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead class="table-light">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>PARQ</th>
                        <th>Session Left</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($user as $data)
                      <tr>
                        <td>{{ $data->first_name." ".$data->last_name }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->phone == NULL ? "-" : $data->phone }}</td>
                        <td>
                          @if($data->q1 == null)
                            <button type="button" class="btn btn-danger text-capitalize z-depth-0 p-1">
                              Undone
                            </button>
                          @else
                            <button type="button" class="btn btn-success text-capitalize z-depth-0 p-1">
                              Done
                            </button>
                          @endif
                        </td>
                        <td>

                        </td>
                      </tr>
                      @endforeach
                      {{-- <tr onclick="openTab();">
                        <td><strong>Customer Example</strong></td>
                        <td>customer@body-gravity.com</td>
                        <td>+62 812 7231 7198</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="{{ asset('image/img/avatars/5.png') }}" alt="Avatar" class="rounded-circle">
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">8 Left</span></td>
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
                      </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">

    function openTab() {
        location.href="{{ url('/') }}/admin/customer/package";
    }

</script>
@endsection