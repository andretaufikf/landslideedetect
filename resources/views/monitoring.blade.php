<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Landslide Detector IoT</title>

    <!-- panggil jquery untuk realtime -->

    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>


  <!-- ajax untuk realtime -->

  <script type="text/javascript">
    $(document).ready(function() {
  setInterval(function() {
    $("#suhu").load("{{ url('bacasuhu') }}");
    $("#kelembaban").load("{{ url('bacakelembaban') }}");
    $("#longitude").load("{{ url('bacalongitude') }}");
    $("#latitude").load("{{ url('bacalatitude') }}");
    $("#Ax").load("{{ url('bacaAx') }}");
    $("#Ay").load("{{ url('bacaAy') }}");
    $("#Az").load("{{ url('bacaAz') }}");
    $("#Gx").load("{{ url('bacaGx') }}");
    $("#Gy").load("{{ url('bacaGy') }}");
    $("#Gz").load("{{ url('bacaGz') }}");
    $("#Mx").load("{{ url('bacaMx') }}");
    $("#My").load("{{ url('bacaMy') }}");
    $("#Mz").load("{{ url('bacaMz') }}");
  }, 1000);
});

  </script>
  </head>
  <body>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monitoring System</title>
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    .header-container {
      text-align: center;
      margin-top: 50px;
    }

    .header-container img {
      width: 150px;
      margin-bottom: 20px;
    }

    .header-container h2 {
      font-size: 2rem;
      margin: 0;
      color: #007bff;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
      background: linear-gradient(to right, #28a745, #007bff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      line-height: 1.5;
    }

    .subtitle {
      font-size: 1.5rem;
      color: #555;
    }

    .card {
      border-radius: 10px;
      border: none;
      transition: transform 0.3s ease-in-out;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 20px;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-header {
      background-color: #28a745;
      color: white;
      border-radius: 10px 10px 0 0;
      text-align: center;
      padding: 15px;
    }

    .card-body {
      padding: 30px;
      font-size: 70px;
      font-weight: bold;
      color: #333;
      text-align: center;
    }

    .card-body span {
      display: inline-block;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }

    .chart-container {
      margin: 30px 0;
    }

    .chart {
      width: 100%;
      height: 400px;
    }
  </style>
  <!-- panggil file boostrap -->
  <link rel="stylesheet" type="text/css"href="public/assets/css/bootstrap.min.css">
  <script type="text/javascript" src="public/assets/js/jquery-3.4.0.min.js"></script></script>
  <script type="text/javascript" src="public/assets/js/mdb.min.js"></script></script>
  <script type="text/javascript" src="public/jquery/jquery-latest.js"></script></script>

</head>
<body>
  <!-- Website Header with Logo and Title -->
  <div class="header-container">
    <img src="{{ ('images/Unsil.png') }}" alt="UNSIL Logo">
    <h2>Monitoring Pergeseran Tanah Rawan Bencana Longsor<br>
      <span class="subtitle">Berbasis Internet of Things</span>
    </h2>
  </div>

  <!-- Sensor Temperature and Humidity Display -->
  <div class="container" style="margin-top: 30px;">
    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Suhu Tanah</h4>
          </div>
          <div class="card-body">
            <span id="suhu">0</span> <span style="font-size: 24px; vertical-align: top;">°C</span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Kelembapan Tanah</h4>
          </div>
          <div class="card-body">
            <span id="kelembaban">0</span> <span style="font-size: 24px; vertical-align: top;">%</span>
          </div>
        </div>
      </div>
    </div>

    <!-- GPS Sensor Display -->
    <div class="row justify-content-center text-center">
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Longitude</h4>
          </div>
          <div class="card-body">
            <span id="longitude">0.0000</span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Latitude</h4>
          </div>
          <div class="card-body">
            <span id="latitude">0.0000</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Accelerometer Sensor Display -->
    <div class="row justify-content-center text-center">
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Accelerometer X</h4>
          </div>
          <div class="card-body">
            <span id="Ax">0</span> <span style="font-size: 24px; vertical-align: top;">m/s²</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Accelerometer Y</h4>
          </div>
          <div class="card-body">
            <span id="Ay">0</span> <span style="font-size: 24px; vertical-align: top;">m/s²</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Accelerometer Z</h4>
          </div>
          <div class="card-body">
            <span id="Az">0</span> <span style="font-size: 24px; vertical-align: top;">m/s²</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Gyroscope Sensor Display -->
    <div class="row justify-content-center text-center">
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Gyroscope X</h4>
          </div>
          <div class="card-body">
            <span id="Gx">0</span> <span style="font-size: 24px; vertical-align: top;">°/s</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Gyroscope Y</h4>
          </div>
          <div class="card-body">
            <span id="Gy">0</span> <span style="font-size: 24px; vertical-align: top;">°/s</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Gyroscope Z</h4>
          </div>
          <div class="card-body">
            <span id="Gz">0</span> <span style="font-size: 24px; vertical-align: top;">°/s</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Magnetometer Sensor Display -->
    <div class="row justify-content-center text-center">
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Magnetometer X</h4>
          </div>
          <div class="card-body">
            <span id="Mx">0</span> <span style="font-size: 24px; vertical-align: top;">μT</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4>Magnetometer Y</h4>
          </div>
          <div class="card-body">
            <span id="My">0</span> <span style="font-size: 24px; vertical-align: top;">μT</span>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-lg">
          <div class="card-header">
            <h4 >Magnetometer Z</h4>
          </div>
          <div class="card-body">
            <span id="Mz">0</span> <span style="font-size: 24px; vertical-align: top;">μT</span>
          </div>
        </div>
      </div>
    </div>
  </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>