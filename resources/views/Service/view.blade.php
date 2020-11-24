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
            
          <form method='POST' action="{{route('service.update',$Service['Service_id'])}}" enctype="multipart/form-data">
@method('PATCH')
{{csrf_field()}}
          

          <div class="form-group">
              <label>Name</label>
              <input class="form-control" type="text" name='Service_name' value="{{$Service['Service_name']}}" required>
          </div>


          <div class="form-group">
              <label>Description</label>
              <input class="form-control" type="text" name='Service_description'  value="{{$Service['Service_description']}}" required>
          </div>


          <div class="form-group">
              <label>Price   </label>
              <input class="form-control" type="number" name='Service_prize'  value="{{$Service['Service_prize']}}" required>
          </div>


          <img src="{{asset('images/'. $Service['Service_image1'])}}">
          <div class="form-group">
              <label>Change Image 1</label>
              <input class="form-control" type="file" name='Service_image1'  accept="image/*" >
          </div>

          <img src="{{asset('images/'. $Service['Service_image2'])}}">
          <div class="form-group">
              <label>Change Image 2</label>
              <input class="form-control" type="file" name='Service_image2' accept="image/*" >
          </div>

          <img src="{{asset('images/'. $Service['Service_image3'])}}">
          <div class="form-group">
              <label>Change Image 3</label>
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
