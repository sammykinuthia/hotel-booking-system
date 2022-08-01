const data = fetch("http://localhost/HOTEL/api/read.php")
    .then((promise) => promise.json())
    .then((data) => {
        return data.data;
// console.log(data.data);
        

    });
let business1;
let business2;
let low1;
let low2;
let economy1;
let economy2;
data.then((d) => {
    d.forEach(e => {
        if (!business1 && e["category"] == "business" && e['beds'] == 1  ){
            business1 = e;
        }
        if (!business2 && e["category"] == "business" && e['beds'] == 2) {
            business2 = e;
        }
        if ( !economy1 && e["category"] == "economic" && e['beds'] == 1){
            economy1 = e;
        }
        if (!economy2 && e["category"] == "economic" && e['beds'] == 2) {
            economy2 = e;
        }
        if (!low1 && e["category"] == "low" && e['beds'] == 1  ){
            low1 = e;
        }
        if ( !low2 && e["category"] == "low" && e['beds'] == 2 ) {
            low2 = e;
        }
    });
console.log(economy2);
console.log(low1);
    console.log(business1);
    let val = getRadio('business');
    // console.log(val);
    
});


function getRadio(name){
    let ele = document.getElementsByName(name);
    for (let i = 0; i < ele.length; i++) {
        if(ele[i].checked){
            return ele[i].value;
        }
        
    }
}