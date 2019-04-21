@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
	
      	<div class="card">
      		<div class="card-header bg-dark text-white"><strong>Edit Partner Info</strong></div>
              <div class="card-body">
                  <form method="POST" action="{{route('partner-update')."/$part->id"}}" id="partner_form" enctype="multipart/form-data">
                    {{csrf_field()}}  {{ method_field('POST')}}

                  
                      <div class="form-group">
                        <label>Partner Name</label>
                        <input type="text" name="partner_name" value="{{$part->name}}" id="partner_name" placeholder="Enter partner name" class="form-control">
                        @if ($errors->has('partner_name'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('partner_name') }}</strong>
                        	</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="photo" value="{{$part->path}}" id="photo" class="form-control">
                        @if ($errors->has('photo'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('photo') }}</strong>
                        	</span>
                        @endif
                      </div>
                      <div class="form-group">
                          <input type="submit" name="save" id="save" value="Update partner" class="btn btn-success btn-md btn-block"/>
                      </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
</div>

@endsection 

