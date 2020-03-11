<?php
if (isset($_GET['x']) AND !empty($_GET['x'])) {
    $x = $_GET['x'];
} else {
    $x = 0;
}

if (isset($_GET['day']) AND !empty($_GET['day'])) {
    $y = $_GET['day']-1;
} else {
    $y = 0;
}

// echo $x;
?>
<head>
<meta name="viewport" content="width=device-width">
 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Squada+One:&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:&display=swap" rel="stylesheet">
<style type="text/css">
    
    #header {

width: 100vw;
height: 130px;
top: 0;
left: 0;
position: fixed;

background: #6AD8D8;

}

#contain {
    position: fixed;
    width: 100vw;
    height: 75vh;
    background: transparent;
    top: 138px;
    left: 0;
            }

#tl {

    top: 3%;
    position: relative;
    width: 100vw;
    height: 100%;
    left: 0px;
    bottom: 0px;
    background: transparent;
    /* z-index: 0; */
    overflow-y: scroll;
    padding-top: 24px;
        }

.back {

    width: 50px;
    height: 50px;
    margin-top: 10px;
    margin-left: 10px;
    background-color: transparent;
    position: absolute;
    z-index: 9999;
    background-image: url(assets/image/back.png);
    background-size: contain;
    background-repeat: no-repeat;
 
}

.t {
     position: relative;
    width: 90%;
    height: 30%;
    margin-bottom: 20px;
    /* background: pink; */
    background-size: auto;
    background-position: center;
    background-repeat: no-repeat;
    margin-left: auto;
    margin-right: auto;
    /* border-radius: 20px; */
    border-bottom-color: black;
    border-bottom: 1px solid gray

        }

.t h1{
    /* margin-left: : 5px;*/
     text-align: left;
    position: relative;
    /* left: 92px; */
    font-family: Source Sans Pro;
    color: black;
    font-size: 32px;
    left: 10px;
    margin-right: 10px;

}

.t p{
 text-align: left;
    position: relative;
    /* left: 92px; */
    font-family: Source Sans Pro;
    color: black;
    font-size: 18px;
    left: 10px;
    font-weight: 300;
    margin-right: 10px;
    margin-left: 9%;
    top: -44px;
}

.time {
display: block;
position: relative;
float: left;
background-color: transparent;
width: 50px;
height: 100%;

}

.time h3{
    text-align: left;
    position: relative;
    font-family: Source Sans Pro;
    color: black;
    font-size: 12px;
    left: 10px;
    top: 0;
}

.time h4 {
     text-align: left;
    position: relative;
    font-family: Source Sans Pro;
    color: black;
    font-size: 12px;
    left: 10px;
    top: 92%;
}

.line {
    position: relative;
    width: 1%;
    height: 100%;
    float: left;
    left: 0;
    background-color: #216083;
}

h1 {
    margin-right: auto;
    margin-left: auto;
    position: relative;
    /* left: 92px; */
    width: 100%;
    text-align: center;
    font-family: Source Sans Pro;
    color: white;


}

h3 {
    position: relative;
    /* left: 92px; */
    width: 100%;
    /* text-align: center; */
    font-family: Source Sans Pro;
    color: white;
    margin-top: 0;
}

.day{
    width: 100%;
    height: 35%;
    display: block;
    background-color: transparent;
}

.b{
    display: block;
    width: 30px;
    height: 30px;
    float: left;
    background-color: transparent;
    /* margin-right: -24px; */
    margin-left: 73px;
    position: relative;
    margin-right: 55px;
    background-image: url(assets/image/back.png);
    background-size: contain;
    background-repeat: no-repeat;


}

.n{
display: block;
    width: 30px;
    height: 30px;
    float: right;
    background-color: transparent;
    /* margin-left: 10px; */
    position: relative;
    top: -41px;
    left: -66px;
    background-image: url(assets/image/back.png);
    background-size: contain;
    background-repeat: no-repeat;
    transform: rotate(180deg);

}

</style>
</head>
<?php

$data = file_get_contents('assets/json/haha.json');

$dat = json_decode($data, true);

$zz = $dat["dat"][$x];
// print_r($dat);

$data = $dat[$zz['name']];

// $dtls = $dat[$data['name']];
// print_r($dtls);

$dayone = $data[$y];
$dayone_date = $dayone['day'];
$dayone_acts = $dayone['acts'];

// print_r($dayone_acts);

// $dayone = $dat[$data['name']][0]['one'];
$daytwo = $dat[$data['name']][0]['two'];
$daythree = $dat[$data['name']][0]['three'];

// $day = $dat[$data['name'][0]['day']]
?>

<div id="header">
    <div class="back" onclick="location.replace('assignment.php')" ></div>
    <h1><?php echo $zz['name']; ?></h1>
        <div class="day">
            <div class="b" style="position: relative;z-index: 999999" onclick="prevday()"></div>
            <h3><?php echo $dayone_date; ?></h3>
            <div class="n" onclick="nextday()"></div>
        </div>

    <script type="text/javascript">
     function prevday() {
        <?php
        if ($y == 1) {
            echo 'location.replace("assign.php?x='.$x.'&day=1")';
        } else if ($y == 2) {
            echo 'location.replace("assign.php?x='.$x.'&day=2")';
        }
        ?>
     }   

    function nextday() {
        <?php
        if ($y < 2) {
            echo 'location.replace("assign.php?x='.$x.'&day='.($y+2).'")';
        }
        ?>
     }   
    </script>
</div>

<div id="contain">
    <div id="tl">

    <!-- <div class="t"></div> -->  
<?php 
    if (count($dayone_acts) > 0) {

        for ($o = 0; $o < count($dayone_acts); $o++) {
            
            echo '<div class="t">'; 
                echo '<h1>'; echo $dayone_acts[$o]['assign']; echo '</h1>';
                echo '<br>';
                echo '<p>'; echo $dayone_acts[$o]['adesc']; echo '</p>';
            echo '</div>';
        }
    } else {
        echo "Hari bebas";
    }
    ?>
<!--            <div class="t"></div>
            <div class="t"></div>
            <div class="t"></div>
            <div class="t"></div> -->
            
    </div>
</div>














