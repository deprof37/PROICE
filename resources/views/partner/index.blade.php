@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Partner Arena</strong><span><a href="partner-create" class="btn btn-sm btn-primary float-right">Create New Partner</a></span></div>

                <div class="card-body">
                    <div class="row">
                    @if($partnerCount == 0)
                        <strong>No Partner avialable</strong>
                    @else
                        @foreach($partner as $mc)

                        <div class="col-md-4 col-sm-4">
                            <div class="card" style="width: 100%;">
                                <img src="/storage/partner_images/{{$mc->path}}" class="card-img-top">
                                <div class="card-body">
                                    <strong><h5 class="card-title" style="color: blue;">{{$mc->name}}</h5></strong>
                                    <p class="card-text">
                                        <br><br>
                                        <a href="/partner-show/{{$mc->id}}" class="btn btn-sm btn-primary">Edit Partner</a><a href="/partner-delete/{{$mc->id}}" class="btn btn-danger btn-sm float-right">Delete Partner</a>
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
