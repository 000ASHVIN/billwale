@extends('admin.app')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Inquiry List</h3>
            </div>
            <div class="col-12">
                <div class="float-right">
                    <a href="/admin/inquiries/export" class="btn btn-primary">Export</a>
                </div>
            </div>
            <div class="col-12">
                <table class="table" id="inquiry_table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Company</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Business</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">State</th>
                            <th class="text-center">City</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    
  var table = $('#inquiry_table').DataTable({
        processing: true,
        serverSide: true,
        "ordering": false,
        ajax: "{{ route('admin.inquiries.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'company', name: 'company'},
            {data: 'name', name: 'name'},
            {data: 'business', name: 'business'},
            {data: 'email', name: 'email'},
            {data: 'phone', name: 'phone'},
            {data: 'state', name: 'state'},
            {data: 'city', name: 'city'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
</script>
@endpush