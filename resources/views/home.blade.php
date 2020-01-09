@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">

				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active show" href="#clients" aria-controls="clients" role="tab"
								   data-toggle="tab">
									OAuth Clients
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#authClients" aria-controls="authClients" role="tab"
								   data-toggle="tab">
									Authorized Clients
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#tokens" aria-controls="tokens" role="tab"
								   data-toggle="tab">
									Personal Access Tokens
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#secrets" aria-controls="secrets" role="tab"
								   data-toggle="tab">
									Secrets
								</a>
							</li>
						</ul>
						<div class="tab-content tabcontent-border">
							<div role="tabpanel" class="tab-pane fade in active show" id="clients">
								<passport-clients></passport-clients>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="authClients">
								<passport-authorized-clients></passport-authorized-clients>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tokens">
								<passport-personal-access-tokens></passport-personal-access-tokens>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="secrets">
								<br/>
								<table class="table table-striped">
									<thead>
									<tr>
										<th>Name</th>
										<th>Secret</th>
										<th>Redirect</th>
									</tr>
									</thead>
									<tbody>
									@foreach($secrets as $secret)
										<tr>
											<td>{{$secret->name}}</td>
											<td><code>{{$secret->secret}}</code></td>
											<td>{{$secret->redirect}}</td>
										</tr>
									@endforeach
									</tbody>
								</table>

							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
@endsection
