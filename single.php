<?php

/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>

<main>

	<?php
	$data_page = get_post_meta(get_the_ID());
	$show_page = isset($_GET['pg']) ? $_GET : ['pg' => 'plantas'];
	?>

	<style>
		.title {
			margin-right: 25px;
		}

		.metros {
			background-color: #8bc751;
			padding: 2px 8px;
			border-radius: 4px;
			font-weight: 500;
		}

		.planta1,
		.planta2 {
			margin: 20px 0;
		}

		.bg-cinza {
			background-color: #f3f2ed;
			border-radius: 15px;
			padding: 40px;
		}

		.side-right1 {
			margin-top: 35px;
		}

		.plantas {
			margin-top: 20px;
		}

		.plantas img {
			margin-right: 15px;
		}

		.borda-bottom {
			border-top: 1px solid black;
		}
	</style>


	<?php if ($show_page['pg'] == "plantas"): ?>

		<section>
			<div class="container">
				<div class="d-flex align-items-center">
					<div class="title mr-4">
						<h1>Conheça a <?= the_title(); ?></h1>
					</div>
					<span class="metros"><?php print_r($data_page['metros_casa'][0]) ?></span>
				</div>
			</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - PLANTAS E FACHADAS -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-12">

						<div class="planta1">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/C12A_Planta1.png" alt="" srcset="">
						</div>

						<div class="planta2">
							<h5>Fachadas</h5>
							<div id="carouselExampleIndicators" class="carousel slide w-100">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
									<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/planta1v2.png" class="d-block w-100" alt="http://localhost/Techome/wp-content/uploads/2024/09/planta1v2.pngs">
									</div>
									<div class="carousel-item">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/planta1v2.png" class="d-block w-100" alt="http://localhost/Techome/wp-content/uploads/2024/09/planta1v2.pngs">
									</div>

								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>

					</div>

					<div class="col-md-4 col-12">
						<div class="bg-cinza h-100 w-100">
							<div class="d-flex align-items-center">
								<div class="title mr-4">
									<h4>Conheça a <?= the_title(); ?></h4>
								</div>
								<span class="metros"><?php print_r($data_page['metros_casa'][0]) ?></span>
							</div>
							<h6>A partir de R$<?= $data_page['valor_casa'][0]; ?></h6>
							<div class="side-right1">
								<h6>Disponibilidade da casa de acordo com o lote</h6>
								<b>LOTE MÍNIMO 10 X 25M</b>
							</div>

							<div class="side-right1">
								<h4><b>Nesta planta</b></h4>
								<?php if ($data_page['checkbox_suite'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/camas.png" alt="" srcset="">
										<span><?= $data_page['suites_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_banheiro'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/banheiro.png" alt="" srcset="">
										<span>Banheiro social</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_lavabo'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/lavabo.png" alt="" srcset="">
										<span>Lavabo</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_sala'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/sala_estar.png" alt="" srcset="">
										<span>Sala de estar</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_jantar'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/sala_jantar.png" alt="" srcset="">
										<span>Sala de Jantar</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_cozinha_integrada'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/cozinha.png" alt="" srcset="">
										<span>Cozinha integrada</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_lavanderia'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/lavanderia.png" alt="" srcset="">
										<span>Lavanderia</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_vaga'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/vaga_coberta.png" alt="" srcset="">
										<span>Vaga coberta</span>
									</div>
								<?php endif; ?>
							</div>

							<div class="side-right1 borda-bottom">
								<h4 style="margin-top: 25px;"><b>Opcionais</b></h4>
								<?php if (isset($data_page['muro_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/muro.png" alt="" srcset="">
										<span><?= $data_page['muro_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['area_gourmet_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/gourmet.png" alt="" srcset="">
										<span><?= $data_page['area_gourmet_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['quartos_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/camas.png" alt="" srcset="">
										<span><?= $data_page['quartos_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['smart_kit_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/smart.png" alt="" srcset="">
										<span><?= $data_page['smart_kit_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['cozinha_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/cozinha.png" alt="" srcset="">
										<span><?= $data_page['cozinha_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['grama_casa'])): ?>
									<div class="plantas">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/grama.png" alt="" srcset="">
										<span><?= $data_page['grama_casa'][0] ?></span>
									</div>
								<?php endif; ?>
							</div>


						</div>
					</div>

				</div>
				<div class="row mt-5">
					<div class="col-md-6 col-12">
						<a href="http://localhost/Techome/wp-content/uploads/2024/09/1.png" data-toggle="lightbox">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/1.png">
						</a>
					</div>
					<div class="col-md-6 col-12">
						<a href="http://localhost/Techome/wp-content/uploads/2024/09/2.png" data-toggle="lightbox">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/2.png">
						</a>
					</div>
					<div class="col-md-6 col-12">
						<a href="http://localhost/Techome/wp-content/uploads/2024/09/3.png" data-toggle="lightbox">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/3.png">
						</a>
					</div>
					<div class="col-md-6 col-12">
						<a href="http://localhost/Techome/wp-content/uploads/2024/09/4.png" data-toggle="lightbox">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/4.png">
						</a>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<!-- SECÇÃO PRINCIPAL - ACABAMENTO E DETALHES -->

	<!-- SECÇÃO PRINCIPAL - VIDEOS -->



</main><!-- #main -->

<?php
get_footer();
