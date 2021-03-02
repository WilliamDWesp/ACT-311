<?php
include "/Include/header.php";

?>

<div class="col-12 row pt-3 pb-3 m-0 p-0 mb-3 bg-dark text-white">
        
        <h1>William Wesp HMWK06</h1>
        
        
</div>


<div class="container-fluid row">
    
    
    <div class="col-12 row">
        <div class="col-6">
            <select class="form-control form-control-lg" id="stateSelect" onchange="getTeacherData(this)">
                <option id="bad">Please Select a teacher</option>
            </select>
        </div>
        <div class="col-6">
            <ul class="list-group" id="popList">
                <li class="list-group-item">Classes : </li>
            </ul>
        </div>
        
    </div>

    
</div>



<script src="/users/wwesp/act311/hmwk/hmwk06/scripts/js/index.js"></script>

<script>
    addTeachersToList();
    //importStates();
    //displayData();
    
    
</script>


<?php

include "/Include/footer.php";
?>