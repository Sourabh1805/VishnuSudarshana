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
            <form role="form" method='POST' action='{{action('Web\CalendarController@store')}}'>
          {{csrf_field()}}

          

          <div class="form-group">
              <label>Date   </label>
              <input class="form-control" type="date" name='Date' required>
          </div>

          <div class="form-group">
              <label>Occasions </label>
          </div>

          <table class="table table-bordered"  width="100%" >
                <tr>
                    <th><label>Rahu kal   </label></th>
                    <th><input class="form-control" type="text" name='Rahu_Kal' ></th>
                </tr>

                <tr>
                    <th><label>ketu kal   </label></th>
                    <th><input class="form-control" type="text" name='Ketu_kal' ></th>
                </tr>
          </table>

          <div class="form-group">
              <label>Rashi </label>
          </div>

          <table class="table table-bordered"  width="100%" >
                <tr>
                    <th><label>Mesh   </label></th>
                    <th><input class="form-control" type="text" name='Mesh' ></th>
                </tr>

                <tr>
                    <th><label>Vrushabh   </label></th>
                    <th><input class="form-control" type="text" name='Vrushabh' ></th>
                </tr>

                <tr>
                    <th><label>Mithun   </label></th>
                    <th><input class="form-control" type="text" name='Mithun' ></th>
                </tr>

                <tr>
                    <th><label>Kark   </label></th>
                    <th><input class="form-control" type="text" name='Kark' ></th>
                </tr>

                <tr>
                    <th><label>Sinh   </label></th>
                    <th><input class="form-control" type="text" name='Sinh' ></th>
                </tr>

                <tr>
                    <th><label>Kanya   </label></th>
                    <th><input class="form-control" type="text" name='Kanya' ></th>
                </tr>

                <tr>
                    <th><label>Tula   </label></th>
                    <th><input class="form-control" type="text" name='Tula' ></th>
                </tr>

                <tr>
                    <th><label>Vrushchik   </label></th>
                    <th><input class="form-control" type="text" name='Vrushchik' ></th>
                </tr>

                <tr>
                    <th><label>Dhanu   </label></th>
                    <th><input class="form-control" type="text" name='Dhanu' ></th>
                </tr>
                <tr>
                    <th><label>Makar   </label></th>
                    <th><input class="form-control" type="text" name='Makar' ></th>
                </tr>

                <tr>
                    <th><label>Kumbha   </label></th>
                    <th><input class="form-control" type="text" name='Kumbha' ></th>
                </tr>

                <tr>
                    <th><label>Meen   </label></th>
                    <th><input class="form-control" type="text" name='Meen' ></th>
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
