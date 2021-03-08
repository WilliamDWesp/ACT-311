async function addDeptToList(){
    
    const response = await fetch('/users/wwesp/act311/hmwk/midterm/scripts/js/Jsons/all.json');
    const data = await response.json();
    var sel = document.querySelector("#selectDept");
    for (var key in data) {
        //console.log(data[key])

        var option = document.createElement("option");
        option.text = data[key]['dept'];
        option.id = data[key]['filename'];
        sel.add(option);
       
    }
    sel.classList.remove("d-none");
    return data;
}

async function addInstructor(x){
    
    var selected = x.options[x.selectedIndex].id
    
    const response = await fetch('/users/wwesp/act311/hmwk/midterm/scripts/js/Jsons/'+selected);
    const data = await response.json();
    var sel = document.querySelector("#selectTeacher");
    sel.innerHTML=''
    var list = []
    for (var key in data) {
        if(!list.includes(data[key]['instructor'])){
            var option = document.createElement("option");
            option.text = data[key]['instructor'];
            option.id = data[key]['instructor'];
            sel.add(option);

            list.push(data[key]['instructor']); 
        }
    }
    sel.classList.remove("d-none");
    return data;
}


async function getTeacherData(button){
    
    var dept = document.querySelector("#selectDept");
    var dept = dept.options[dept.selectedIndex].id
    var professor =  button.options[button.selectedIndex].id
    
    const response = await fetch('/users/wwesp/act311/hmwk/midterm/scripts/js/Jsons/'+dept);
    const data = await response.json();
    var jsonArr = []
    for (var key in data) {
        if(data[key]['instructor']===professor){
            jsonArr.push(data[key])
        }
    }
    console.log(jsonArr)
    displayData(jsonArr)
    return data;

    //const best = moviesRating.sort((movie1, movie2) => movie2.score - movie1.score)[0].title;

}

function displayData(x){
    var table = document.getElementById("classTable").getElementsByTagName('tbody')[0];
    table.innerHTML = '';
    document.getElementById("classTable").classList.remove("d-none");
    
    for(var j in x){
        
        var row = table.insertRow(0);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        cell1.innerHTML = x[j]['course'];
        cell2.innerHTML = x[j]['crn'];
        cell3.innerHTML = x[j]['hours'];
        cell4.innerHTML = x[j]['days'][0];
        cell5.innerHTML = x[j]['times'][0];
    } 
    
}