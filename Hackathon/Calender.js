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
        for(i=7-week+2;i<=daysInMonth(monthNo,Year);i++)
                html += "<li>"+"<button style='border: none;background: inherit;cursor:pointer;color:inherit' onclick='getTimeSlot(this)'>"+i+"</button>"+"</li>";
        
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

        var MonthName = document.getElementById("monthName").innerHTML;
        var Year      = document.getElementById("Year").innerHTML;
        var date      = x.innerHTML; 
        var query     = MonthName+" "+date+" "+Year;
        /*
        $(document).ready(function(){
        
                var url = "getTime.php?q="+query;
        
        });*/
        document.getElementById("demo").innerHTML = query;

}
