@extends('trainer.layouts.app')
@section('content.mobile')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="dt-vertical-scroll" class="table" width="100%">
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Profile</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $data)
                                <tr>
                                    <td>{{ $data->first_name." ".$data->last_name }}</td>
                                    <td class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-md btn-primary rounded z-depth-0 border-0 m-0 p-2 text-capitalize" onClick="location.href='{{ url('/') }}/trainer/customers/details/{{ $data->id }}'">Profile</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
   $(document).ready(function () {
    $('#dt-vertical-scroll').dataTable({
        "paging": false,
        "fnInitComplete": function () {
        var myCustomScrollbar = document.querySelector('#dt-vertical-scroll_wrapper .dataTables_scrollBody');
        var ps = new PerfectScrollbar(myCustomScrollbar);
        },
        "scrollY": 450,
    });
    });
</script>
@endsection