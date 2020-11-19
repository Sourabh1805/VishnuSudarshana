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
                              <th>Din Vishesh</th>
                              <th>Din Rashi</th>
                              <th>Action</th>
                            </tr>
</thead>  
                        @foreach($calendar as $row)
                        <tr>
                        <td>{{$row->Calendar_date}}</td>
                        <?php 
                            $dinVishesh = json_decode($row->Calendar_dinVishesh);
                        ?>
                        
                        <td>{{$dinVishesh[0]->Rahu_Kal}}</td>
                        

                        <td>{{$row->Calendar_dinRashi}}</td>
                         <td>
                         <a class="btn btn-primary" href="{{ route('calendar.edit',$row->Calendar_id) }}">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                        </table>
               
                <br>
                <br>
                <a href="{{url('calendar/create')}}" class="btn-primary btn-lg"> Add Date </a>

            </div>
      


@endsection
