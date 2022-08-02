const data = fetch("http://localhost/HOTEL/api/read.php")
    .then((promise) => promise.json())
    .then((data) => {
        // console.log(data);
        return data.data;
        

    });

let business1 = 0 ;
let business2 = 0 ;
let low1 = 0 ;
let low2 = 0  ;
let economy1 = 0 ;
let economy2 = 0 ;

data.then((d) => {
    for (let i = 0; i < d.length; i++) {
        if (d[i].category == "business" && d[i].beds == '1'  ){
        business1 = d[i];
        }
        if (!business2 && d[i].category == "business" && d[i].beds == '2') {
            business2 = d[i];
        }
        if ( !economy1 && d[i].category == "economic" && d[i].beds == '1'){
            economy1 = d[i];
        }
        if (!economy2 && d[i].category == "economic" && d[i].beds == '2') {
            economy2 = d[i];
        }
        if (!low1 && d[i].category == "low" && d[i].beds == '1'  ){
            low1 = d[i];
        }
        if ( !low2 && d[i].category == "low" && d[i].beds == '2' ) {
            low2 = d[i];
        }
        
    }
    
    // document.getElementById("business1").innerHTML ="ksh: "+ business1.price;
    // document.getElementById("business2").innerHTML ="ksh: "+ business2.price;
    // document.getElementById("economy1").innerHTML ="ksh: "+ economy1.price;
    // document.getElementById("economy2").innerHTML ="ksh: "+ economy2.price;
    // document.getElementById("low1").innerHTML ="ksh: "+ low1.price;
    // document.getElementById("low2").innerHTML = "ksh: " + low2.price;
    addTag("business1", business1);
    addTag("business2", business2);
    addTag("economy1", economy1);
    addTag("economy2", economy2);
    addTag("low1", low1);
    addTag("low2", low2);
}
);
function addTag(cat, catVal) {
    if(catVal.price > 0 ){
    document.getElementById(cat).innerHTML ="ksh: "+ catVal.price;
    
    }
    else {
        document.getElementById(cat).innerHTML = "NO VACANT ROOM";
        document.getElementById(cat).style.fontSize = "0.9rem";
        document.getElementById(cat).className = "badge rounded-pill bg-warning text-dark";
        document.getElementById(cat).disabled = true;
        

    }
}