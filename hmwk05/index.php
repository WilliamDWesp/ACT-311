<?php
include "/Include/header.php";

?>

<div class="col-12 row pt-3 pb-3 m-0 p-0 mb-3 bg-dark text-white">
        
        <h1>William Wesp HMWK05</h1>
        
        
</div>


<div class="container-fluid row">
    
    
    <div class="col-8 row">
        <div class="col-6">
            <select class="form-control form-control-lg" id="stateSelect" onchange="displayData();">
                <option id="bad">Please Select State</option>
            </select>
        </div>
        <div class="col-6">
            <ul class="list-group" id="popList">
                <li class="list-group-item">Population Over Time:</li>
            </ul>
        </div>
        
    </div>
    <div class="col-4">
        <img id="randimage" class="img-fluid" src="" name="0" alt="Responsive image" style="  width:100%; max-height: 300px !important;"/>
    </div>
    
</div>



<script src="/users/wwesp/act311/hmwk/hmwk05/scripts/js/index.js"></script>

<script>
    filldog();
    importStates();
    displayData();
    
    
</script>


<?php

include "/Include/footer.php";
?>