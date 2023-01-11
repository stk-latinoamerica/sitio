<?php

include $_SERVER["DOCUMENT_ROOT"] . '/assets/records_index_bracers.php';

$servers= setServers($_POST["servers"]);
$laps	= setLaps($_POST["laps"]);
$reverse= setReverse($_POST["reverse"]); 
$mode	= setMode($_POST["mode"]);
$tracks	= setTracks($_POST["venue"]);


?>

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
    <h2>
      Recordes
    </h2>

<div>
<form action ="index.php" method="POST">

        <h4>Servidores:
        <input type="radio" name="servers" value="MIAMI" <?php if ($servers == 'MIAMI') echo 'checked'; ?>>Miami
        <input type="radio" name="servers" value="BRASIL"  <?php if ($servers == 'BRASIL') echo 'checked'; ?>>Brasil
        <input type="radio" name="servers" value="ALL" <?php if ($servers == 'ALL') echo 'checked'; ?>>Todos
        </h4>

	<input type="hidden" name="reverse" value="normal" />
	<input type="hidden" name="mode" value="normal" />
	<ul>
	  <h4><li class="modeLi">Modo:
	    <input type="checkbox" name="mode" class="modeBox" value="time-trial" <?php if ($mode == 'time-trial') echo 'checked' ?>>
	    <label for="mode" class="modeLabel"><span class="on">Normal</span><span class="off">Sem itens</ span></label>
	  </li>
	  <li class="modeLi">Sentido:
	    <input type="checkbox" name="reverse" class="reverseBox" value="reverse" <?php if ($reverse == 'reverse') echo 'checked' ?>>
	    <label for="reverse" class="modeLabel"><span class="on">Normal</span><span class="off">Reverso</ span></label>
	  </li></h4>
	</ul>
	

        <h4>Número de voltas:
	<input type="number" name="laps" min="0" max="20"> 	<input type="checkbox" name="laps" value="50"> 50 voltas	    
        </h4>

        <h4>Tipo de pistas:
        <select name="venue">
	  <option value="default">Oficiais</option>
	  <option value="addons">Complementares</option>
	  <option value="assorted_addons">Complementares especiais</option>
        </h4>

<input style='margin-top: 0.5rem' type="submit" value="Filtrar"></div>
<hr>

    

<?php

echo "<p style='text-align: center'><strong>⭐️ Modo: ";
if ($mode == 'normal') 
	echo "normal";
	else echo "sem itens";
echo " ⭐️ Pistas: ";
if ($tracks == 'default')
	echo " oficiais";
	else if ($tracks == 'addons')
		echo " complementares";
		else echo " mais recomendadas";
echo " ⭐️ Sentido: "; 
if ($reverse == 'normal') 
	echo "normal";
	else echo "reverso";
echo " ⭐️ Voltas: ";
if ($laps == 'dlaps') 
	echo "padrão";
	else echo $laps;
echo '</strong></p>';
echo '<p style=\'text-align: center\'><strong>⭐️ Servidores: '; if ($servers == 'ALL') {echo 'Todos';} else {echo ucfirst(strtolower($servers));} echo ' ⭐️</p></strong>';

echo '<table>
    <thead>
        <tr> <th>Pista</th> <th>Voltas</th> <th>Jogador</th> <th>Tempo</th> <th>Data</th> </tr>
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

//if ($result->numRows() > 0)
{
	while($row = $result->fetchArray()){
		echo "<tr><td> <a href='track.php?track=" . $row['venue'] . "&servers=" . $servers . "&laps=" . $laps . "&reverse=" . $reverse . "&mode=" . $mode . "' name=\"track\" value=\"" . $row['venue'] ."\" > ". $row['fullname'] . "</a><td>" . $row['laps'] . "<td>" . $row['username'] . "<td>" . $row['timing'] . "<td>" . $row['time'] . "</td></tr>";
	}
	echo '</table>';
}
//else echo "<h4>Nenhum resultado</h4>";
?>

</form>


</div>
