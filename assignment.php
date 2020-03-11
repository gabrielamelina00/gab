<head>
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

        left: 0px;
    top: 29%;
    background: transparent;
    position: absolute;
    width: 100vw;
    height: 59%;
    z-index: 0;
    overflow-y: scroll;
        }

     .t {
     position: relative;
    width: 90%;
    height: 26%;
    margin-bottom: 20px;
    background: #6AD8D8;
    background-size: auto;
    background-position: center;
    background-repeat: no-repeat;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;
    left: -6;
    border: 2px solid #6AD8D8;
    box-sizing: border-box;
    padding-top: 10%;
   

        }

 /*     .gr {
    position: relative;
    display: block;
    background-color: gray;
    height: 50%;
    border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  top: 50%;



            }*/

 p{
    font-family: Source Sans Pro;
    
    font-weight: 600;
    font-size: 16px;
    margin-left: 5%;
    top: 20%;
    color: white;
    position: relative;
}

 h1{

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

#head {

 position: absolute;
    width: 100vw;
    height: 200px;
    left: 0px;
    top: -3px;
    background: linear-gradient(180deg, #7FC9FD 21.43%, rgba(255, 255, 255, 0) 100%), #6AD8D8;
    /* border-radius: 52px; */
    border-bottom-left-radius: 52px;
    border-bottom-right-radius: 52px;
    z-index: 999;
}



</style>
</head>
<?php

$data = file_get_contents('assets/json/haha.json');
$dat = json_decode($data, true);

$dat = $dat["dat"];
?>

<div id="head">
   
</div>

<div id="contain">

 
                    
                      <div id="tl">
                    <?php    
                    $i = 0;
                    foreach ($dat as $row) {
                    ?>
                        <div class="t" onclick="location.replace('assign.php?x=<?php echo $i; ?>')">
                                <h1><?= $row["name"]; ?></h1>
                          
                        </div>
                    <?php 
                    $i++;
                    }
                    ?>

              
                </div> <!--tl-->
 </div><!--contain-->

 <div id="footer">
        <div id="tempat">
            <div id="icon1" onclick="location.replace('index.html')"></div>
            <div id="icon3" onclick="getIt('3')"></div>
            <div id="icon4" onclick="location.replace('account.php')"></div>
        </div>
</div>















