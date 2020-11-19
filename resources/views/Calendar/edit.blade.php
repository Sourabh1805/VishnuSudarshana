@extends('layouts/sbadmin')
@section('content')

<div id='wrapper'>

    <div id='page-inner'>
    
      <ol class="breadcrumb mb-4">
      <h3> <li class="breadcrumb-item active">Add dates</li></h3>
                        </ol>
     

<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12">
<div class="panel panel-info">
        
        <div class="panel-body">
        <form method='POST' action="{{route('calendar.update',$Calendar['Calendar_id'])}}" enctype="multipart/form-date">
@method('PATCH')
{{csrf_field()}}

          

          <div class="form-group">
              <label>Date   </label>
              <input class="form-control" type="date" name='Calendar_date' value="{{$Calendar['Calendar_date']}}" readonly>
          </div>

          <div class="form-group">
              <label>Occasions </label>
          </div>

          <table class="table table-bordered"  width="100%" >
                <tr>
                    <th><label>Rahu kal   </label></th>
                    <th><input class="form-control" type="text" name='Rahu_Kal' value="{{$dinvishesh[0]->Rahu_Kal}}"></th>
                </tr>

                <tr>
                    <th><label>ketu kal   </label></th>
                    <th><input class="form-control" type="text" name='Ketu_kal' value="{{$dinvishesh[0]->Ketu_kal}}"></th>
                </tr>
          </table>

                
            <button type="submit" class="btn-primary btn-lg">Add </button>

                    </form>
            </div>



          <!-- /. ROW  -->

                  </div>
                      </div>

  </div>
            </div>
        </div>
          



@endsection
