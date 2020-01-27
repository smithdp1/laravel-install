@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
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
        <div class="col-md-10">

       <table class="table table-hover table-sm">
           <thead><th>Type</th><th>Order Number</th><th>Description</th><th>Maint Activity</th><th>Location</th><th>Equipment Desc.</th><th>Work Center</th><th>Priority</th><th>Start Date</th><th>Finish Date</th></thead>
           <tbody>
               <tr></tr>
           </tbody>
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
@endsection
