<style type="text/css">
	
	#header {

width: 100vw;
height: 130px;
top: 0;
left: 0;
position: fixed;

background: #6AD8D8;

}

.back {

	width: 50px;
	height: 50px;
	margin-top: 10px;
	margin-right: 10px;
	background-color: black;
	position: relative;
}

</style>

<?php

$data = file_get_contents('../../assets/json/haha.json');
$dat = json_decode($data, true);

$dat = $dat["dat"][0];
print_r($dat);
?>

<div id="header">
	hello
	<div class="back" ></div>
</div>
















