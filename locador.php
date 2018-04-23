<?php get_header(); $diretoria_categories = get_queried_object(); ?>
<section id="webdoor" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(264)); ?>);">
	<div class="flex">
		<div class="wrap">
			<h1>
				<?php
				echo get_the_title(264);
				?> 
			</h1>
		</div>
	</div>
</section>
<div class="wrap">
	<?php 
	if(isset($_GET['id'])) { 
		$id = $_GET["id"];
		$xml = simplexml_load_file('http://187.11.238.201/webservice/locadora.asp?id=' . $id,"SimpleXMLElement",LIBXML_NOCDATA);
		// $EmpCgc = $xml->locadora->EmpCgc;
		// $locadora = $xml->locadora->EmpFan;
		// $site = $xml->locadora->EmpHp;
		// $email = $xml->locadora->EmpEmaCom;
		// $ddd = $xml->locadora->EmpDdd;
		// $telefone = $xml->locadora->EmpTel;
		// $skype = $xml->locadora->EmpSky;
		// $endereco = $xml->locadora->EmpEnd;
		// $bairro = $xml->locadora->EmpBai;
		// $cep = $xml->locadora->EmpCep;
		// $complemento=$xml->locadora->EmpPagEmp;
	?>
	<h1 class="interna-titulo"><span class="border"><?php echo $xml->locadora->EmpFan; ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div>
				<p>
					<strong>Site: </strong><a target="_blank" href="http://<?php echo $xml->locadora->EmpHp; ?>" title="<?php echo $xml->locadora->EmpFan; ?>"><?php echo $xml->locadora->EmpHp; ?></a>
					<br/><br/>
					<strong>E-mail:</strong> <a target="_blank" href="mailto:<?php echo $xml->locadora->EmpEmaCom; ?>" title="<?php echo $xml->locadora->EmpEmaCom; ?>"><?php echo $xml->locadora->EmpEmaCom; ?></a>
					<br/>
					<strong>Telefone:</strong> <?php echo $xml->locadora->EmpDdd; ?> <?php echo $xml->locadora->EmpTel; ?>
					<br/>
					<strong>Skype:</strong> <?php echo $xml->locadora->EmpSky; ?> 
					<br/>
					<strong>Endereço:</strong> <?php echo $xml->locadora->EmpEnd; ?>, <?php echo $xml->locadora->EmpBai; ?> - <?php echo $xml->locadora->EmpPagEmp; ?>, <?php echo $xml->locadora->EmpCep; ?>
				</p>	
				<?php
					} 
				?> 	
			</div>
		</div>
		<aside id="sidebar" class="flex20">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>