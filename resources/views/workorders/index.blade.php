@extends('layouts.app')

@section('content')

<script src="//unpkg.com/sticky-table-headers"></script>
<div class="container-fluid" id="header">
    <div class="row">
        <div class="col-md-1" style="position: fixed;margin-top:50px">
            <div class="alert alert-info" role="alert" style="padding: 3px;"><small><? date_default_timezone_set('America/Phoenix'); echo date("m/d/y h:i:sa"); ?></small></div>
            {{ Form::open(['method' => 'POST', 'url' => '/run-script'] )}}
               <input type="hidden" name="runscript" value="1"/>
               {{ Form::submit('RUN SCRIPT',['class' => 'btn btn-outline-success btn-sm btn-block']) }}
            {{ Form::close() }}
         <button type="button" class="btn btn-outline-success btn-sm btn-block" onClick="vbscript:Hello()">CRTD</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">REL</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECO</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">CUSTOM</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">SHIFT REPORT</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">TECH - W/C</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">JOHN DOE</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">ASSIGN</button>
         <button type="button" class="btn btn-outline-primary btn-sm btn-block">PRINT</button>

        </div>
        <div class="col-10 offset-md-1" style="margin-top:50px;">
          <form id="frm-example" action="#" method="POST">
          <table class="table table-sm data-table display nowrap" cellspacing="0" style="width:100%" id="data-table" data-order='[[ 1, "desc" ]]' data-page-length='100'>
           <thead class="thead-dark"><th></th><th>Order Number</th><th>Plant</th><th>Status</th><th>Type</th><th>Description</th>{{-- <th>Maint Activity</th> --}}<th>Location</th><th>Equipment Desc.</th><th>Work Center</th>{{-- <th>Priority</th> --}}<th>Start Date</th><th>Finish Date</th></thead>




       </table>
        </form>
        {{-- <hr>
        <p><button>Submit</button></p> --}}
       </div>
       <div class="col-md-1 offset-md-11" style="position: fixed;margin-top:50px;">
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

<script type="text/javascript">
  function doPopUp(){
      alert('Script Has Been Run');
    }
</script>
<script>
   $(document).ready( function () {
   var oTable = $('.data-table').DataTable({
           processing: true,
           serverSide: true,
           select: {
                 style: 'multi'
            },
          order: [[1, 'asc']],
           defaultContent: "",
          deferRender:    true,
          scrollY:        600,
          scrollCollapse: true,
          scroller:       true,
          scrollX: "100%",
          initComplete: function () {
              this.api().row( 600 ).scrollTo();
          },
          ajax: "{{ url('get-workorder-data') }}",

        columns: [
            { data:'id' },
            { data:'id' },
            { data: 'plant' },
            { data: 'status'},
            { data: 'order_type'},
            { data: 'order_description' },
            // { data: 'maint_activity_type' },
            { data: 'location' },
            { data: 'equipment_desc' },
            { data: 'work_center' },
            // { data: 'priority' },
            { data: 'created_at' },
            { data: 'updated_at' },
        ],
        columnDefs: [{
                targets: 0,
                searchable: false,
                checkboxes: {
                   selectRow: true
                }
              }]

    });

});
  //  $('table').stickyTableHeaders({
  //   fixedOffset: $('#header')
  // });
</script>

@endsection
