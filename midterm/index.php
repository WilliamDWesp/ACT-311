<?php
include "/Include/header.php";

?>

<div class="col-12 row pt-3 pb-3 m-0 p-0 mb-3 bg-dark text-white">
        
        <h1>William Wesp MidTerm</h1>
        
        
</div>

<div class="col-3 row">
    <div class="col-12 mb-2">
        Select a step
    </div>

    <div class="col-12">
        <button type="button"  class="btn btn-info"  onclick="NewTab('part1.php')">
            1
        </button>
        <button type="button"  class="btn btn-info"  onclick="NewTab('part2.php')">
            2
        </button>
        <button type="button" class="btn btn-info"  onclick="NewTab('part3.php')">
            3
        </button>
        <button type="button" class="btn btn-info"  onclick="NewTab('part4.php')">
            4
        </button>



        <button type="button"  class="btn btn-info"  onclick="NewTab('part5.php')">
            5
        </button>
        <button type="button" class="btn btn-info"  onclick="NewTab('part6.php')">
            6
        </button>
        <button type="button" class="btn btn-info"  onclick="NewTab('part7.php')">
            7
        </button>

    </div>
</div>


<script>
function NewTab(x) { 
    window.open( 
      "https://webservices.missouriwestern.edu/users/wwesp/act311/hmwk/midterm/Pages/"+x, "_blank"); 
} 

</script>

<?php

include "/Include/footer.php";
?>