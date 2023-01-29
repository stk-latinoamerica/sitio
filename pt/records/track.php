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

include $_SERVER["DOCUMENT_ROOT"] . '/assets/records_track_bracers.php';

$servers= setServers($_GET["servers"], $_POST["servers"]) ?? 'ALL';
$laps	= setLaps($_GET["laps"], $_POST["laps"]) ?? 'dlaps';
$reverse= setReverse($_GET["reverse"], $_POST["reverse"]) ?? 'normal';
$mode	= setMode($_GET["mode"], $_POST["mode"]) ?? 'normal';
$track	= trackCheck(setTrack($_GET['track'])) ?? 'abyss';

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

<div>
<form action ="track.php" method="POST">

	<?php echo "<input type='hidden' name=track value='" . $track . "'>" ?>
	<h4>Servidores:
        <input type="radio" name="servers" value="MIAMI" <?php if ($servers == 'MIAMI') echo 'checked';?> >Miami
        <input type="radio" name="servers" value="BRASIL" <?php if ($servers == 'BRASIL') echo 'checked';?> >Brasil
        <input type="radio" name="servers" value="ALL" <?php if ($servers == 'ALL') echo 'checked';?> >Todos
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
	<input type="number" name="laps" min="0" max="20" <?php if ($laps > 0 && $laps <=20) echo 'value="' . $laps . '"'; ?>> 	<input type="checkbox" name="laps" value="50" <?php if ($laps == 50) echo 'checked'?>> 50 voltas	    
        </h4>


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
	echo "padrão";
	else echo $laps;
echo '</p></strong>';

echo '<p style=\'text-align: center\'><strong>⭐️ Servidores: ';
if ($servers == 'ALL') {echo 'todos';}
	else {echo ucfirst(strtolower($servers));} echo ' ⭐️</p></strong>';

{
	echo '<table>
		<thead>
			<tr> <th>Jogador</th> <th>Voltas</th> <th>Tempo</th> <th>Data</th> </tr>
		</thead>';

	while($row = $result->fetchArray()){
		echo "<td>" . $row['username'] . "<td>" . $row['laps'] . "<td>" . $row['timing'] . "<td>" . $row['time'] . "</td></tr>";
	}
	echo '</table>';
}
?>



</div>
