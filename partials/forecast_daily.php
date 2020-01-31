
<div class="row">
     <?php
         //set counter to zero
         $i=0;
        //Start of foreach loop of Hourly forecast
        foreach($forecast->daily->data as $day):
            $average_temp=(round($day->temperatureHigh)+round($day->temperatureLow))/2;
        ?>
         <h2 class="display-4">Daily Temperatures</h2>
  <div class="col-12 col md-4">
  <div class="card p-4 mb-4">
 
  <h2 class="h4">
  <?php echo date("l", $day->time); ?>
  </h2>
   <h3 class="display-4">
      Average temperature:<?php echo  round($average_temp) ?>&deg;
      </h3>
    <div class="d-flex justify-content-between">
  <p class="lead">
  High temperature: <?php echo round($day->temperatureHigh); ?>&deg;
  </p>
  <p class="lead">
  Low Temperature: <?php echo round($day->temperatureLow); ?>&deg;
  </p>
    </div>
  <p class="lead">
   <span class="sr-only">Humidity</span> <?php echo $day->humidity*100;?>%
  </p>
  <p class="m-0">
  <?php echo $day->summary;?>
  </p>
  </div>
  </div>
  <?php
   //increase counter for each iteration
   $i++;
    //stop loop after 12 iterations
    if($i==12)break;
  // End of foreach loop 
   endforeach;
  ?>
</div>