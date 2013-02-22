<link rel="stylesheet" href="https://petitions.whitehouse.gov/sites/default/files/petitions-api-examples/thermometer/css/thermometer.css" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="https://petitions.whitehouse.gov/sites/default/files/petitions-api-examples/thermometer/js/date.format.js"></script>
<script type="text/javascript" src="https://petitions.whitehouse.gov/sites/default/files/petitions-api-examples/thermometer/js/thermometer.js"></script>
<div id="thermometer-widget">
  <div id="top-container">
    <div id="petition-title"></div>
    <div id="petition-info">
      <span class="label">Created:</span> <span id="created"></span> |
      <span class="label">Issues:</span> <span id="issues"></span>
    </div>
  </div>
  <div id="main-container" class="clearfix">
    <div id="data-container">
      <div id="item-one" class="clearfix">
        <div class="item-label">
          Total signatures on this petition
        </div>
        <div class="data">
          <span class="display-total-signatures"></span>
        </div>
      </div>
      <div id="item-two" class="clearfix">
        <div class="item-label">
          Signatures needed by <span id="response-deadline"></span> to reach goal of <span id="response-threshold"></span>
        </div>
        <div class="data">
          <span id="remaining-signatures"></span>
        </div>
      </div>
      <div id="item-three" class="clearfix">
        <div id="response-link"></div>
      </div>
    </div>
    <div id="display" class="clearfix">
      <div id="top"></div>
      <div id="middle">
        <div class="value"></div>
      </div>
      <div id="base">
        <span class="display-total-signatures"></span>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $.ajax({
      url: 'https://petitions.whitehouse.gov/api/v1/petitions/<?php echo $petition_id; ?>.jsonp?key=aVmupNPJmgkweR9',
      dataType: 'jsonp',
      success: function(data) {
        petitionData(data);
      }
    });
  });
</script>
