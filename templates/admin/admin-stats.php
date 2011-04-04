<form method="post" action="<?=$this->self_link?>">
<p>Date range statistics &ndash;
<label for="date_from">From:</label> <input type="text" id="date_from" name="from" value="<?=htmlspecialchars($from)?>">
<label for="date_to">To:</label> <input type="text" id="date_to" name="to" value="<?=htmlspecialchars($to)?>">
<input type="submit" value="Lookup">
</form>
        
<p>Summary statistics last updated: <?=$statsdate?>

<h2>Petitions</h2>

<table>
<tr><th>Total petitions received</th><td><?=$petitions['all_confirmed']?></td><td>&nbsp;</td></tr>
<tr><th>Live petitions</th><td><?=$petitions['live']?></td><td><?=$petitions['live_pc']?>%</td></tr>
<tr><th>Closed petitions</th><td><?=$petitions['finished']?></td><td><?=$petitions['finished_pc']?>%</td></tr>
<tr><th>Rejected petitions</th><td><?=$petitions['rejected']?></td><td><?=$petitions['rejected_pc']?>%</td></tr>
<tr><th>Online petitions</th><td><?=$petitions['online']?></td><td><?=$petitions['online_pc']?>%</td></tr>
<tr><th>Offline petitions</th><td><?=$petitions['offline']?></td><td><?=$petitions['offline_pc']?>%</td></tr>
</table>

<?
$f = "pet-live-creation$multiple.png";
if (is_file($f) && filesize($f)) { ?>
<p><img style="max-width:100%" src="<?=$f?>" alt="Graph of petition status by creation date">
<?  } else { ?>
<p>There is currently no data in the system to draw a graph. Graphs are generated nightly.</p>
<?  } ?>

<h2>Signatures</h2>

<p><?=$signatures['confirmed']?> confirmed signatures (<?=$signatures['confirmed_unique']?> unique emails
in past year), <?=$signatures['sent']?> unconfirmed

<?
$f = "pet-live-signups$multiple.png";
if (is_file($f) && filesize($f)) { ?>
<p><img style="max-width:100%" src="<?=$f?>" alt="Graph of signers across whole site">
<?  } else { ?>
<p>There is currently no data in the system to draw a graph. Graphs are generated nightly.</p>
<?  } ?>

<h2>Responses</h2>

<p><?=$responses?> responses sent, to <?=$unique_responses?> unique petitions

