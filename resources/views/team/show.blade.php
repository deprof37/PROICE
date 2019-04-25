@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
	
      	<div class="card">
          <div class="card-header"><strong>Edit Team Member Info</strong></div>
              <div class="card-body">
                  <form method="POST" action="{{route('team-update')."/$tm->id"}}" id="partner_form" enctype="multipart/form-data">
                    {{csrf_field()}}  {{ method_field('POST')}}

                  
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="first_name" value="{{$tm->first_name}}" id="first_name" placeholder="Enter first name" class="form-control">
                        @if ($errors->has('first_name'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('first_name') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="last_name" value="{{$tm->last_name}}" id="last_name" placeholder="Enter last name" class="form-control">
                        @if ($errors->has('last_name'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('last_name') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Position/Designation</label>
                        <input type="text" name="position" value="{{$tm->position}}" id="position" placeholder="Enter position" class="form-control">
                        @if ($errors->has('position'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('position') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Facebook Link</label>
                        <input type="text" name="fb_link" value="{{$tm->fb_link}}" id="fb_link" placeholder="Enter facebook link" class="form-control">
                        @if ($errors->has('fb_link'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('fb_link') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" name="tw_link" value="{{$tm->tw_link}}" id="tw_link" placeholder="Enter twitter link" class="form-control">
                        @if ($errors->has('tw_link'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('tw_link') }}</strong>
                          </span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="photo" value="{{$tm->path}}" id="photo" class="form-control">
                        @if ($errors->has('photo'))
                          <span class="text-danger">
                            <strong>{{ $errors->first('photo') }}</strong>
                          </span>
                        @endif
                      </div>
                      <div class="form-group">
                          <input type="submit" name="save" id="save" value="Update Team" class="btn btn-success btn-md btn-block"/>
                      </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
</div>

@endsection 

