<?php
function setServers($servers)
{
	if ($servers != 'MIAMI' && $servers != 'BRASIL') return 'ALL';
	else return $servers;
}
function setLaps($laps)
{
	if (!($laps > 0 && $laps <= 20) && ($laps != 50)) return 'dlaps';
	else return $laps;
}
function setReverse($reverse)
{
	if ($reverse != 'normal' && $reverse != 'reverse') return 'normal';
	else return $reverse;
}
function setMode($mode)
{
	if ($mode != 'normal' && $mode != 'time-trial') return 'normal';
	else return $mode;
}
function setTracks($tracks)
{
	if ($tracks != 'default' && $tracks != 'addons' && $tracks != 'assorted_addons')
	{
		return 'default';
	}
	else return $tracks;
}
?>
