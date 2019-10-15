<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<title>Test</title>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="border rounded controles" style="width: 600px; height: 700px;">
				<?php 
					$canal = $_GET['ch'];

					if ($canal == 1) {
						echo '<iframe class="ml-4 mt-2 frame" id="skysignage_preview" src="http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1129&tvmode=horizontal"></iframe>';
					}

					if ($canal == 2) {
						echo '<iframe class="ml-4 mt-2 frame" id="skysignage_preview" src="http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1130&tvmode=horizontal"></iframe>';
					}

					if ($canal == 3) {
						echo '<iframe class="ml-4 mt-2 frame" id="skysignage_preview" src="http://www.skysignage.com/s/front/channel_preview.php?ID_channel=1131&tvmode=horizontal"></iframe>';
					}

					if (!$canal) {
						// al  no econtrar la url para el iframe (preview) elegi esta imagen
						echo '<iframe class="ml-4 mt-2 frame" id="skysignage_preview" src="preview.png"></iframe>';
					}
				?>
				
				<div class="botones ml-5">
					<button class="btn btn-primary btnVideo">Video</button>
					<button class="btn btn-primary ml-5 btnImagen">Image</button>
					<button class="btn btn-primary ml-5 btnAPI">API</button>
				</div>
			</div>

			<div class="border rounded col-4 ml-4 api d-none">
				<h2>API Infos: </h2>
				<?php 
					$curl = curl_init();

					curl_setopt_array($curl, array(
					  CURLOPT_URL => "http://www.ngine.co/test/api/index.php",
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_TIMEOUT => 30,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "GET",
					  CURLOPT_HTTPHEADER => array(
						"cache-control: no-cache",
						"Content-Type: application/json",
						"Accept: application/json"
					  ),
					));
					
					$response = curl_exec($curl);
					$err = curl_error($curl);
					
					curl_close($curl);

					$respXML = simplexml_load_string($response);
					if ($respXML) {
						echo 'Id: ' . $respXML->ad->id; // echo '<br>';
						echo 'Honoraries: ' . $respXML->ad->honoraires.PHP_EOL;
						echo 'Agence: ' . $respXML->ad->agence;
					} else {
						echo "El JSON devuelve un Syntax Error, esta mal formado";
					}
				?>

				
			</div>
		</div>
		
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="scripts.js"></script>
</body>
</html>