const data = fetch("http://localhost/HOTEL/api/read.php")
    .then((promise) => promise.json())
    .then((data) => {
        // console.log(data);
        return data.data;
        

    });
let business1;
let business2;
let low1;
let low2;
let economy1;
let economy2;
data.then((d) => {
    d.forEach(e => {
        console.log(e);
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
    document.getElementById("business1").innerHTML ="ksh: "+ business1;
    document.getElementById("business2").innerHTML ="ksh: "+ business2;
    document.getElementById("economy1").innerHTML ="ksh: "+ economy1;
    document.getElementById("economy2").innerHTML ="ksh: "+ economy2;
    document.getElementById("low1").innerHTML ="ksh: "+ low1;
    document.getElementById("low2").innerHTML ="ksh: "+ low2;
    
});
