<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STK Latinoamérica</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.png">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
  <div class="header">
  <h1>
    STK Latinoamérica
  </h1>
    <br />
    <p style="text-align: center">
    Recordes
    </p>
  </div>
  <div class="content">
    <h2>
      Records
    </h2>

<?php

$servers= $_POST["servers"] ?? 'ALL';
$laps	= $_POST["laps"] ?? 'dlaps';
$reverse= $_POST["reverse"] ?? 'normal'; 
$mode	= $_POST["mode"] ?? 'normal';
$tracks	= $_POST["venue"] ?? 'default';


?>

<div class="box95 rowbox records_form">
<form action ="index.php" method="POST">

        <h4>Servidores:
        <input type="radio" name="servers" value="MIAMI" <?php if ($servers == 'MIAMI') echo 'checked'; ?> >Miami
        <input type="radio" name="servers" value="BRASIL" <?php if ($servers == 'BRASIL') echo 'checked'; ?> >Brasil
        <input type="radio" name="servers" value="ALL" <?php if ($servers == 'ALL') echo 'checked'; ?> >Todos
        </h4>

        <h4>Dirección:
        <input type="radio" name="reverse" value="normal"  <?php if ($reverse == 'normal') echo 'checked'; ?> >Normal
        <input type="radio" name="reverse" value="reverse"  <?php if ($reverse == 'reverse') echo 'checked'; ?> >Inversa
        </h4>

        <h4>Modo:
        <input type="radio" name="mode" value="normal" <?php if ($mode == 'normal') echo 'checked'; ?> >Normal
        <input type="radio" name="mode" value="time-trial" <?php if ($mode == 'time-trial') echo 'checked'; ?> >Contrarreloj
        </h4>

        <h4>Vueltas:
        <select name="laps">
            <option value="dlaps">Cantidad estándar</option>
        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option><option value="32">32</option><option value="33">33</option><option value="34">34</option><option value="35">35</option><option value="36">36</option><option value="37">37</option><option value="38">38</option><option value="39">39</option><option value="40">40</option><option value="41">41</option><option value="42">42</option><option value="43">43</option><option value="44">44</option><option value="45">45</option><option value="46">46</option><option value="47">47</option><option value="48">48</option><option value="49">49</option><option value="50">50</option>
        </select>
        </h4>

        <h4>Pistas:
        <select name="venue">
	  <option value="default">Estándar</option>
	  <option value="addons">Todas complementarias</option>
	  <option value="assorted_addons">Complementarias bien evaluadas</option>
        </h4>

<input style='margin-top: 0.5rem' type="submit" value="Filtra"></div>
<hr>

    

<?php

echo "<p style='text-align: center'><strong>⭐️ Modo: ";
if ($mode == 'normal') 
	echo "Normal";
	else echo "Contrarreloj";
echo " ⭐️ Pistas: ";
if ($tracks == 'default')
	echo " estándar";
	else if ($tracks == 'addons')
		echo " Complementos todos";
		else echo " Complementos evaluados";
echo " ⭐️ Dirección: "; 
if ($reverse == 'normal') 
	echo "Normal";
	else echo "Inversa";
echo " ⭐️ Vueltas: ";
if ($laps == 'dlaps') 
	echo "Estándar";
	else echo $laps;
echo '</strong></p>';
echo '<p style=\'text-align: center\'><strong>⭐️ Servidores: '; if ($servers == 'ALL') {echo 'Todos';} else {echo ucfirst(strtolower($servers));} echo ' ⭐️</p></strong>';

echo '<table>
    <thead>
        <tr> <th>Pista</th> <th>Vueltas</th> <th>Jugador</th> <th>Fecha</th> <th>Hora</th> </tr>
    </thead>';

class MyDB extends SQLite3
{
	function __construct()
	{
		$this->open($_SERVER["DOCUMENT_ROOT"] . '/assets/database.db', SQLITE3_OPEN_READONLY);
	}
}

function setVenue($tracks) {
	switch ($tracks)
	{
		case 'default': return "NOT LIKE 'addon_%'";
		default: return "LIKE 'addon_%'";
	}
}

$db = new MyDB();



$result = $db->query("SELECT fullname, venue, laps, username, (CASE WHEN (result%60 < 10) THEN (CAST(result/60 as INT) || ':0' || CAST(ROUND(MOD(result,60),4) as TEXT)) ELSE (CAST(result/60 AS INT)) || ':' || CAST(result%60 AS TEXT) END) as timing, time FROM '" . $servers . "' WHERE (venue " . setVenue($tracks)  . " AND laps = " . $laps . " AND mode = '" . $mode . "' AND reverse = '" . $reverse . "') GROUP BY venue HAVING MIN(result)") ?? '';

while($row = $result->fetchArray()){
    echo "<tr><td> <a href='track.php?track=" . $row['venue'] . "' name=\"track\" value=\"" . $row['venue'] ."\" > ". $row['fullname'] . "</a><td>" . $row['laps'] . "<td>" . $row['username'] . "<td>" . $row['timing'] . "<td>" . $row['time'] . "</td></tr>";
}
echo '</table>';

?>

</form>


</div>
