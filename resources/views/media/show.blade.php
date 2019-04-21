@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
	
      	<div class="card">
      		<div class="card-header bg-dark text-white"><strong>Edit Media Info</strong></div>
              <div class="card-body">
                  <form method="POST" action="{{route('media-update')."/$med->id"}}" id="media_form" enctype="multipart/form-data">
                    {{csrf_field()}}  {{ method_field('POST')}}

                  
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="{{$med->title}}" id="title" placeholder="Enter title" class="form-control">
                        @if ($errors->has('title'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('title') }}</strong>
                        	</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea name="descrip"  id="descrip" placeholder="Enter description" class="form-control">{{$med->description}}</textarea>
                        @if ($errors->has('descrip'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('descrip') }}</strong>
                        	</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Video Url</label>
                        <input type="text" name="url" value="{{$med->url}}" id="url" placeholder="Enter url" class="form-control">
                        @if ($errors->has('url'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('url') }}</strong>
                        	</span>
                        @endif
                      </div>

                      <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="photo" value="{{$med->path}}" id="photo" class="form-control">
                        @if ($errors->has('photo'))
                        	<span class="text-danger">
                        		<strong>{{ $errors->first('photo') }}</strong>
                        	</span>
                        @endif
                      </div>
                      <div class="form-group">
                          <input type="submit" name="save" id="save" value="Update Media" class="btn btn-success btn-md btn-block"/>
                      </div>
                  </form>
              </div>
              
            </div>
          </div>
        </div>
</div>

@endsection 

