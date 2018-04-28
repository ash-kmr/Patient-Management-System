/*
Author : Sidharth Nahar
Entry No: 2016csb1043
Use : Javascript file for self-built Calender function
*/
var Months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

/*This function Provides Number of Days given month and Year*/
function daysInMonth (month, year) {

         return new Date(year, month, 0).getDate();
}

/*This function Changes inner Html list of number of days*/
function showDates(MonthName,Year){

        
        var date = new Date("1 "+MonthName+" "+Year);
        /*Get Week number of 1st Date of each month*/
        var week = date.getDay();
        if(week == 0)
                week = 7;
        /*Required to pass as argument to daysInMonth function*/
        var monthNo = date.getMonth()+1;
        
        
        var demo = document.getElementById("list-Days"); 
        
        var i,html="";
        /*Emties the slot from Mn to day 1st appears*/
        for(i=1;i<week;i++)
                html += "<li> </li>";
        
        /*Fills Out entruies for first row*/        
        for(i=week;i<=7;i++)
                html += "<li>"+"<button style='border: none;background: inherit;cursor:pointer;color:inherit' onclick='getTimeSlot(this)'>"+(i-week+1)+"</button>"+"</li>";
        
        /*Fills Out Remaining Entries*/        
        for(i=7-week+2;i<=daysInMonth(monthNo,Year);i++){
                if(i==23){
                        html += "<li>"+"<button style='border: none;background: inherit;cursor:pointer;color:inherit' class='back' onclick='getTimeSlot(this)'>"+i+"</button>"+"</li>";
                }
                else{
                        html += "<li>"+"<button style='border: none;background: inherit;cursor:pointer;color:inherit' onclick='getTimeSlot(this)'>"+i+"</button>"+"</li>";}
                
        }
        demo.innerHTML = html;
            
}

/*Onclick next button Display next month days*/
function getNext(){

        /*Extract Monthname and Year from elemnts*/
        var MonthName = document.getElementById("monthName").innerHTML;
        var Year      = document.getElementById("Year").innerHTML;

        var date = new Date("1 "+MonthName+" "+Year);
        
        /*Get MonthNo from Monthname and get result*/
        var monthNo = date.getMonth() + 1;
        
        /*Special case for December*/
        if(monthNo == 12){
        
                /*Display list elements and change Month names and Year*/
                showDates(Months[0],Number(Year)+1);
                document.getElementById("monthName").innerHTML = "January";
                document.getElementById("Year").innerHTML = Number(Year)+1;
        }
        else{
                /*Display for reular case*/
                showDates(Months[monthNo],Year);
                document.getElementById("monthName").innerHTML = Months[monthNo];
                
        }
        
        
}

/*Onclick of Prev button Display prev month*/
function getPrev(){

        /*Get monthname and Year from div elements*/
        var MonthName = document.getElementById("monthName").innerHTML;
        var Year      = document.getElementById("Year").innerHTML;
        var date = new Date("1 "+MonthName+" "+Year);
        /*Get month number from month name*/
        var monthNo = date.getMonth() - 1;
        
        /*Special case for January month*/
        if(monthNo == -1){
        
                showDates(Months[11],Number(Year)-1);
                document.getElementById("monthName").innerHTML = "December";
                document.getElementById("Year").innerHTML = Number(Year)-1;
        }
        else{
                showDates(Months[monthNo],Year);
                document.getElementById("monthName").innerHTML = Months[monthNo];
        }

}

/*Get JSON data from php and extract SESSION variables*/
function getTimeSlot(x){

        var ele = document.getElementsByClassName("back");
        var part = ele[0];
        part.classList.remove("back");
        x.className = "back";
        
        document.getElementById("Date").innerHTML = x.innerHTML;

        var MonthName = (document.getElementById("monthName").innerHTML).toString();
        //var c = MonthName.charAt(0);
        var Year      = document.getElementById("Year").innerHTML;
        var date      = x.innerHTML; 
        
        var dummy = MonthName.trim();
        //var dummy = "March";
        var MonthNumber = Months.indexOf(dummy) + 1;
        
        var query     = Year+"-"+MonthNumber+"-"+date;
        var url = "";
        
        
        $(document).ready(function(){
        
                url = "getTime.php?q="+query;
                
                $.getJSON(url,function(json){
                
                        //alert(json);
                        var html = "";
                        
                        
                                  var keys = Object.keys(json);
                                  html += "<div>";
                                  keys.forEach(function(key) {
                                  
                                   
                                    html += "<input class= 'Time_Slots' onchange='changeInputValues("+date+")' name = 'Slots' type = 'radio' id = '" + key + "'>";
                                    html += "<label>"+json[key]+"</label>";
                                    
                                    //html += "<h1>Bad</h1>";
                                  });
                                  html += "</div><br>";
                                  
                                  
                      
                       
                       $("#Natural").html(html);
                
                });
        
        });
        
      
              
                                
        //document.getElementById("demo").innerHTML = dummy;

}

function changeInputValues(x){

        
        var Year = document.getElementById("Year").innerHTML;     
        var date = x;
        var MonthName = (document.getElementById("monthName").innerHTML).toString();

        MonthName = MonthName.trim();
        var MonthNumber = Months.indexOf(MonthName) + 1;

        var complete = Year+"-"+MonthNumber+"-"+date;
        //alert(complete);
        document.getElementById("Date_Appointment").innerHTML = complete;
        
        var Time_Slots = document.getElementsByClassName('Time_Slots');
        
        //var Elements;
        for(var i =0 ;i<Time_Slots.length;i++){
        
                if(Time_Slots[i].checked){
                
                        //alert(Time_Slots[i].getAttribute("id"));
                        document.getElementById('Slot_ID').innerHTML = Time_Slots[i].getAttribute("id");
                }       
        }
        
        
}
