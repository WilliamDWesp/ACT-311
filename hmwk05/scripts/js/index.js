function importStates(){
    //var img = document.querySelector("#randimage");
    fetch('/users/wwesp/act311/hmwk/hmwk05/scripts/js/states.json')
    .then(response => response.json())
    .then(data => {
        //console.log(data)
        var sel = document.querySelector("#stateSelect");
        
        for (var key in data) {
            var option = document.createElement("option");
            option.text = data[key].name;
            option.id = data[key].Code;
            sel.add(option);
        }
    });
}

function filldog(){
    var img = document.querySelector("#randimage");
    fetch('https://dog.ceo/api/breeds/image/random')
    .then(response => response.json())
    .then(data => {
        img.src = data.message
    });
}


function displayData(){
    var sel = document.querySelector("#stateSelect");
    var val =  sel.options[sel.selectedIndex]
    //console.log(val)
    if(val.id =="bad"){return;}
    fetch('https://datausa.io/api/data?Geography='+val.id+'&measures=Population')
    .then(response => response.json())
    .then(data => {
        //console.log(data.data)
        var ul = document.querySelector("#popList");
        ul.innerHTML ="";
        var li = document.createElement("li");
        li.appendChild(document.createTextNode("Population Over Time:"));
        li.classList.add("list-group-item");
        ul.appendChild(li);
        
        for (var key in data.data) {
            li = document.createElement("li");
            console.log(data.data[key])
            var string = data.data[key].Year + ": "+data.data[key].Population ; 
            li.appendChild(document.createTextNode(string));
            li.classList.add("list-group-item");
            ul.appendChild(li);
        }
        
        
    });
}
