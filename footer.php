<?php

/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

<?php $show_page = isset($_GET['pg']) ? $_GET : ['pg' => null]; ?>

<style>
	.bg-green {
		background-color: #00260A;
		display: flex;
		justify-content: center;
		align-items: center;
		border-radius: 14px;
		padding: 20px;
	}

	.bg-green a {
		display: block;
		text-align: center;
	}
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
<footer id="footer" role="contentinfo">
	<div class="container mt-5">
		<section>
			<div class="container">
				<div class="row  align-items-end">
					<div class="col-md-4 col-12 bg-green">
						<a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images'; ?>/icone_header.png" alt="logo-techome" class="w-75" srcset=""></a>
					</div>
					<?php if ($show_page['pg'] == "plantas"): ?>
						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="acabamento" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href=('?pg=acabamento')">Acabamento e detalhes</button>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="videos" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href=('?pg=videos')">Videos</button>
							</div>
						</div>
					<?php elseif ($show_page['pg'] == "acabamento"): ?>
						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="plantas" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href='?pg=plantas'">Plantas e Fachadas</button>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="videos" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href=('?pg=videos')">Videos</button>
							</div>
						</div>
					<?php elseif ($show_page['pg'] == "videos"): ?>

						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="plantas" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href='?pg=plantas'">Plantas e Fachadas</button>
							</div>
						</div>
						<div class="col-md-4 col-12">
							<div class="p-2 mt-4 text-center bottom-header">
								<button id="acabamento" class="btn-bottom btn w-100 menu-interno" onclick="window.location.href=('?pg=acabamento')">Acabamento e detalhes</button>
							</div>
						</div>

					<?php endif; ?>

				</div>
			</div>
		</section>
	</div><!-- .container -->
</footer><!-- #footer -->

<?php wp_footer(); ?>
</body>

</html>