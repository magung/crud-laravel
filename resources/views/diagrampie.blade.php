@extends('master')

@section('judul_halaman', 'Diagram')

@section('body')
	<?php

	$laki = $grafik["series"][0]["data"][5];
	$pr = $grafik["series"][1]["data"][5];
	$total = $laki + $pr;
	$dataPoints = array( 
		array("label"=>"Laki - Laki", "y"=>$laki / $total * 100),
		array("label"=>"Perempuan", "y"=>$pr / $total * 100)
	)
	
	?>
	<script>
	window.onload = function() {
	
	
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		title: {
			text: "Perbandingan Berdasarkan Jenis Kelamin"
		},
		subtitles: [{
			text: "Per 2020 total : " + <?php echo $total; ?> 
		}],
		data: [{
			type: "pie",
			yValueFormatString: "#,##0.00\"%\"",
			indexLabel: "{label} ({y})",
			dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	
	}
	</script>
	
	<section class="content">


		<div class="row">
			<div class="col-md-6">
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			</div>
		</div>

	</section>

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection