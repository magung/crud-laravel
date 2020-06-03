@extends('master')

@section('judul_halaman', 'Highcharts')

@section('body')
	
	<section class="content">
	
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<div id="grafik"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			</div>
		</div>

	</section>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script type="text/javascript">
		$(function(){
 
			
 
 
			Highcharts.chart('grafik', {
			    chart: {
			        type: 'column'
			    },
			    title: {
			        text: 'Perbandingan Berdasarkan Jenis Kelamin'
			    },
			    subtitle: {
			        text: 'Per Tahun Akhir Masa Kerja'
			    },
			    xAxis: {
			        categories: {!! json_encode($grafik['category']) !!},
			        crosshair: true
			    },
			    yAxis: {
			        min: 0,
			        title: {
			            text: 'Jumlah'
			        }
			    },
			    tooltip: {
			        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
			        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
			            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
			        footerFormat: '</table>',
			        shared: true,
			        useHTML: true
			    },
			    plotOptions: {
			        column: {
			            pointPadding: 0.2,
			            borderWidth: 0
			        }
			    },
			    series: {!! json_encode($grafik['series']) !!}
			});
 
 
			
		})
	</script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

@endsection