@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Media Center</strong><span><a href="media-create" class="btn btn-sm btn-primary float-right">Create New Media</a></span></div>

                <div class="card-body">
                    <div class="row">
                    @if($mediaCount == 0)
                        <strong>No Media avialable</strong>
                    @else
                        @foreach($media as $mc)

                        <div class="col-md-4 col-sm-4">
                            <div class="card" style="width: 100%;">
                                {{--<img src="/storage/media_images/{{$mc->path}}" class="card-img-top">--}}
                                <iframe width="335" height="200" src="{{$mc->url}}" frameborder="0" allowfullscreen=""> </iframe>
                                <div class="card-body">
                                    <strong><h5 class="card-title" style="color: blue;">{{$mc->title}}</h5></strong>
                                    <p class="card-text">
                                        {{$mc->description}}
                                        
                                        <br><br>
                                        <a href="/media-show/{{$mc->id}}" class="btn btn-sm btn-primary">Edit Media</a><a href="/media-delete/{{$mc->id}}" class="btn btn-danger btn-sm float-right">Delete Media</a>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
