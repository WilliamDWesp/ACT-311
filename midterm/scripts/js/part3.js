
async function addTeachersToList(){
    try {
        const response = await fetch('/users/wwesp/act311/hmwk/midterm/scripts/js/CSMP.json');
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
        const response = await fetch('/users/wwesp/act311/hmwk/midterm/scripts/js/CSMP.json');
        const data = await response.json();
        var val =  button.options[button.selectedIndex].id
        
        let prof  = new instructor(val);
        
        for (var key in data) {
            
            if(data[key]['instructor']===val){
                console.log(data[key])
                let newcl = new classForIns(data[key]['course'],data[key]['times'][0],data[key]['days'][0],data[key]['hours'],data[key]['crn'])
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
    
    var div = document.querySelector("#intoGrid");
    var innerHTML  = "<div class='col-4 text-white bg-dark'>Name</div><div class='col-2 text-white bg-dark'>CRN</div><div class='col-1 text-white bg-dark'>Hours</div><div class='col-4 text-white bg-dark'>Time</div><div class='col-1 text-white bg-dark'>Day</div>"
    
    console.log(div.innerhtml)
    
    var arrOfclasses = instruc.arrOfclasses
    
    arrOfclasses.forEach(function(value){
        innerHTML += "<div class='col-4'>"+value.name+"</div><div class='col-2'>"+value.crn+"</div><div class='col-1'>"+value.hours+"</div><div class='col-4'>"+value.getTime()+"</div><div class='col-1'>"+value.getDay()+"</div>"
        //var string = value.toString(); 
        
    })
    div.innerHTML  = innerHTML ;
    
    
    
    
    
    
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
                return compareTime(a.time,b.time)
                

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
function compareTime(timea,timeb){
    //console.log(timea,timeb)
    var asplit = timea.split('-')
    var bsplit = timeb.split('-')
    var atimesplit = asplit[0].split(':')
    var btimesplit = bsplit[0].split(':')
    var acont = atimesplit[1].includes("AM")
    var bcont = btimesplit[1].includes("AM")
    //console.log(btimesplit)

    if(acont === bcont){
        //console.log(acont,bcont)
        //console.log("Matchssss")

        if(parseInt(atimesplit[0])==parseInt(btimesplit[0])){
            console.log("happen1")
            return 0;
        }
        else if(parseInt(atimesplit[0])<parseInt(btimesplit[0])  && parseInt(btimesplit[0])!=12){
            console.log("happen2")
            return -1
        }
        else{
            console.log("happen3")
            return 1
        }
    }
    else if(bcont){
       return 1 
    }
    else{
       return -1
    }
   

}
class classForIns {
    constructor(name,time,day,hours,crn) {
        this.name = name;
        this.time = time;
        this.day = day;
        this.hours = hours
        this.crn = crn
    }
    
    getTime(){
        return (this.time=="-")?"Online":this.time
    }
    getDay(){
        return (this.day=="")?"Online":this.day
    }
    
    toString(){
        return "Name: "+this.name+" Time: "+((this.time=='-')?"Online":this.time)+" Day: "+((this.day=='')?"Online":this.day); 
    }
}