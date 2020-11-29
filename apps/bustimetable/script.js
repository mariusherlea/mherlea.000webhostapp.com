

function AutoRefresh( t ) {
              setTimeout("location.reload(true);", t);
          
var Cugir = ["07:00", "08:00", "09:00", "10:35","12:05", "13:05", "14:05", "15:05", "16:00","17:30","18:20","19:30","23:10"];
var Vinerea=["06:20", "07:20", "08:20", "09:30", "11:00", "12:30", "13:30", "14:30", "15:30", "16:50","18:00","18:50","22:30"];
var CugirSD=["07:45","08:35","10:35","12:35"];
var VinereaSD=["07:30","09:00","11:00","13:00"];

var currentTime = new Date();
var hours = (currentTime.getHours() < 10? '0': '')+currentTime.getHours();
   var minutes = (currentTime.getMinutes() < 10? '0' : '') + currentTime.getMinutes();
   var nowTime = hours + ":" + minutes;

  
 function renderTimeline(datePoint, id) {

   var currentTime = new Date();
   var hours = (currentTime.getHours() < 10? '0': '')+currentTime.getHours();
   var minutes = (currentTime.getMinutes() < 10? '0' : '') + currentTime.getMinutes();
   var nowTime = hours + ":" + minutes;
   
   var textCugir_ = "<ul style='list-style-type: none;'>";
         for (i = 0; i < datePoint.length; i++) {
             if (datePoint[i] < nowTime){
                 textCugir_ += "<li style='color:Grey'>" + datePoint[i] + "</li>";
                 // console.log("Coloram Cugir["+i+"] = "  + datePoint[i] + "\n nowTime = " + nowTime + "\n raspuns = " + (datePoint[i] < nowTime))
             } else {
                 textCugir_ += "<li>" + datePoint[i] + "</li>";
                 // console.log(nowTime+" "+datePoint[i]);
             }
         }
         textCugir_ += "</ul>";
     document.getElementById(id).innerHTML = textCugir_;

 }

   renderTimeline(Cugir, "cugir");
   renderTimeline(CugirSD, "cugirSD");
   renderTimeline(Vinerea, "vinerea");
   renderTimeline(VinereaSD, "vinereaSD");

   // document.getElementById("nowTime").innerHTML = nowTime;
   // console.log(nowTime);
  
   document.getElementById("time").innerHTML = nowTime;

}





