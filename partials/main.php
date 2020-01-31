<main class="container text-center">
   <h1 class="display-1">Weather Forecast </h1>
   <h2 class="display-4">Nairobi coordinates: 1.2921,-36.8219</h2>

   

   <?php
    
     {
        require 'forecast_current.php';
        require 'forecast_hourly.php';
        require 'forecast_daily.php';
     }
    
?>
   </main>