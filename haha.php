<head>
<meta name="viewport" content="width=device-width">
<style>
* {
        padding: 0;
        margin: 0;
}
    #contain {
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: #FFFFFF;
    z-index: 0;
    top: 25%;
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
    height: 45%;
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
    height: 50%;
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
    background-color: #6AD8D8;
    height: 50%;
    border-bottom-left-radius: 20px;
  border-bottom-right-radius: 20px;
  top: 50%;

            }

.gr p{
    font-family: Source Sans Pro;
    
    font-weight: 600;
    font-size: 14px;
    margin-left: 5%;
    top: 13%;
    color: white;
    position: relative;
}

.gr h1{

    font-family: Source Sans Pro;
    font-weight: 800;
    font-size: 20px;
    margin-left: 5%;
    color: white;
    position: relative;
}

h2 {
    font-family: Source Sans Pro;
    font-weight: 600;
    font-size: 30px;
    margin-left: 5%;
    margin-top: 50px;
    color: black;
    position: relative;
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

#head h1 {
    font-family: Source Sans Pro;
    font-weight: 800;
    font-size: 50px;
    text-align: center;
    color: white;
    position: relative;
    margin-left: auto;
    margin-right: auto;
    top: -15px;


}

#head h2 {
    font-family: Source Sans Pro;
    font-weight: 800;
    font-size: 30px;
    text-align: center;
    color: white;
    position: relative;
    margin-left: auto;
    margin-right: auto;


}

</style>
</head>
<?php

$data = file_get_contents('assets/json/haha.json');
$dat = json_decode($data, true);

$dat = $dat["dat"];
?>

<div id="head">
    <h2>Hi,</h2><br>
    <h1>Katya</h1>
</div>

<div id="contain">

                <h2>Up Coming Trip</h2>

                <div id="tl">
                    <?php    
                    $i = 0;
                    foreach ($dat as $row) {
                    ?>
                        <div class="t" style="background-image:url('assets/image/home/<?php echo $row["gambar"]; ?>'); background-size: cover; background-repeat: no-repeat; ">

                            <div class="gr" onclick="location.replace('trip.php?x=<?php echo $i; ?>')">
                                <p><?= $row["date"]; ?></p> <br>
                                <h1><?= $row["name"]; ?></h1>
                            </div>
                        </div>
                    <?php 
                    $i++;
                    }
                    ?>

                </div>
 </div>

