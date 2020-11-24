@extends('layouts/sbadmin')
@section('content')


<div class="col-md-8">
<h1>Occassions and Dates List </h1>
</div>

<div class="col-md-12">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<thead>
                            <tr>
                              <th>Date</th>
                              <th>Available</th>
                              <th>number</th>
                              <th>Action</th>
                            </tr>
</thead>  
                        @foreach($slots as $row)
                        <tr>
                        <td>{{$row->Slot_date}}</td>
                        
                        
                        <td>{{$row->Slot_is_available}}</td>
                        

                        
                        <td>{{$row->Slot_appointment_number}}</td>
                        
                         <td>
                         <a class="btn btn-primary" href="{{ route('slots.edit',$row->Slot_id) }}">Delete</a>
                        </td>
                        </tr>
                        @endforeach
                        </table>
               
                <br>
                <br>
                <a href="{{url('slots/create')}}" class="btn-primary btn-lg"> Add Date </a>

            </div>
      


@endsection
