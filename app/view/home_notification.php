                  <?php
include "../templates/header.php";
error_reporting(10);
require_once '../controllers/notification_connect.php';

/**
 * Created by CAS Team.
 */
?>
<div class="home-tabheader disaster-notify" id="hnotification">
        <div class="col-lg-4">
            <ul>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=earthquake"><i class="dis-cracked2" style=""></i>
                        <span>EARTHQUAKES - <?php  echo $edata;?></span></a></li>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=landslide"> <i class="dis-snowslide" style=""></i>
                        <span>LANDSLIDES - <?php  echo$ldata;?></span></a></li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=cyclone"> <i class="dis-hurricane" style=""></i>
                        <span>CYCLONES - <?php  echo$cdata;?></span></a></li>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=flood"> <i class="dis-waves8" style=""></i>
                        <span>FLOODS -<?php echo$fdata;?></span></a></li>
            </ul>
        </div>
        <div class="col-lg-4">
            <ul>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=tsunami"> <i class="dis-tsunami1" style=""></i>
                        <span>TSUNAMI -<?php echo$tdata;?></span></a></li>
                <li><a class="diasster-not" href="../app/controllers/disaster_tabs.php?id=reservoir"><i class="dis-sign51" style=""></i>
                        <span>RESERVOIR - <?php  echo$rdata;?></span></a></li>
            </ul>
        </div>
</div>
<div>
    <div id="DisasterView">
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $("a.diasster-not").on("click", function(e) {
            e.preventDefault();
            $("#DisasterView").load(this.href);
        });
    });
    window.onload = $("#DisasterView").load('../app/controllers/disaster_tabs.php');
</script>
