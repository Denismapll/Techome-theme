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
	$upload = wp_upload_dir();
	$infos_page = get_fields();
	$chaves = isset($infos_page['infos']) ? array_keys($infos_page['infos']) : [];


	?>


	<!-- CASO 1 - PLANTAS E FACHADAS - START -->
	<?php if ($show_page['pg'] == "plantas"): ?>

		<!-- SECÇÃO PRINCIPAL - PLANTAS E FACHADAS - START -->

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

					<!-- AREA PRINCIPAL - START -->
					<div class="col-md-8 col-12">

						<div class="planta1">
							<?php
							// Obtém a URL da imagem destacada
							$thumbnail_url = get_the_post_thumbnail_url();

							// Define a URL da imagem padrão
							$default_image = $icons . '/vazio.png';
							?>
							<img class="w-100" src="<?php echo !empty($thumbnail_url) ? $thumbnail_url : $default_image; ?>" alt="" srcset="">
						</div>


						<div class="planta2">
							<h5>Fachadas</h5>
							<div id="caroussel-plantas" class="carousel slide w-100">
								<div class="carousel-indicators">
									<?php if (isset($infos_page['carossel']) && count($infos_page['carossel']) > 0): ?>
										<?php for ($i = 0; $i < count($infos_page['carossel']); $i++): ?>
											<button type="button" data-bs-target="#caroussel-plantas" data-bs-slide-to="<?= $i; ?>" class="<?= $i == 0 ? 'active' : ''; ?>" aria-current="<?= $i == 0 ? 'true' : 'false'; ?>" aria-label="Slide <?= $i; ?>"></button>
										<?php endfor; ?>
									<?php else: ?>
										<!-- Exibe um único botão ativo se o carrossel estiver vazio -->
										<button type="button" data-bs-target="#caroussel-plantas" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
									<?php endif; ?>
								</div>

								<div class="carousel-inner">
									<?php if (isset($infos_page['carossel']) && count($infos_page['carossel']) > 0): ?>
										<?php for ($i = 0; $i < count($infos_page['carossel']); $i++): ?>
											<?php
											// Verifica se a imagem está vazia, se estiver define a imagem padrão
											$image = !empty($infos_page['carossel']['Imagem_' . $i]) ? $infos_page['carossel']['Imagem_' . $i] : $icons . '/vazio.png';
											?>
											<div class="carousel-item <?= $i == 0 ? 'active' : ''; ?>">
												<img src="<?php echo $image; ?>" class="d-block w-100" alt="Imagem <?= $i; ?>">
											</div>
										<?php endfor; ?>
									<?php else: ?>
										<!-- Exibe uma imagem padrão quando não há itens no carrossel -->
										<div class="carousel-item active">
											<img src="<?= $icons; ?>/vazio.png" class="d-block w-100" alt="Imagem padrão">
										</div>
									<?php endif; ?>
								</div>

								<button class="carousel-control-prev" type="button" data-bs-target="#caroussel-plantas" data-bs-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#caroussel-plantas" data-bs-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>




					</div>
					<!-- AREA PRINCIPAL - END -->


					<!-- SIDE BAR DIREITA - START -->
					<div class="col-md-4 col-12">
						<?php include get_stylesheet_directory() . '/sidebars/side-right.php'; ?>
					</div>
					<!-- SIDE BAR DIREITA - END -->

				</div>

				<!-- IMAGENS PARTE DE BAIXO - START -->
				<div class="row mt-5">

					<!-- <?php print_r(($infos_page['img_baixo'])); ?> -->

					<?php if (isset($infos_page['img_baixo'])): for ($i = 0; $i < count($infos_page['img_baixo']); $i++): if (!empty($infos_page['img_baixo']['Imagem_' . $i])): ?>

								<div class="col-md-6 col-12">
									<a href="<?= $infos_page['img_baixo']['Imagem_' . $i]['url'] ?>" data-toggle="lightbox">
										<img class="w-100" src="<?= $infos_page['img_baixo']['Imagem_' . $i]['url'] ?>">
									</a>
								</div>

						<?php endif;
						endfor;
					else: ?>

						<div class="col-md-6 col-12 mt-4">
							<a href="<?= $icons; ?>/vazio.png" data-toggle="lightbox">
								<img class="w-100" src="<?= $icons; ?>/vazio.png">
							</a>
						</div>

					<?php endif; ?>

				</div>
				<!-- IMAGENS PARTE DE BAIXO - END -->

			</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - PLANTAS E FACHADAS - END -->


	<?php endif; ?>
	<!-- FIM DO CASO 1 - PLANTAS E FACHADAS - END -->


	<!-- CASO 2 - ACABAMENTO E DETALHES - START -->
	<?php if (strpos($show_page['pg'], "acabamento") !== false): ?>
		<?php

		// DEBUG -- REMOVER 
		echo '<pre>';
		// print_r(($chaves));
		// print_r(($infos_page['infos']));
		echo '</pre>'; ?>

		<!-- SECÇÃO PRINCIPAL - ACABAMENTO E DETALHES - START -->
		<section>
			<div class="container">
				<div class="d-flex align-items-center justify-content-between">
					<div class="title mr-4 d-flex gap-3 align-items-center">
						<h1>Conheça a <?= the_title(); ?></h1>
						<span class="metros"><?php isset($data_page['metros_casa'][0]) ? print_r($data_page['metros_casa'][0]) : ''; ?></span>
					</div>
					<div>
						<p>Disponibilidade da casa de acordo com o lote <b><?= isset($data_page['lote_minimo'][0]) ? $data_page['lote_minimo'][0] : ''; ?></b></p>
					</div>
				</div>
				<h6>A partir de R$<?= isset($data_page['valor_casa'][0]) ? $data_page['valor_casa'][0] : ''; ?></h6>
			</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - ACABAMENTO E DETALHES -->
		<section>
			<div class="container">
				<div class="row">

					<!-- MENU LATERAL ESQUERDO - START-->
					<div class="col-md-4 col-12 mt-4">
						<?php include get_stylesheet_directory() . '/sidebars/side-left.php'; ?>
					</div>
					<!-- MENU LATERAL ESQUERDO - END -->


					<!-- AREA PRINCIPAL - START -->
					<div class="col-md-8 col-12 mt-4">

						<div class="row p-3">
							<!-- CONTEUDO PAGINA -->

							<?php

							$interna = get_penultimate_url_parameter(4); // Obtém o penúltimo parâmetro da URL
							// echo $interna . '<br>';


							for ($i = 0; $i < count($chaves); $i++) {
								$buscado = '?pg=acabamento&int=' . $chaves[$i];
								// echo $buscado;
								if (strpos($interna, $buscado) !== false) { // Verifica se a chave é encontrada no penúltimo parâmetro da URL
									// echo "achou " . $chaves[$i]; // Exibe a chave encontrada
									// include get_stylesheet_directory() . '/acabamentos-content/interno-acabamento.php';

									switch ($chaves[$i]) {
										default:
											include get_stylesheet_directory() . '/acabamentos-content/interno-acabamento.php';
									}
								}
							}

							?>
						</div>

						<div class="p-4 mt-4">
							<p>A especificação, cor e/ou marca dos itens de acabamento louças sanitárias e metais podem ser alteradas por outra similar, a depender da disponibilidade no mercado.</p>
						</div>

					</div>
					<!-- AREA PRINCIPAL - END -->

				</div>
		</section>

		<!-- SECÇÃO PRINCIPAL - ACABAMENTO E DETALHES - END -->


	<?php endif; ?>
	<!-- FIM DO CASO 2 - ACABAMENTO E DETALHES - END -->

	<!-- CASO 3 - VIDEOS - START-->
	<?php if ($show_page['pg'] == "videos"): ?>

		<!-- SECÇÃO PRINCIPAL - VIDEOS - START -->

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

					<!-- SECÇÃO PRINCIPAL - VIDEOS - START -->
					<div class="col-md-8 col-12">

						<div class="planta1">

							<iframe width="560" height="315" onload="resize(this)" class="video-player" src="<?= isset($data_page['video_1'][0]) ? $data_page['video_1'][0] : 'https://www.youtube.com/embed/u31qwQUeGuM?si=TFH5q2fGAd8-U5h0'?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
						</div>

						<div class="planta2">
							<iframe width="560" onload="resize(this)" class="video-player" src="<?= isset($data_page['video_2'][0]) ? $data_page['video_2'][0] : 'https://www.youtube.com/embed/u31qwQUeGuM?si=TFH5q2fGAd8-U5h0'?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

						</div>

					</div>
					<!-- SECÇÃO PRINCIPAL - VIDEOS - END -->


					<!-- SIDE BAR DIREITA - START -->
					<div class="col-md-4 col-12">
						<?php include get_stylesheet_directory() . '/sidebars/side-right.php';	?>
					</div>
					<!-- SIDE BAR DIREITA - END -->


				</div>
			</div>
		</section>
		<!-- SECÇÃO PRINCIPAL - VIDEOS - END -->

	<?php endif; ?>
	<!-- FIM DO CASO 3 - VIDEOS - END -->


</main><!-- #main -->

<?php
get_footer();
