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

          <div class="form-group">
              <label>Rashi </label>
          </div>

          <table class="table table-bordered"  width="100%" >
                <tr>
                    <th><label>Mesh   </label></th>
                    <th><input class="form-control" type="text" name='Mesh' value="{{$dinRashi[0]->Mesh}}" ></th>
                </tr>

                <tr>
                    <th><label>Vrushabh   </label></th>
                    <th><input class="form-control" type="text" name='Vrushabh' value="{{$dinRashi[0]->Vrushabh}}"  ></th>
                </tr>

                <tr>
                    <th><label>Mithun   </label></th>
                    <th><input class="form-control" type="text" name='Mithun' value="{{$dinRashi[0]->Mithun}}"  ></th>
                </tr>

                <tr>
                    <th><label>Kark   </label></th>
                    <th><input class="form-control" type="text" name='Kark' value="{{$dinRashi[0]->Kark}}"  ></th>
                </tr>

                <tr>
                    <th><label>Sinh   </label></th>
                    <th><input class="form-control" type="text" name='Sinh' value="{{$dinRashi[0]->Sinh}}"  ></th>
                </tr>

                <tr>
                    <th><label>Kanya   </label></th>
                    <th><input class="form-control" type="text" name='Kanya' value="{{$dinRashi[0]->Kanya}}"  ></th>
                </tr>

                <tr>
                    <th><label>Tula   </label></th>
                    <th><input class="form-control" type="text" name='Tula'  value="{{$dinRashi[0]->Tula}}" ></th>
                </tr>

                <tr>
                    <th><label>Vrushchik   </label></th>
                    <th><input class="form-control" type="text" name='Vrushchik' value="{{$dinRashi[0]->Vrushchik}}"  ></th>
                </tr>

                <tr>
                    <th><label>Dhanu   </label></th>
                    <th><input class="form-control" type="text" name='Dhanu' value="{{$dinRashi[0]->Dhanu}}"  ></th>
                </tr>

                <tr>
                    <th><label>Kumbha   </label></th>
                    <th><input class="form-control" type="text" name='Kumbha' value="{{$dinRashi[0]->Kumbha}}"  ></th>
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
