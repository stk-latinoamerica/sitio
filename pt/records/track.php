<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STK LATAM</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
  <div class="header">
  <h1>
    STK LATAM 
  </h1>
    <br />
    <p style="text-align: center">
    Recordes
    </p>
  </div>
  <div class="content">
    
<?php

include $_SERVER["DOCUMENT_ROOT"] . '/assets/records_track_guard.php';

sanityCheck($_GET['track']);

$servers= $_POST["servers"] ?? 'ALL';
$laps	= $_POST["laps"] ?? 'dlaps';
$reverse= $_POST["reverse"] ?? 'normal'; 
$mode	= $_POST["mode"] ?? 'normal';
$track	= setTrack($_GET['track']) ?? 'abyss';

$db = new MyDB();

$result = $db->query("SELECT fullname, laps, username, (CASE WHEN (result%60 < 10) THEN (CAST(result/60 as INT) || ':0' || CAST(ROUND(MOD(result,60),4) as TEXT)) ELSE (CAST(result/60 AS INT)) || ':' || CAST(result%60 AS TEXT) END) as timing, time FROM '" . $servers . "' WHERE (venue = '" . $track  . "' AND laps = " . $laps . " AND mode = '" . $mode . "' AND reverse = '" . $reverse . "') GROUP BY username HAVING MIN(result) ORDER BY result ASC LIMIT 20") ?? '';
$fullname = $db->query('SELECT fullname FROM track_data WHERE name = \'' . $track . '\'');


echo "<h2>Recordes da pista <strong>";
while ($row = $fullname->fetchArray())
{
	echo $row['fullname'];
}
echo  "</strong></h2>";

echo "<img src='/assets/screenshots/" . $track . ".jpg' > ";
?>

<div class="box95 rowbox records_form">
<form action ="track.php" method="POST">

	<h4>Servidores:
        <input type="radio" name="servers" value="MIAMI" >Miami
        <input type="radio" name="servers" value="BRASIL"  >Brasil
        <input type="radio" name="servers" value="ALL" checked>Todos
        </h4>

        <h4>Sentido:
        <input type="radio" name="reverse" value="normal"  checked>Normal
        <input type="radio" name="reverse" value="reverse"  >Reverso
        </h4>

        <h4>Modo:
        <input type="radio" name="mode" value="normal" checked >Corrida normal
        <input type="radio" name="mode" value="time-trial"  >Corrida sem itens
        </h4>

        <h4>Número de voltas:
        <select name="laps">
            <option value="dlaps">Quantidade padrão</option>
        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
        </select>
        </h4>
<?php	
/*f ($_GET['track'])
	{
		echo "<input type='hidden' name=track value=" . $_GET['track'] . ">";
	}
	else 
	{
		echo "<input type='hidden' name=track value=" . $_POST['track'] . ">";
	} */
	echo "<input type='hidden' name=track value=" . $track . ">";

?>

<input type="submit" value="Filtrar"></div>
</form>
<hr>

    

<?php

echo "<strong><p style='text-align: center'> ⭐️ Modo: ";
if ($mode == 'normal') 
	echo "normal (com itens)";
	else echo "sem itens";
echo " ⭐️ Sentido: "; 
if ($reverse == 'normal') 
	echo "normal";
	else echo "reverso";
echo " ⭐️ Voltas: ";
if ($laps == 'dlaps') 
	echo "quantidade padrão";
	else echo $laps;
echo '</p></strong>';

echo '<table>
    <thead>
        <tr> <th>Jogador</th> <th>Voltas</th> <th>Tempo</th> <th>Data</th> </tr>
    </thead>';

while($row = $result->fetchArray()){
    echo "<td>" . $row['username'] . "<td>" . $row['laps'] . "<td>" . $row['timing'] . "<td>" . $row['time'] . "</td></tr>";
}
echo '</table>';
?>



</div>
