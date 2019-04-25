@extends('layout.main')



@section('content')

<div class="container" style="margin-top: 110px;">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-title text-center" style="background: #58595b;">
                	<h1 class="md"><strong>M&nbsp;E&nbsp;D&nbsp;I&nbsp;A&nbsp; &nbsp;&nbsp;C&nbsp;E&nbsp;N&nbsp;T&nbsp;E&nbsp;R</strong></h1>
                </div>

                <div class="card-body">
                    <div class="row">
                    @if(count($media) == 0)
                        <strong>No Media avialable</strong>
                    @else
                        @foreach($media as $mc)

                        <div class="col-md-4">
                            <div class="card" style="width: 100%;">
                            	<iframe width="350" height="200" src="{{$mc->url}}" frameborder="0" allowfullscreen=""> </iframe>
                                {{--<img src="/storage/media_images/{{$mc->path}}" class="card-img-top">--}}
                                <div class="card-body">
                                    <strong><h5 class="card-title" style="color: #192e6d;">{{$mc->title}}</h5></strong>
                                    <p class="card-text">
                                        {{$mc->description}}                                
                                    </p>
                                    <hr style="background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0, 0, 20,0), rgba(0,0,0,0)); height: 10px; margin-top:0px; margin-bottom:7px">
                                    
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