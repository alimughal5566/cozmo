
<!--ticket bar-->
<div class="gallery_content">
       <h4 class="text-center obvs on_lappy" style="font-size:10px;">See below for free entry method.</h4>
      <?php
      $t=tickets($package->mc->id,0,1);
      $left =tickets($package->mc->id,0,0);
      
      if($package->mc->max_tickets > 0){
         $total =  ($t/$package->mc->max_tickets) * 100;
         if ($total < 10) {
             $total = $package->perc_of_dummy_tickets_sold();
             $dummy_count = $package->dummy_tickets_count();
             $sold_ticket =tickets($package->mc->id,0,1);
             $remaning = $dummy_count + $sold_ticket ;
             $left = $package->mc->max_tickets - $remaning;
         }
      }
      else{
      $total =  0;
      }
      ?>
      <div class="">
        <div class="ticket-left-info"><span>0</span><span><?php
        echo $left;
        ?> Left</span><span>{{ $package->mc->max_tickets }}</span></div>
        <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="{{ $t}}"
            aria-valuemin="0" aria-valuemax="{{ $package->mc->max_tickets }}" style="width:{{ $total}}%">
          </div>
        </div>
      </div>
    </div>