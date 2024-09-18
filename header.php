<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if (! get_option('site_icon')) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<?php wp_head(); ?>
</head>


<script>
	window.onload = () => {
		var currentUrl = window.location.href;

		var urlParts = currentUrl.split('/');

		var lastSection = urlParts[urlParts.length - 1];

		if (lastSection === "") {
			lastSection = urlParts[urlParts.length - 2];
		}

		// console.log(urlParts);
		const postType = document.querySelectorAll('.col-md-1 a');
		const tipoCasa = document.querySelectorAll('.tipo-casa');
		const menu = document.querySelectorAll('.menu-interno');
		const opcoes = document.querySelectorAll('.acabamentos-opcoes li');
		let encontrou = false; // Flag para verificar se algum item foi encontrado




		urlParts.forEach((parts) => {

			// // MARCA VERDE A SELEÇÃO DO POST TYPE (C4, C5, C6...)

			postType.forEach((post) => {
				buscar = post.innerText.replaceAll('.', '');

				if (parts === buscar) {
					// console.log(post)
					post.classList.add('selected-post-type')
				}

			});


			// // MARCA VERDE A SELEÇÃO DA DAS CASAS INTERNAS

			tipoCasa.forEach((tipo) => {
				buscar = tipo.innerText.replaceAll('.', '-').replaceAll('+', '').toLowerCase();
				// console.log(buscar);
				console.log(parts)
				if (parts === buscar) {
					tipo.classList.add('selected-house')
				}
			});


			// MARCA VERDE A OPCAO PLANTAS, ACABAMENTO OU VIDEO

			// Se já encontrou uma correspondência, não precisa continuar
			if (encontrou) return;

			// Percorre o menu para verificar se algum item corresponde à URL
			menu.forEach((opcao) => {
				const buscar = opcao.value;

				// Se encontrar uma correspondência, adiciona a classe e marca como encontrado
				if (parts.includes(buscar)) {
					opcao.classList.add('escolhido');
					encontrou = true; // Marca como encontrado e interrompe futuras verificações
				}
			});


			opcoes.forEach((li) => {
				buscar = li.children[0].href;

				if (lastSection === '?pg=acabamento') {

				} else {
					if (li.children[0].href.includes(lastSection)) {
						li.classList.add('selected-list')
					}
				}
			})



		})

		// Se nenhum item foi encontrado após todas as iterações, marca o primeiro item do menu
		if (!encontrou && menu.length > 0) {
			menu[0].classList.add('escolhido');
		}

	};

	function resize(video) {
		width = video.clientWidth;
		height = width * 0.56;

		video.style.height = height + 'px';
	}
</script>

<style>
	.header-bg {
    background-color: #00260A;
}

.green-color {
    color: #00260A;
}

.shadow {
    text-shadow: 2px 2px 5px;
}

.selected-house {
    background-color: #8BC751 !important;
}

.selected-post-type {
    background-color: #d3d3d3 !important;
}

.homes div a {
    padding: 6px 12px;
    /* background-color: #ECECE3; */
    text-decoration: none;
    font-weight: 600;
    color: #00260A;
    font-size: 24px;
    transition: 200ms all;
}

.homes div a:hover {
    background-color: #ECECE3;

}

iframe {
    width: 100%;
}

.btn-bottom {
    background-color: #F3F2ED;
    color: #00260A;
    border-bottom: 1px solid black;
    font-weight: 600;
    font-size: 22px;
}

.btn-bottom:hover {
    background-color: #8BC751;

}

.tipo-casa {
    font-size: 20px;
    background-color: #f2f1eb;
    font-weight: 500;
}

.tipo-casa:hover {
    background-color: #8BC751;

}

.escolhido {
    background-color: #8BC751;
}
</style>


<body <?php body_class(); ?>>


	<header id="header" role="banner">
		<section class="row justify-content-center align-items-center text-center">

			<div class="text-center p-5 header-bg">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/icone_header.png" alt="logo-techome" srcset="">
				</a>

			</div>

			<div class="text-center p-3">
				<h3 class="green-color mt-2 mb-4 fw-bold" style="text-shadow: 2px 2px 5px;">Escolha sua Techome</h3>
			</div>

		</section>

		<?php
		// Define seu array de post types e URLs manualmente
		$post_types = [
			'C4' => 'C.4',
			'C5' => 'C.5',
			'C6' => 'C.6',
			'C7' => 'C.7',
			'C8' => 'C.8',
			'C12' => 'C.12',
			'S8' => 'S.8',
			'S9' => 'S.9',
			'S10' => 'S.10',
			'S12' => 'S.12',
			'S15' => 'S.15',
			'S18' => 'S.18',
		];

		// Defina URLs manualmente
		$base_url = home_url();
		$urls = [
			'C4' => $base_url . '/C4/',
			'C5' => $base_url . '/C5/',
			'C6' => $base_url . '/C6/',
			'C7' => $base_url . '/C7/',
			'C8' => $base_url . '/C8/',
			'C12' => $base_url . '/C12/',
			'S8' => $base_url . '/S8/',
			'S9' => $base_url . '/S9/',
			'S10' => $base_url . '/S10/',
			'S12' => $base_url . '/S12/',
			'S15' => $base_url . '/S15/',
			'S18' => $base_url . '/S18/',
		];

		// Início do HTML
		?>
		<div class="container">
			<div class="row justify-content-center align-items-center text-center homes">
				<?php foreach ($post_types as $post_type_key => $post_type_label) : ?>
					<?php
					// Obtém a URL manualmente definida para o post type
					$post_type_archive_url = isset($urls[$post_type_key]) ? $urls[$post_type_key] : '';
					?>
					<div class="col-md-1">
						<?php if ($post_type_archive_url) : ?>
							<a href="<?php echo esc_url($post_type_archive_url); ?>">
								<?php echo esc_html($post_type_label); ?>
							</a>
						<?php else : ?>
							<span>URL não definida</span>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>

	</header><!-- #header -->

	<?php for ($i = 0; $i < 18; $i++) if (is_singular('c' . $i) || is_singular('s' . $i)): ?>

		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-12">
						<div class="p-2 mt-4 text-center bottom-header">
							<button id="plantas" class="btn-bottom btn w-100 menu-interno" value="?pg=plantas" onclick="window.location.href='?pg=plantas'">Plantas e Fachadas</button>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="p-2 mt-4 text-center bottom-header">
							<button id="acabamento" class="btn-bottom btn w-100 menu-interno" value="?pg=acabamento" onclick="window.location.href=('?pg=acabamento&int=pisos')">Acabamento e detalhes</button>
						</div>
					</div>
					<div class="col-md-4 col-12">
						<div class="p-2 mt-4 text-center bottom-header">
							<button id="videos" class="btn-bottom btn w-100 menu-interno" value="?pg=videos" onclick="window.location.href=('?pg=videos')">Videos</button>
						</div>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>


	<?php if (!is_home()): ?>

		<section class="mt-5 mb-5">
			<div class="container">
				<div class="row flex-wrap justify-content-center">
					<?php
					// Função para obter o penúltimo parâmetro da URL
					function get_penultimate_url_parameter($value)
					{
						// Obtém a URL atual
						$current_url = $_SERVER['REQUEST_URI'];

						// Divide a URL em partes usando '/' como delimitador
						$url_parts = array_filter(explode('/', $current_url));
						// print_r($url_parts);

						return $url_parts[$value];
					}

					// Recupera o penúltimo parâmetro da URL
					$post_type = get_penultimate_url_parameter(2);


					// Verifica se um post type válido foi encontrado
					if ($post_type) {
						// Configura a query personalizada
						$args = array(
							'post_type'      => $post_type,
							'posts_per_page' => -1, // Pega todos os posts
							'order' => 'asc',
						);

						// Executa a query
						$query = new WP_Query($args);

						// Verifica se há posts
						if ($query->have_posts()) {
							echo '<div class="row">';

							// Loop pelos posts
							while ($query->have_posts()) {
								$query->the_post();
					?>

								<div class="col-md-2">
									<button class="btn tipo-casa w-100" onclick="window.location.href='<?= get_permalink(); ?>';"><?= get_the_title(); ?></button>
								</div>

					<?php
							}

							echo '</div>';

							// Restaura os dados originais do post
							wp_reset_postdata();
						}
					}
					?>

				</div>
			</div>
		</section>

	<?php endif; ?>