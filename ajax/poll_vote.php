<?php
$vote = $_REQUEST['vote'];

// get contents of the textfile
$filename = "poll_result.txt";
$content = file($filename);

// put content in array
$array = explode("||", $content[0]);
$yes = $array[0];
$no = $array[1];

if($vote == 0)
{
    $yes = $yes + 1;
} 
if($vote == 1)
{
    $no = $no + 1;
} 

// insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>
<h2>Result:</h2>
<table>
<tr>
<td>Ruto:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>Raila:</td>
<td><img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>


<script>
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>


<div id="poll">
<h3>Opinion Polls</h3>
<form>
Ruto: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
Raila: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>

