@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
	
      	<div class="card">
      		<div class="card-header"><strong>Create New Partner</strong></div>
              <div class="card-body">
                  <form method="POST" action="{{route('partner-save')}}" id="partner_form" enctype="multipart/form-data">
                    {{csrf_field()}}  {{ method_field('POST')}}

                  
                      <div class="form-group">
                        <label>Partner Name</label>
                        <input type="text" name="partner_name" value="{{old('title')}}" id="partner_name" placeholder="Enter partner name" class="form-control">
                        @if ($errors->has('partner_name'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('partner_name') }}</strong>
                        	</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="photo" value="{{old('photo')}}" id="photo" class="form-control">
                        @if ($errors->has('photo'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('photo') }}</strong>
                        	</span>
                        @endif
                      </div>
                      <div class="form-group">
                          <input type="submit" name="save" id="save" value="Save Partner" class="btn btn-primary btn-md btn-block"/>
                      </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
</div>

@endsection 

