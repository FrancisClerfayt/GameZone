@extends('layouts.app')

@section('content')
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2>Attractions</h2>
							<div>
								<a href=" {{ route('Attraction.create') }} " class="btn btn-primary text-secondary">
									Ajouter une attraction
								</a>
								<a href=" {{ route('Attraction.adminIndex') }} " class="btn btn-primary text-secondary">
									Modifier une attraction
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2>Restaurants</h2>
							<div>
								<a href=" {{ route() }} " class="btn btn-primary text-secondary">
									Ajouter un restaurant
								</a>
								<a href=" {{ route() }} " class="btn btn-primary text-secondary">
									Modifier un restaurant
								</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<h2>Articles</h2>
							<div>
								<a href=" {{ route() }} " class="btn btn-primary text-secondary">
									Ajouter un article
								</a>
								<a href=" {{ route() }} " class="btn btn-primary text-secondary">
									Modifier un article
								</a>
							</div>
						</div>
						{{-- <div class="col-lg-3 col-md-6 col-sm-12">
							<h2>Horaires</h2>
							<div>
								<a href="" class="btn btn-primary text-secondary">Ajouter</a>
								<a href="" class="btn btn-primary text-secondary">Modifier</a>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
@endsection