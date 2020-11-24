@extends('layouts/sbadmin')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Slot</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif



{!! Form::open(array('route' => 'slots.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Date:</strong>
             <input class="form-control" type="date"   name='Slot_date' required>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Available </strong>
    <select class="btn-success" id="Status" name="Slot_is_available" onchange="check_result(this.value)">
    <option value="YES">Yes</option>
    <option value="NO">No</option>
           
        </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Appointment</strong>
              <input class="form-control" type="number"  id="Slot_appointment_number" name='Slot_appointment_number' required>
    </div>
    </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}


<script>

function check_result(id)
  {
    //alert(id);
    if(id=="YES")
    {
      $('#Slot_appointment_number').show();
    $("[name='Slot_appointment_number']").attr("required", true);
    $("[name='Slot_appointment_number']").prop("required", true);
   


    }
    else
    {
      $('#Slot_appointment_number').hide();
    $("[name='Slot_appointment_number']").attr("required", false);
    $("[name='Slot_appointment_number']").prop("required", false);
    }
  }


</script>



@endsection