<?php get_header() ?>

<section class="container-fluid">

	<!-- BreadCrumbs -->
	<section class="breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12">
					<div class="pull-left">
						<p>Você está em: HOME <span>» ERRO 404: PÁGINA NÃO ENCONTRADA</span></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container content page_404" style="text-align: center; padding: 80px 0;">
	
		<h2 class="titulo">Página <strong>não encontrada</strong></h2>
		<h3>Opss, essa página não existe!</h3>
		<i style="margin: 20px 0;" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
		<p>Você será redirecionado...</p>
		
	</div>
	
</section>

<script>
	setTimeout(function(){ 
		document.location='<?php echo esc_url( home_url( '/' ) ); ?>';
	}, 5000);
</script>

<?php get_footer() ?>