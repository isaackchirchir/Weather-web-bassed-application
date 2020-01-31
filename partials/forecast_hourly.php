<ul class="list-group" style="margin:0 auto;max-width:320px;">
     <?php
         //set counter to zero
         $i=0;
        //Start of foreach loop of Hourly forecast
        foreach($forecast->hourly->data as $hour):
        ?>
  <li class="list-group-item d-flex justify-content-between">
  <p class="lead m-0">
  <?php echo date("g:i a", $hour->time); ?>
  </p>
  <p class="lead m-0">
  <?php echo round($hour->temperature); ?>&deg;
  </p>
  <p class="lead m-0">
   <span class="sr-only">Humidity</span> <?php echo $hour->humidity*100;?>%
  </p>
  </li>
  <?php
   //increase counter for each iteration
   $i++;
    //stop loop after 12 iterations
    if($i==7)break;
  // End of foreach loop 
   endforeach;
  ?>
</ul>