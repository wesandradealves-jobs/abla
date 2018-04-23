<?php get_header(); $diretoria_categories = get_queried_object(); ?>
<div class="wrap">
	<h1 class="interna-titulo"><span class="border"><?php echo get_the_title(); ?></span></h1>
	<div class="pg-interna-flex-grid flex">
		<div class="flex80">
			<div>
				<h2>Resultado da Busca por "<?php echo $_POST['cidade']; ?>"</h2>	
				<?php 
					error_reporting(E_ALL);
					$es = $_POST['estado_veiculo'];
					$cid = $_POST['cidade'];

					echo "<table id='tabelaCarros' class='resultado'>";
					echo "<thead>
							<th>CIDADE</th>
							<th>UF</th>
							<th>LOCADORA</th>
						</thead>
						<tbody>";



					$xml = simplexml_load_file('http://187.11.238.201/webservice/locadoras.asp?cidade=' . $cid . '&uf=' . $es,"SimpleXMLElement",LIBXML_NOCDATA);

					foreach($xml->locadora as $val) {
						
						$arrLocadora[] = array('EmpCod' =>  strval($val->EmpCod), 'EmpFan' => trim(strval($val->EmpFan)));

					}

					for($i=0;$i<sizeof($arrLocadora);$i++) {
						echo "<tr>
								<td>".$cid."</td>
								<td>".$es."</td>
								<td>
									<a href='".get_bloginfo('url')."/locador/?id=".$arrLocadora[$i]['EmpCod']."' title='".$arrLocadora[$i]['EmpFan']."'>".$arrLocadora[$i]['EmpFan']."</a>
								</td>
							</tr>";
					}


					echo "</tbody></table>";		
				?>	
			</div>
		</div>
		<aside id="sidebar" class="flex20">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>