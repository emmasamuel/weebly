<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>clock</title>
<style id="jsbin-css">
body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}
.wow {
 width: 200px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}
*{
    margin:0;
    padding:0;
    font-family:sans-serif;
    font-size:36px;
}
.clock{
    text-align:center;
    width:auto;
    height:auto;
}
</style>
</head>


  
  <body> 
   
       <div class="wow"> 
       
        <div class="clock">
            <span id="hr">00</span>
            <span> : </span>
            <span id="min">00</span>
            <span> : </span>
            <span id="sec">00</span>
        </div>
        
       </div>
    <script id="jsbin-javascript">
var d,h,m,s,animate;
function init(){
    d=new Date();
    h=d.getHours();
    m=d.getMinutes();
    s=d.getSeconds();
    clock();
};
function clock(){
    s++;
    if(s==60){
        s=0;
        m++;
        if(m==60){
            m=0;
            h++;
            if(h==24){
                h=0;
            }
        }
    }
    $('sec',s);
    $('min',m);
    $('hr',h);
    animate=setTimeout(clock,1000);
};
function $(id,val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;
};
window.onload=init;
</script>


<script id="jsbin-source-css" type="text/css">body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}
.wow {
 width: 200px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}
*{
    margin:0;
    padding:0;
    font-family:sans-serif;
    font-size:36px;
}
.clock{
    text-align:center;
    width:auto;
    height:auto;
}</script>

<script id="jsbin-source-javascript" type="text/javascript">var d,h,m,s,animate;
function init(){
    d=new Date();
    h=d.getHours();
    m=d.getMinutes();
    s=d.getSeconds();
    clock();
};
function clock(){
    s++;
    if(s==60){
        s=0;
        m++;
        if(m==60){
            m=0;
            h++;
            if(h==24){
                h=0;
            }
        }
    }
    $('sec',s);
    $('min',m);
    $('hr',h);
    animate=setTimeout(clock,1000);
};
function $(id,val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;
};
window.onload=init;</script></body>

   
  
  
  

</html>






jsbin.zizefih.css
body {
 width: auto;
    height: 1200px;
    background-image: url("https://s5.postimg.org/433csq3hj/Google_Pixel-_Front-_Hand.jpg");
   background-size:cover;
    background-repeat: no-repeat;
}



.wow {
 width: 200px;
    height: 50px;
color: white;
    margin-left: 820px;
    padding-top: 400px;
    
    
  
}





*{
    margin:0;
    padding:0;
    font-family:sans-serif;
    font-size:36px;
}

.clock{
    text-align:center;
    width:auto;
    height:auto;
}
jsbin.zizefih.js
var d,h,m,s,animate;

function init(){
    d=new Date();
    h=d.getHours();
    m=d.getMinutes();
    s=d.getSeconds();
    clock();
};

function clock(){
    s++;
    if(s==60){
        s=0;
        m++;
        if(m==60){
            m=0;
            h++;
            if(h==24){
                h=0;
            }
        }
    }
    $('sec',s);
    $('min',m);
    $('hr',h);
    animate=setTimeout(clock,1000);
};

function $(id,val){
    if(val<10){
        val='0'+val;
    }
    document.getElementById(id).innerHTML=val;
};

window.onload=init;
