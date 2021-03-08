<?php
include "/../Include/header.php";

?>


<link rel="stylesheet" type="text/css" href="/users/wwesp/act311/hmwk/midterm/scripts/Css/part4/part4.css">

<div class="col-12 row pt-3 pb-3 m-0 p-0 mb-3 bg-dark text-white">
        
        <h1>William Wesp MidTerm Part 4</h1>
        
        
</div>


<div class="container-fluid row">
    
    
    <div class="col-12 row">
        <div class="col-6">
            <select class="form-control form-control-lg" id="stateSelect" onchange="getTeacherData(this)">
                <option id="bad">Please Select a teacher</option>
            </select>
        </div>
        <div id="intoGrid" class="col-6 row"></div>
        
    </div>

    
</div>



<script src="/users/wwesp/act311/hmwk/midterm/scripts/js/part4.js"></script>

<script>
    addTeachersToList();
    //importStates();
    //displayData();
    
    
</script>


<?php

include "/../Include/footer.php";
?>