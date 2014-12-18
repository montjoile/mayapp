<div>
	<div id="page-wrapper">
        <div class="container-fluid">
              
        <div class="row">

            <div class="col-lg-12 text-center v-center" >
            	
				<form class="col-lg-12">
					<table border="1" style="margin:0px auto">
						<thead></thead>
						<tbody>
				
						<?php

						$index=count($resultado);
							for ($i=$index; $i>=1 ; $i--) { 
								switch ($resultado[$i]) {
									case '0':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/0.png') . "></div></td></tr>";
										break;
									case '1':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/1.png') . "></div></td></tr>";
										break;
									case '2':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/2.png') . "></div></td></tr>";
										break;
									case '3':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/3.png') . "></div></td></tr>";
										break;
									case '4':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/4.png') . "></div></td></tr>";
										break;
									case '5':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/5.png') . "></div></td></tr>";
										break;
									case '6':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/6.png') . "></div></td></tr>";
										break;
									case '7':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/7.png') . "></div></td></tr>";
										break;
									case '8':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/8.png') . "></div></td></tr>";
										break;
									case '9':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/9.png') . "></div></td></tr>";
										break;
									case '10':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/10.png') . "></div></td></tr>";
										break;
									case '11':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/11.png') . "></div></td></tr>";
										break;
									case '12':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/12.png') . "></div></td></tr>";
										break;
									case '13':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/13.png') . "></div></td></tr>";
										break;
									case '14':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/14.png') . "></div></td></tr>";
										break;
									case '15':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/15.png') . "></div></td></tr>";
										break;
									case '16':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/16.png') . "></div></td></tr>";
										break;
									case '17':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/17.png') . "></div></td></tr>";
										break;
									case '18':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/18.png') . "></div></td></tr>";
										break;
									case '19':
										echo "<tr><td><div align='center'> <img src=" . base_url('assets/images/19.png') . "></div></td></tr>";
									default:
										# code...
										break;
								}
							}
						?>
						</tbody>
					</table>
				</form>
			</div>
		</div>

</div>



<?php

function dibujar( $resultado, $nivel){

	//for ($i=1; $i<=$resultado[$])


	/*
	for ($i=0; $i<$resultado[$nivel][$nivel]['cero']; $i++)
		echo "<img src=" . base_url('assets/images/0.png') . ">";
	for ($i=0; $i<$resultado[$nivel][$nivel]['uno']; $i++)
		echo "<img src=" . base_url('assets/images/1.png') . ">";
	for ($i=0; $i<$resultado[$nivel][$nivel]['cinco']; $i++)
		echo "</br><img src=" . base_url('assets/images/5.png') . ">";
	echo "</br></br>";
	*/
}

?>

