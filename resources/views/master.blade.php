<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
        <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="collapse navbar-collapse">
        <a class="navbar-brand" href="/">Data Pelamar<a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Table</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/highcharts">Highcharts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/diagrampie">Diagram Pie</a>
            </li>
        </ul>
    </div>
    </nav>  

    <div class="card">
        <div class="card-header">
            <h3> @yield('judul_halaman') </h3>
        </div>
        <div class="card-body">
            @yield('body')
        </div>
    </div>

    
</body>
</html>