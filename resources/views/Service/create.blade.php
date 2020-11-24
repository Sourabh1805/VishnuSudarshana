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
            <form role="form" method='POST' action='{{action('Web\ServiceConteroller@store')}}' enctype="multipart/form-data">
          {{csrf_field()}}

          

          <div class="form-group">
              <label>Name</label>
              <input class="form-control" type="text" name='Service_name' required>
          </div>


          <div class="form-group">
              <label>Description</label>
              <input class="form-control" type="text" name='Service_description' required>
          </div>


          <div class="form-group">
              <label>Price   </label>
              <input class="form-control" type="number" name='Service_prize' required>
          </div>



          <div class="form-group">
              <label>Image 1   </label>
              <input class="form-control" type="file" name='Service_image1' required accept="image/*" >
          </div>


          <div class="form-group">
              <label>Image 2   </label>
              <input class="form-control" type="file" name='Service_image2' accept="image/*" >
          </div>


          <div class="form-group">
              <label>Image 3   </label>
              <input class="form-control" type="file" name='Service_image3' accept="image/*" >
          </div>

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
