<div class="card p-4" style="margin:0 auto;max-width:320px;">
     <h2> Current Forecast</h2>
     <i class="wi wi-night-sleet display-2 mb-3"></i>

     <h3 class="display-2"><?php echo $temperature_current; ?>&deg; </h3>
     <h3> Humidity: <?php echo $humidity_current; ?> %</h3>
     <p class="lead"><?php echo $summary_current; ?></p>
     <p class="lead">Wind Speed:<?php echo $windspeed_current; ?><abbr title="miles per hour">MPH</abbr></p>
     </div>