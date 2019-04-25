@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><strong>Team Arena</strong><span><a href="team-create" class="btn btn-sm btn-primary float-right">Create New Member</a></span></div>

                <div class="card-body">
                    <div class="row">
                    @if($teamCount == 0)
                        <strong>No team avialable</strong>
                    @else
                        @foreach($team as $mc)

                        <div class="col-md-4 col-sm-4">
                            <div class="card" style="width: 100%;">
                                <img src="/storage/team_images/{{$mc->path}}" class="card-img-top">
                                <div class="card-body">
                                    <strong><h5 class="card-title" style="color: blue;">{{$mc->first_name . ' '. $mc->last_name}}</h5></strong>
                                    <p class="card-text">
                                        <br><br>
                                        <a href="/team-show/{{$mc->id}}" class="btn btn-sm btn-primary">Edit Team</a><a href="/team-delete/{{$mc->id}}" class="btn btn-danger btn-sm float-right">Delete Team</a>
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
