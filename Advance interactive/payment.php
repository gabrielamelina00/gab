<meta name="viewport" content="width=device-width">
<style>

    #contain {
          position: fixed;
    width: 100vw;
    height: 100vh;
    background: #FFFFFF;
    z-index: 0;
            }

    #tl {

 position: absolute;
    width: 414px;
    height: 589px;
    left: 0px;
    top: 15%;
    background: #FFFFFF;
    z-index: 3;
    position: absolute;
    width: 100vw;
    height: 73%;
    left: 0px;
    bottom: 0px;
    background: #FFFFFF;
    z-index: 0;
    overflow-y: scroll;
    padding-top: 24px;
        }

     .t {
        position: relative;
    width: 90%;
    height: 33%;
    margin-bottom: 20px;
    background: pink;
    background-size: auto;
    background-position: center;
    background-repeat: no-repeat;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;

        }

      .gr {
    position: relative;
    display: block;
    background-color: purple;
    height: 50%;
    border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  top: 50%;

            }

.gr p{
    font-family: Source Sans Pro;
    
    font-weight: 600;
    font-size: 16px;
    margin-left: 5%;
    top: 20%;
    color: white;
    position: relative;
}

.gr h1{

    font-family: Source Sans Pro;
    font-weight: 800;
    font-size: 24px;
    margin-left: 5%;
    color: white;
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
    margin-left: 20px;
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
    margin-left: 20px;
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
    margin-left: 20px;
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

<div id="contain">

                <div id="tl">
                    
                        <div class="t" style="background-image:url('assets/image/itb.png')">
                            <div class="gr" >
                                <p>Date</p> <br>
                                <h1>Name</h1>
                            </div>
                        </div>

                        <div class="t" onclick="location.replace('login.html')"> 
                            <div class="gr" >
                                <p>Date</p> <br>
                                <h1>Name</h1>
                            </div>
                        </div>

                        <div class="t">
                            <div class="gr" >
                              <p>Date</p> <br>
                                <h1>Name</h1>
                            </div>
                        </div>

                        <div class="t">
                            <div class="gr" >
                               <p>Date</p> <br>
                                <h1>Name</h1>
                            </div>
                        </div>
                </div>
        </div>


 <div id="footer">
        <div id="tempat">
            <div id="icon1" onclick="location.replace('index.html')"></div>
            <div id="icon2" ></div>
            <div id="icon3" onclick="location.replace('assignment.php')"></div>
            <div id="icon4" onclick="location.replace('account.php')"></div>
        </div>
</div>