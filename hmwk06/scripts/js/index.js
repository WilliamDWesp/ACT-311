
async function addTeachersToList(){
    try {
        const response = await fetch('/users/wwesp/act311/hmwk/hmwk06/scripts/js/data.json');
        const data = await response.json();
        var sel = document.querySelector("#stateSelect");
        var list = []
        for (var key in data) {
            //console.log(data[key]['instructor'])
            //console.log(data[key]['days'][0])
            if(!list.includes(data[key]['instructor'])){
                var option = document.createElement("option");
                option.text = data[key]['instructor'];
                option.id = data[key]['instructor'];
                sel.add(option);
                
                list.push(data[key]['instructor']); 
            }
        }
        //console.log(list)
        return data;

        //const best = moviesRating.sort((movie1, movie2) => movie2.score - movie1.score)[0].title;

    } catch(error) {
       console.log(error)
    }
}

async function getTeacherData(button){
    try {
        const response = await fetch('/users/wwesp/act311/hmwk/hmwk06/scripts/js/data.json');
        const data = await response.json();
        var val =  button.options[button.selectedIndex].id
        
        let prof  = new instructor(val);
        
        for (var key in data) {
            
            if(data[key]['instructor']===val){
                let newcl = new classForIns(data[key]['course'],data[key]['times'][0],data[key]['days'][0])
                prof.addClass(newcl)
            }
        }
        prof.sort()
        //prof.print()
        addDataToList(prof)
        
        return data;

        //const best = moviesRating.sort((movie1, movie2) => movie2.score - movie1.score)[0].title;

    } catch(error) {
       console.log(error)
    }
}

function addDataToList(instruc){
    
    var ul = document.querySelector("#popList");
    ul.innerHTML ="";
    var li = document.createElement("li");
    li.appendChild(document.createTextNode("Classes : "+instruc.name));
    li.classList.add("list-group-item");
    ul.appendChild(li);
    
    var arrOfclasses = instruc.arrOfclasses
    
    arrOfclasses.forEach(function(value){
        li = document.createElement("li");
        var string = value.toString(); 
        li.appendChild(document.createTextNode(string));
        li.classList.add("list-group-item");
        ul.appendChild(li);
    })
    
    
    
    
    
    
    
}



class instructor {
    constructor(name) {
        this.name = name;
        this.arrOfclasses = [];
    }
    addClass(clas){
        this.arrOfclasses.push(clas)
    }
    sort() {
        this.arrOfclasses.sort(function(a,b){
            var arr = ['M','T','W','R']
            //console.log(b.charAt(0))
            
            if(a.day.charAt(0)=='' && b.day.charAt(0)=='' ){
                    return 0;
            }
            else if(a.day.charAt(0)==''){
                    return 1;
            }
            else if(b.day.charAt(0)==''){
                    return -1;
            }
            //console.log(a,b)
            var indexa= arr.indexOf(a.day.charAt(0))
            var indexb= arr.indexOf(b.day.charAt(0))
            //console.log(indexa,indexb)
            if(indexa==indexb){
                //console.log(0)
                
                //console.log(a.time,b.time)
                
                
                var acont = a.time.includes("AM")
                var bcont = b.time.includes("AM")
                //console.log(a.time,acont)
                //console.log(b.time,bcont)
                if(acont == bcont){
                    //console.log("Matchssss")
                    var asplit = a.time.split(':')
                    var bsplit = b.time.split(':')
                    //console.log(asplit);
                    
                    if(asplit[0]==bsplit[0]){
                        return 0;
                    }
                    else if(asplit[0]<bsplit[0]){
                        return -1
                    }
                    else{
                        return 1
                    }
                    
                    
                    return 0;
                }
                else if(a){
                   return 1 
                }
                else{
                   return -1
                }
                

            }
            else if(indexa<indexb){
                //console.log(1)
                return -1;
            }
            else{
                //console.log(-1)
                return 1;
            }


        })
        
    }
    
    print(){
        this.arrOfclasses.forEach(function(value){
            console.log(value)
        })
    }
}

class classForIns {
    constructor(name,time,day) {
        this.name = name;
        this.time = time;
        this.day = day;
    }
    toString(){
        return "Name: "+this.name+" Time: "+((this.time=='-')?"Online":this.time)+" Day: "+((this.day=='')?"Online":this.day); 
    }
}