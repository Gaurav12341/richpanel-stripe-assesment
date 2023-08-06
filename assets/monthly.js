let monthly=document.getElementById("month");
let yearly=document.getElementById("year");

let mobile= document.getElementById("mobile");
let basic= document.getElementById("basic");
let standard= document.getElementById("standard");
let premium= document.getElementById("premium");



let price1=document.getElementById("price1");
let price2=document.getElementById("price2");
let price3=document.getElementById("price3");
let price4=document.getElementById("price4");

let quality1=document.getElementById("quality1");
let quality2=document.getElementById("quality2");
let quality3=document.getElementById("quality3");
let quality4=document.getElementById("quality4");

let resolution1=document.getElementById("reso1");
let resolution2=document.getElementById("reso2");
let resolution3=document.getElementById("reso3");
let resolution4=document.getElementById("reso4");

let dev1=document.getElementById("dev1");
let dev2=document.getElementById("dev2");
let dev3=document.getElementById("dev3");
let dev4=document.getElementById("dev4");
let dev5=document.getElementById("dev5");
let dev6=document.getElementById("dev6");
let dev7=document.getElementById("dev7");
let dev8=document.getElementById("dev8");
let dev9=document.getElementById("dev9");
let dev10=document.getElementById("dev10");
let dev11=document.getElementById("dev11");
let dev12=document.getElementById("dev12");
let dev13=document.getElementById("dev13");
let dev14=document.getElementById("dev14");



monthly.addEventListener("click", function(){
monthly.style.color="rgba(31,77,145,255)";
monthly.style.background="white";
yearly.style.background="rgba(31,77,145,255)";
yearly.style.color="white";

price1.innerHTML="₹100";
price2.innerHTML="₹200";
price3.innerHTML="₹500";
price4.innerHTML="₹700";

});

yearly.addEventListener("click", function(){
yearly.style.background="white";
yearly.style.color="rgba(31,77,145,255)";
monthly.style.background="rgba(31,77,145,255)";
monthly.style.color="white";

price1.innerHTML="₹1000";
price2.innerHTML="₹2000";
price3.innerHTML="₹5000";
price4.innerHTML="₹7000";

});

mobile.addEventListener("click",function(){
    basic.style.background="rgba(31,77,145,0.8)";
    standard.style.background="rgba(31,77,145,0.8)";
    premium.style.background="rgba(31,77,145,0.8)";

    price2.style.color="rgb(97, 96, 96)"
    price3.style.color="rgb(97, 96, 96)"
    price4.style.color="rgb(97, 96, 96)"

    quality2.style.color="rgb(97, 96, 96)"
    quality3.style.color="rgb(97, 96, 96)"
    quality4.style.color="rgb(97, 96, 96)"

    resolution2.style.color="rgb(97, 96, 96)"
    resolution3.style.color="rgb(97, 96, 96)"
    resolution4.style.color="rgb(97, 96, 96)"

    dev2.style.color="rgb(97, 96, 96)"
    dev3.style.color="rgb(97, 96, 96)"
    dev4.style.color="rgb(97, 96, 96)"
    dev6.style.color="rgb(97, 96, 96)"
    dev7.style.color="rgb(97, 96, 96)"
    dev8.style.color="rgb(97, 96, 96)"
    dev9.style.color="rgb(97, 96, 96)"
    dev10.style.color="rgb(97, 96, 96)"
    dev11.style.color="rgb(97, 96, 96)"
    dev12.style.color="rgb(97, 96, 96)"
    dev13.style.color="rgb(97, 96, 96)"
    dev14.style.color="rgb(97, 96, 96)"


    mobile.style.background="rgba(31,77,145,255)";
    price1.style.color="rgb(31,77,145)"
    quality1.style.color="rgb(31,77,145)"
    resolution1.style.color="rgb(31,77,145)"
    dev1.style.color="rgb(31,77,145)"
    dev5.style.color="rgb(31,77,145)"

});

basic.addEventListener("click",function(){
    mobile.style.background="rgba(31,77,145,0.8)";
    standard.style.background="rgba(31,77,145,0.8)";
    premium.style.background="rgba(31,77,145,0.8)";

    price1.style.color="rgb(97, 96, 96)"
    price3.style.color="rgb(97, 96, 96)"
    price4.style.color="rgb(97, 96, 96)"

    quality1.style.color="rgb(97, 96, 96)"
    quality3.style.color="rgb(97, 96, 96)"
    quality4.style.color="rgb(97, 96, 96)"

    resolution1.style.color="rgb(97, 96, 96)"
    resolution3.style.color="rgb(97, 96, 96)"
    resolution4.style.color="rgb(97, 96, 96)"

    dev1.style.color="rgb(97, 96, 96)"
    dev3.style.color="rgb(97, 96, 96)"
    dev4.style.color="rgb(97, 96, 96)"
    dev5.style.color="rgb(97, 96, 96)"
    dev7.style.color="rgb(97, 96, 96)"
    dev8.style.color="rgb(97, 96, 96)"
    dev10.style.color="rgb(97, 96, 96)"
    dev11.style.color="rgb(97, 96, 96)"
    dev13.style.color="rgb(97, 96, 96)"
    dev14.style.color="rgb(97, 96, 96)"


    basic.style.background="rgba(31,77,145,255)";
    price2.style.color="rgb(31,77,145)"
    quality2.style.color="rgb(31,77,145)"
    resolution2.style.color="rgb(31,77,145)"
    dev2.style.color="rgb(31,77,145)"
    dev6.style.color="rgb(31,77,145)"
    dev9.style.color="rgb(31,77,145)"
    dev12.style.color="rgb(31,77,145)"


});

standard.addEventListener("click",function(){
    mobile.style.background="rgba(31,77,145,0.8)";
    basic.style.background="rgba(31,77,145,0.8)";
    premium.style.background="rgba(31,77,145,0.8)";

    price1.style.color="rgb(97, 96, 96)"
    price2.style.color="rgb(97, 96, 96)"
    price4.style.color="rgb(97, 96, 96)"

    quality1.style.color="rgb(97, 96, 96)"
    quality2.style.color="rgb(97, 96, 96)"
    quality4.style.color="rgb(97, 96, 96)"

    resolution1.style.color="rgb(97, 96, 96)"
    resolution2.style.color="rgb(97, 96, 96)"
    resolution4.style.color="rgb(97, 96, 96)"

    dev1.style.color="rgb(97, 96, 96)"
    dev2.style.color="rgb(97, 96, 96)"
    dev4.style.color="rgb(97, 96, 96)"
    dev5.style.color="rgb(97, 96, 96)"
    dev6.style.color="rgb(97, 96, 96)"
    dev8.style.color="rgb(97, 96, 96)"
    dev9.style.color="rgb(97, 96, 96)"
    dev11.style.color="rgb(97, 96, 96)"
    dev12.style.color="rgb(97, 96, 96)"
    dev14.style.color="rgb(97, 96, 96)"


    standard.style.background="rgba(31,77,145,255)";
    price3.style.color="rgb(31,77,145)"
    quality3.style.color="rgb(31,77,145)"
    resolution3.style.color="rgb(31,77,145)"
    dev3.style.color="rgb(31,77,145)"
    dev7.style.color="rgb(31,77,145)"
    dev10.style.color="rgb(31,77,145)"
    dev13.style.color="rgb(31,77,145)"


});

premium.addEventListener("click",function(){
    mobile.style.background="rgba(31,77,145,0.8)";
    basic.style.background="rgba(31,77,145,0.8)";
    standard.style.background="rgba(31,77,145,0.8)";

    price1.style.color="rgb(97, 96, 96)"
    price2.style.color="rgb(97, 96, 96)"
    price3.style.color="rgb(97, 96, 96)"

    quality1.style.color="rgb(97, 96, 96)"
    quality2.style.color="rgb(97, 96, 96)"
    quality3.style.color="rgb(97, 96, 96)"

    resolution1.style.color="rgb(97, 96, 96)"
    resolution2.style.color="rgb(97, 96, 96)"
    resolution3.style.color="rgb(97, 96, 96)"

    dev1.style.color="rgb(97, 96, 96)"
    dev2.style.color="rgb(97, 96, 96)"
    dev3.style.color="rgb(97, 96, 96)"
    dev5.style.color="rgb(97, 96, 96)"
    dev6.style.color="rgb(97, 96, 96)"
    dev7.style.color="rgb(97, 96, 96)"
    dev9.style.color="rgb(97, 96, 96)"
    dev10.style.color="rgb(97, 96, 96)"
    dev12.style.color="rgb(97, 96, 96)"
    dev13.style.color="rgb(97, 96, 96)"

    premium.style.background="rgba(31,77,145,255)";
    price4.style.color="rgb(31,77,145)"
    quality4.style.color="rgb(31,77,145)"
    resolution4.style.color="rgb(31,77,145)"
    dev4.style.color="rgb(31,77,145)"
    dev8.style.color="rgb(31,77,145)"
    dev11.style.color="rgb(31,77,145)"
    dev14.style.color="rgb(31,77,145)"


});