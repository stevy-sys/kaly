@extends('layouts.app')

@section('content')
	<div class="menu-fixed">
		<div class="menu-abs">
			@include('layouts/partials/_header')
		</div>
	</div>
    <div class=" text-center page-content">
		<div class="wizard-heading">Creer une recette</div>
		<div class="wizard-v6-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="{{ route('post.store-receipe') }}" method="post">
					@csrf
					<div class="mt-5 mb-5">
						<button type="submit" class="text-center btn btn-success mr-3">Publiez</button>
						<button class="text-center btn btn-danger ml-3">Visualiser</button>
					</div>
					<div id=" form-total">
						<div class=" container row">
							<div class="col-lg-4 col-md-6 col-xs-12">
								<!-- SECTION 1 -->
								<h2>
									<span class="step-text">Caracteristique </span>
								</h2>
								<section>
									<div class="inner">
										<div></div>
										<div class="form-row">
											<div class="form-holder">
												<div>
													<label for="menu" class="special-label-1 form-row-inner">Nom du recette</label>
													<div class="form-group">
														<input name="menu" type="text" class="form-control" id="menu" placeholder="">
													</div>
												
													<label for="categorie" class="special-label-1 form-row-inner ">Categorie</label>
													<select name="categorie_recette_id" id="categorie" class="form-control">
														<option value="1">categorie 1</option>
														<option value="categorie 2">categorie 2</option>
														<option value="categorie 3">categorie 3</option>
														<option value="categorie 4">categorie 4</option>
													</select>
												</div>
											</div>
		
										
		
											<div class="form-holder">
												<div>

													{{-- <div class="input-group mb-3">
														<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">@example.com</span>
													</div> --}}

													<label for="Duree" class="special-label-1 form-row-inner">Duree du preparation</label>
													<div class="input-group">
														<input name="duree" type="text" class="form-control" placeholder="45" aria-label="45" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">minute</span>
													</div>
												
													<label for="difficulte" class="special-label-1 form-row-inner ">Difficulte</label>
													<select name="difficulte" id="difficulte" class="form-control">
														<option value="1">facile</option>
														<option value="2">moderre</option>
														<option value="2">difficile</option>
													</select>
												</div>
											</div>
		
											<div class="form-holder">
												<div>
													<label for="Depense" class="special-label-1 form-row-inner">Depense total</label>
													<div class="input-group">
														<input name="depense" type="text" class="form-control" placeholder="5000" aria-label="5000" aria-describedby="basic-addon2">
														<span class="input-group-text" id="basic-addon2">euro</span>
													</div>
												
													<label for="personne" class="special-label-1 form-row-inner ">Personne(s)</label>
													<select name="personne" id="personne" class="form-control">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-lg-4 col-md-6 col-xs-12">
								<!-- SECTION 2 -->
								<h2>
									<span class="step-text">Ingredient</span>
								</h2>
								<section>
									<div class="inner">
										<div class="form-images">
											<img src="/img/image.jpg" alt="wizard_v6">
										</div>
										<div class="form-row">
											<div class="form-holder" id="ingredient">
												<ingredient-component></ingredient-component>
											</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-lg-4 col-md-12 col-xs-12">
								<!-- SECTION 3 -->
								<h2>
									<span class="step-text">Preparation</span>
								</h2>
								<section>
									<div id="preparation" class="inner">
										<preparation-component></preparation-component>
									</div>
								</section>
							</div>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
@endsection