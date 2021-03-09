<?php
include "/../Include/header.php";

?>



<div class="col-12 row pt-3 pb-3 m-0 p-0 mb-3 bg-dark text-white">
        
        <h1>William Wesp MidTerm Part 6</h1>
        
        
</div>


<div class="container-fluid row">
    
    
    <div class="col-12 row">
        <div class="col-6 row ">
            <div class="col-6 mb-3">
                <select class="form-control form-control-lg d-none" id="selectDept" onchange="addInstructor(this)">
                    <option id="bad">Select Dept</option>
                </select>
            </div>
            <div class="col-6 ">
                <select class="form-control form-control-lg d-none" id="selectTeacher" onchange="getTeacherData(this)">
                    <option id="bad">Please Select a teacher</option>
                </select>
            </div>
            
        </div>
        <div id="intoGrid" class="col-6 row ">
            <table class="table d-none" id="classTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">course</th>
                        <th scope="col">crn</th>
                        <th scope="col">hours</th>
                        <th scope="col">day</th>
                        <th scope="col">time</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
        
    </div>
    <div class="col-12">
        <ul class="list-group d-none" id="badReq">
            <li class="list-group-item">Bad Requests: </li>
        </ul>
    </div>

    
</div>



<script src="/users/wwesp/act311/hmwk/midterm/scripts/js/part6.js"></script>

<script>
    addDeptToList();
    //importStates();
    //displayData();
    
    
</script>


<?php

include "/../Include/footer.php";
?>