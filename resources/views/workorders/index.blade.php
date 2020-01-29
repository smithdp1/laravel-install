@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1">
            <div class="alert alert-info" role="alert" style="padding: 3px;"><small><? date_default_timezone_set('America/Phoenix'); echo date("m/d/y h:i:sa"); ?></small></div>
         <button type="button" class="btn btn-outline-success btn-sm btn-block">CRTD</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">REL</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECO</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CUSTOM</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">SHIFT REPORT</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECH - W/C</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">JOHN DOE</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">ASSIGN</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">PRINT</button>

        </div>
        <div class="col-md-10">
          <table class="table table-hover table-sm data-table" id="data-table" data-order='[[ 0, "desc" ]]' data-page-length='25'>
           <thead><th>Order Number</th><th>Plant</th><th>Status</th><th>Type</th><th>Description</th><th>Maint Activity</th><th>Location</th><th>Equipment Desc.</th><th>Work Center</th><th>Priority</th><th>Start Date</th><th>Finish Date</th></thead>


       </table>

       </div>
       <div class="col-md-1">
            <div class="alert alert-info" role="alert" style="padding: 3px;"><small><? date_default_timezone_set('America/Phoenix'); echo date("m/d/y h:i:sa"); ?></small></div>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CRTD</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">REL</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECO</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CUSTOM</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">SHIFT REPORT</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECH - W/C</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">JOHN DOE</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">ASSIGN</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">PRINT</button>

        </div>
    </div>
</div>

<script>
   $(document).ready( function () {
    $('.data-table').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('get-workorder-data') }}",
           defaultContent: "",
        columns: [
            { data:'id' },
            { data: 'plant' },
            { data: 'status'},
            { data: 'order_type'},
            { data: 'order_description' },
            { data: 'maint_activity_type' },
            { data: 'location' },
            { data: 'equipment_desc' },
            { data: 'work_center' },
            { data: 'priority' },
            { data: 'created_at' },
            { data: 'updated_at' },
        ]
    });
});
</script>
@endsection
