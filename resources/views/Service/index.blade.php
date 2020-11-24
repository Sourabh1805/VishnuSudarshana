@extends('layouts/sbadmin')
@section('content')


<div class="col-md-8">
<h1>Services</h1>
</div>

<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
                            <tr>
                              <th>Sr no</th>
                              <th>Name</th>
                              <th>Description</th>
                              <th>Prize</th>
                              
                              <th>Action</th>
                            </tr>
</thead>  
<?php 
    $sr_no = 1;
?>
                        @foreach($varService as $row)
                        <tr>
                        <td>{{$sr_no++}}</td>
                        <td>{{$row['Service_name']}}</td>
                        <td>{{$row['Service_description']}}</td>
                        <td>{{$row['Service_prize']}}</td>
                        
                         <td>
                         <a class="btn btn-info" href="{{ route('service.edit',$row['Service_id']) }}">Edit</a>
                        @if($row['Service_status']== 0)
                        <a class="btn btn-primary" href="{{ route('service.show',$row['Service_id']) }}">Activate</a>
                            
                        @else
                        <a class="btn btn-danger" href="{{ route('service.show',$row['Service_id']) }}">Deactivate</a>
                        @endif
                        </td>
                        </tr>
                        @endforeach
                        </table>
               
                <br>
                <br>
                <a href="{{url('service/create')}}" class="btn-primary btn-lg"> Add Date </a>

            </div>
      


@endsection
