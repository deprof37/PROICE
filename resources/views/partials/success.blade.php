@if(session()->has('success'))
	<div class="alert alert-dismissable alert-success fade show">
		<button type="button" class="close" data-dismiss="alert" arial-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>
			{!! session()->get('success') !!}
		</strong>
	</div>
@endif