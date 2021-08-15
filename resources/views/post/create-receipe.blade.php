@extends('layouts.app')

@section('content')
	<div class="menu-fixed">
		<div class="menu-abs">
			@include('layouts/partials/_header')
		</div>
	</div>
    <div class="page-content">
		<div class="wizard-heading">Creer une recette</div>
		<div class="wizard-v6-content">
			<div class="wizard-form">
		        <form class="form-register" id="form-register" action="#" method="post">
					<!-- SECTION 1 -->
		        	<div id="form-total">
			            <h2>
			            	<p class="step-icon"><span>1</span></p>
			            	<span class="step-text">Caracteristique </span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-heading">
									<h3 class="text-center" >Caracteristique</h3>
			                		<span>1/3</span>
			                	</div>
								<div></div>
								<div class="form-row">
									<div class="form-holder">
										<div>
											<label for="name" class="special-label-1 form-row-inner">Nom du recette</label>
											<div class="form-group">
												<input type="text" class="form-control" id="name" placeholder="">
											</div>
										
											<label for="categorie" class="special-label-1 form-row-inner ">Categorie</label>
											<select name="categorie" id="categorie" class="form-control">
												<option value="categorie 1">categorie 1</option>
												<option value="categorie 2">categorie 2</option>
												<option value="categorie 3">categorie 3</option>
												<option value="categorie 4">categorie 4</option>
											</select>
										</div>
									</div>

								

									<div class="form-holder">
										<div>
											<label for="Duree" class="special-label-1 form-row-inner">Duree du preparation</label>
											<div class="form-group">
												<input name="Duree" type="text" class="form-control" id="Duree" placeholder="">
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
											<div class="form-group">
												<input name="Depense" type="text" class="form-control" id="Depense" placeholder="">
											</div>
										
											<label for="Personne" class="special-label-1 form-row-inner ">Personne(s)</label>
											<select name="Personne" id="Personne" class="form-control">
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
						<!-- SECTION 2 -->
			            <h2>
			            	<p class="step-icon"><span>2</span></p>
			            	<span class="step-text">Ingredient</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Booking Infomation</h3>
			                		<span>2/3</span>
			                	</div>
		                		<div class="form-images">
		                			<img src="/img/image.jpg" alt="wizard_v6">
		                		</div>
								<div class="text-center mb-3">
									<button class="btn btn-primary pl-3 pr-3" type="button"> + </button>
									<button class="btn btn-danger pl-3 pr-3" type="button" > - </button>
								</div>
								<div class="form-row">
									<div class="form-holder receipe">
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">Ingredient1</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">quantite1</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">unite1</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
									</div>
									<div class="form-holder receipe">
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">Ingredient3</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">quantite3</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
										<div class="form-group">
											<label for="name" class="special-label-1 form-row-inner">unite3</label>
											<input type="text" class="form-control" id="name" placeholder="">
										</div>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>3</span></p>
			            	<span class="step-text">Preparation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="form-heading">
			                		<h3>Comfirm Details</h3>
			                		<span>3/3</span>
			                	</div>
								<div class="table-responsive">
									<div class="text-center mb-3">
										<button class="btn btn-primary pl-3 pr-3" type="button"> + </button>
										<button class="btn btn-danger pl-3 pr-3" type="button" > - </button>
									</div>
									<div class="col-12">
                                        <div class="form-group">
											<label class="special-label-1" for="step">Step-1</label>
                                            <textarea name="step" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
@endsection
    



{{-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v6</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style2.css"/>
</head>
<body>
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.steps.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html> --}}




    {{-- <div class="container">
        <div class="post-a-comment-area mb-30 clearfix">
            <h4 class="mb-50">Publiez une blog</h4>

            <!-- Reply Form -->
            <div class="contact-form-area">
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <input type="text" class="form-control" id="name" placeholder="Name*">
                        </div>
                        <div class="col-12">
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn bueno-btn mt-30" type="submit">Publiez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}