
<head>
    <meta name="viewport" content="width=device-width">
<style>

#head {
    position: absolute;
width: 100vw;
height: 40%;
left: 0px;
top: 0px;

background: #6AD8D8;
display: block;
}

#circle {
    position: relative;
width: 144px;
height: 144px;
margin-right: auto;
margin-left: auto;
top: 10%;
border-radius: 50%;

background-color: white;

}

h1 {
        font-family: Source Sans Pro;
    font-weight: 600;
    font-size: 40px;
    text-align: center;
    margin-top: 10%;
    color: black;
    position: relative;
}

#tl {

     position: absolute;
    width: 100vw;
    height: 70%;
    left: 0px;
    top: 42%;
    background: green;
    height: 47%;
    bottom: 0px;
    z-index: 0;
    overflow-y: scroll;

        }
.t {
    position: relative;
width: 99%;
height: 20%;
margin-left: auto;
margin-right: auto;

background: white;
border: 2px solid #6AD8D8;


}

h2 {
        font-family: Source Sans Pro;
    font-weight: 400;
    font-size: 18px;
    text-align: left;
    margin-top: 5%;
    margin-left: 3%;
    color: black;
    position: relative;
}

#footer {
    position: fixed;
width: 100vw;
height: 20%;
margin-right: auto;
margin-left: auto;
top: 90%;

background: #6AD8D8;
left: 0;
}

#tempat {
    position: relative;
    width: calc(50px + 50px + 50px + 50px + 20px + 20px + 20px + 20px + 20px);
    height: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;
    background-color: transparent;
}



#icon1 {

    position: relative;
    width: 50px;
    height: 50px;
    margin-top: auto;
    margin-bottom: auto;
    background: gray;
    float: left;
    margin-top: 4%;
    background-position: center;
    background-size: contain;
    display: block;
    background-image: url(assets/image/home.png);
}

#icon2 {

    position: relative;
    width: 50px;
    height: 50px;
    margin-left: 20px;
    margin-top: auto;
    margin-bottom: auto;
    background: gray;
    float: left;
    margin-top: 4%;
    background-position: center;
    background-size: contain;
    display: block;
    background-image: url(assets/image/payment.png);
}

#icon3 {

    position: relative;
    width: 50px;
    height: 50px;
    margin-left: 75px;
    margin-top: auto;
    margin-bottom: auto;
    background: gray;
    float: left;
    margin-top: 4%;
    background-position: center;
    background-size: contain;
    display: block;
    background-image: url(assets/image/assign.png);
}

#icon4 {

    position: relative;
    width: 50px;
    height: 50px;
    margin-left: 70px;
    margin-top: auto;
    margin-bottom: auto;
    background: gray;
    float: left;
    margin-top: 4%;
    background-position: center;
    background-size: contain;
    display: block;
    background-image: url(assets/image/acc.png);
}
</style>
</head>
<body>


<div id="head">
    <div id="circle"></div>
    <h1>NAME</h1>
    
</div> 

<div id="tl">
    <div class="t">
        <h2>Username: </h2>
    </div> 
     <div class="t">
         <h2>Email: </h2>

     </div> 
      <div class="t">
          <h2>School: </h2>
      </div> 
       <div class="t">
           <h2>Batch: </h2>
       </div>  
</div>

 <div id="footer">
        <div id="tempat">
            <div id="icon1" onclick="location.replace('index.html')"></div>
            <div id="icon3" onclick="location.replace('assignment.php')"></div>
            <div id="icon4" onclick="getIt('4')"></div>
        </div>
</div>



</body>







