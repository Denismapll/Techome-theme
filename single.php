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

		.carousel-indicators [data-bs-target] {
			border-bottom: 10px solid black;
		}

		.carousel-indicators {
			bottom: -40px !important;
		}

		/* ACABAMENTOS E DETALHES */


		.light-green {
			color: #8BC751;
		}

		.selected-list {
			list-style: none;
			border-left: 6px solid #8BC751 !important;
			padding-left: 17px;
		}

		.lateral {
			margin-bottom: 35px;
		}

		.lateral ul li {
			list-style: none;
			padding-left: 20px;
			border-left: 1px solid transparent;
			margin: 12px 0 !important;
			transition: 400ms all;
		}

		.lateral ul li:hover {
			list-style: none;
			padding-left: 20px;
			border-left: 6px solid #8BC751;
			margin: 12px 0 !important;
		}

		.lateral ul li a {
			color: black;
			text-decoration: none;
			font-weight: 500;
			font-size: 19px;
		}

		.shadow-right {
			box-shadow: 10px 2px 20px -9px;
		}
	</style>


	<!-- SECÇÃO PRINCIPAL - PLANTAS E FACHADAS -->

	<?php if ($show_page['pg'] == "plantas"): ?>

		<section>
			<div class="container">
				<div class="d-flex align-items-center">
					<div class="title mr-4">
						<h1>Conheça a <?= the_title(); ?></h1>
					</div>
					<span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : '' ;?></span>
				</div>
			</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - PLANTAS E FACHADAS -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-12">

						<div class="planta1">
							<img class="w-100" src="http://localhost/Techome/wp-content/uploads/2024/09/C12.A_Espaço-Gourmet.png" alt="" srcset="">
						</div>

						<div class="planta2">
							<h5>Fachadas</h5>
							<div id="carouselExampleIndicators" class="carousel slide w-100">
								<div class="carousel-indicators">
									<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
								</div>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/C12.A_Espaço-Gourmet.png" class="d-block w-100" alt="http://localhost/Techome/wp-content/uploads/2024/09/C12.A_Espaço-Gourmet.pngs">
									</div>
									<div class="carousel-item">
										<img src="http://localhost/Techome/wp-content/uploads/2024/09/C12.A_Espaço-Gourmet.png" class="d-block w-100" alt="http://localhost/Techome/wp-content/uploads/2024/09/C12.A_Espaço-Gourmet.pngs">
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
								<span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : ''; ?></span>
							</div>
							<h6>A partir de R$<?= isset($data_page['valor_casa'][0]) ? $data_page['valor_casa'][0] : ''; ?></h6>
							<div class="side-right1">
								<h6>Disponibilidade da casa de acordo com o lote</h6>
								<b><?= isset($data_page['lote_minimo'][0]) ? $data_page['lote_minimo'][0] : ''; ?></b>
							</div>

							<div class="side-right1">
								<h4><b>Nesta planta</b></h4>
								<?php if ($data_page['checkbox_suite'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/camas.png" alt="" srcset="">
										<span><?= $data_page['suites_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_banheiro'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/banheiro.png" alt="" srcset="">
										<span>Banheiro social</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_lavabo'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/lavabo.png" alt="" srcset="">
										<span>Lavabo</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_sala'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/sala_estar.png" alt="" srcset="">
										<span>Sala de estar</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_jantar'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/sala_jantar.png" alt="" srcset="">
										<span>Sala de Jantar</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_cozinha_integrada'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/cozinha.png" alt="" srcset="">
										<span>Cozinha integrada</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_lavanderia'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/lavanderia.png" alt="" srcset="">
										<span>Lavanderia</span>
									</div>
								<?php endif; ?>
								<?php if ($data_page['checkbox_vaga'][0] === 'yes'): ?>
									<div class="plantas">
										<img src="<?= $icons;?>/vaga_coberta.png" alt="" srcset="">
										<span>Vaga coberta</span>
									</div>
								<?php endif; ?>
							</div>

							<div class="side-right1 borda-bottom">
								<h4 style="margin-top: 25px;"><b>Opcionais</b></h4>
								<?php if (isset($data_page['muro_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/muro.png" alt="" srcset="">
										<span><?= $data_page['muro_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['area_gourmet_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/gourmet.png" alt="" srcset="">
										<span><?= $data_page['area_gourmet_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['quartos_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/camas.png" alt="" srcset="">
										<span><?= $data_page['quartos_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['smart_kit_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/smart.png" alt="" srcset="">
										<span><?= $data_page['smart_kit_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['cozinha_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/cozinha.png" alt="" srcset="">
										<span><?= $data_page['cozinha_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['grama_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/grama.png" alt="" srcset="">
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

	<?php if ($show_page['pg'] == "acabamento"): ?>

		<section>
			<div class="container">
				<div class="d-flex align-items-center justify-content-between">
					<div class="title mr-4 d-flex gap-3 align-items-center">
						<h1>Conheça a <?= the_title(); ?></h1>
						<span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : '' ;?></span>
					</div>
					<div>
						<p>Disponibilidade da casa de acordo com o lote <b><?= isset($data_page['lote_minimo'][0]) ? $data_page['lote_minimo'][0]: '';?></b></p>
					</div>
				</div>
				<h6>A partir de R$<?= isset($data_page['valor_casa'][0]) ? $data_page['valor_casa'][0] : ''; ?></h6>
			</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - ACABAMENTO E DETALHES -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-12 mt-4">
						<div class="bg-cinza shadow-right h-100 w-100">


							<div class="lateral">
								<h3 class="light-green">ACABAMENTOS</h3>
								<ul class="m-0 p-0 acabamentos-opcoes" style="margin-top: 30px !important">
									<li class="selected-list"><a href="#">Pisos</a></li>
									<li><a href="#">Paredes</a></li>
									<li><a href="#">Metais & Granitos</a></li>
									<li><a href="#">Acabamento externo</a></li>
									<li><a href="#">Louças</a></li>
									<li><a href="#">Portas e esquadrias</a></li>
								</ul>
							</div>

							<div class="lateral">
								<h3 class="light-green">DIFERENCIAIS DA ENTREGA TECHOME</h3>
								<ul class="m-0 p-0 acabamentos-opcoes" style="margin-top: 30px !important">
									<li><a href="#">Infraestrutura seca</a></li>
									<li><a href="#">Espera de energia fotovoltaica</a></li>
									<li><a href="#">Instalação de encanamento a gás para cozinha e banheiros</a></li>
									<li><a href="#">Pressurizador na rede de água quente</a></li>
									<li><a href="#">Chuveiros</a></li>
									<li><a href="#">Ponto elétrico para chuveiros</a></li>
									<li><a href="#">Ponto preparado para instalação de ar condicionado na sala, quartos e suíte</a></li>
									<li><a href="#">Preparação para carro elétrico</a></li>
									<li><a href="#">Guarda corpos de vidro nas escadas**</a></li>
									<li><a href="#">Pé direito de 2,80M**</a></li>
									<li><a href="#">Escada com revestimento em granito**</a></li>
								</ul>
							</div>


						</div>
					</div>

					<div class="col-md-8 col-12 mt-4">

						<div class="row p-3">
							<div class="col-md-6 col-12 mt-4">
								<h3 class="fw-bold">Pisos</h3>
								<p>As casas Techome tem como padrão de entrega o piso cerâmico
									nas áreas molhadas (banheiros e cozinha) e contrapiso nas
									áreas secas - com opções de acabamento adicional em
									laminado ou cerâmica.</p>
							</div>
							<div class="col-md-6 col-12 mt-4"></div>
							<div class="col-md-6 col-12 mt-4">
								<h5><b>Banheiros |</b> Porcelanato 60 x 60cm.</h5>
								<div class="d-flex justify-content-center align-items-center">
									<img src="http://localhost/Techome/wp-content/uploads/2024/09/exemplo-pisos.png" alt="" srcset="">
								</div>
							</div>
							<div class="col-md-6 col-12 mt-4">
								<h5><b>Áreas molhadas |</b> Porcelanato 60 x 60cm e rodapé em EPS com h = 12cm.</h5>
								<div class="d-flex justify-content-center align-items-center">
									<img src="http://localhost/Techome/wp-content/uploads/2024/09/exemplo-molhado.png" alt="" srcset="">
								</div>
							</div>
							<div class="col-md-6 col-12 mt-4">
								<h5><b>Áreas secas |</b> Piso laminado e rodapé em EPS com h = 12cm.</h5>
								<div class="d-flex justify-content-center align-items-center">
									<img src="http://localhost/Techome/wp-content/uploads/2024/09/exemplo-secos.png" alt="" srcset="">
								</div>
							</div>
						</div>

						<div class="p-4 mt-4">
							<p>A especificação, cor e/ou marca dos itens de acabamento louças sanitárias e metais podem ser alteradas por outra similar, a depender da disponibilidade no mercado.</p>
						</div>

					</div>
				</div>
		</section>

	<?php endif; ?>

	<!-- SECÇÃO PRINCIPAL - VIDEOS -->

	<?php if ($show_page['pg'] == "videos"): ?>

		<section>
			<div class="container">
				<div class="d-flex align-items-center">
					<div class="title mr-4">
						<h1>Conheça a <?= the_title(); ?></h1>
					</div>
					<span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : ''; ?></span>
				</div>
			</div>
		</section>

		<section>
			<div class="container">
				<div class="row">

					<!-- SECÇÃO PRINCIPAL - VIDEOS -->
					<div class="col-md-8 col-12">

						<div class="planta1">

							<iframe width="560" height="315" onload="resize(this)" class="video-player" src="https://www.youtube.com/embed/u31qwQUeGuM?si=TFH5q2fGAd8-U5h0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>

						<div class="planta2">
							<iframe width="560" onload="resize(this)" class="video-player" src="https://www.youtube.com/embed/u31qwQUeGuM?si=TFH5q2fGAd8-U5h0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

						</div>

					</div>

					<!-- SECÇÃO PRINCIPAL - SIDEBAR -->
					<div class="col-md-4 col-12">
						<div class="bg-cinza h-100 w-100">
							<div class="d-flex align-items-center">
								<div class="title mr-4">
									<h4>Conheça a <?= the_title(); ?></h4>
								</div>
								<span class="metros"><?php  isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : '';?></span>
							</div>
							<h6>A partir de R$<?= isset($data_page['valor_casa'][0]) ? $data_page['valor_casa'][0] : ''; ?></h6>
							<div class="side-right1">
								<h6>Disponibilidade da casa de acordo com o lote</h6>
								<b><?= isset($data_page['lote_minimo'][0]) ? $data_page['lote_minimo'][0] : ''; ?></b>
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
										<img src="<?= $icons; ?>/muro.png" alt="" srcset="">
										<span><?= $data_page['muro_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['area_gourmet_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/gourmet.png" alt="" srcset="">
										<span><?= $data_page['area_gourmet_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['quartos_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/camas.png" alt="" srcset="">
										<span><?= $data_page['quartos_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['smart_kit_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/smart.png" alt="" srcset="">
										<span><?= $data_page['smart_kit_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['cozinha_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/cozinha.png" alt="" srcset="">
										<span><?= $data_page['cozinha_casa'][0] ?></span>
									</div>
								<?php endif; ?>
								<?php if (isset($data_page['grama_casa'])): ?>
									<div class="plantas">
										<img src="<?= $icons; ?>/grama.png" alt="" srcset="">
										<span><?= $data_page['grama_casa'][0] ?></span>
									</div>
								<?php endif; ?>
							</div>


						</div>
					</div>

				</div>
			</div>
		</section>

	<?php endif; ?>



</main><!-- #main -->

<?php
get_footer();
