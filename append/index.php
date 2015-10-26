<html>
<title>Output</title>
<link rel="stylesheet" href="../css/input2.css">
<link rel="stylesheet" href="../css/button1.css">
<body>
<div style="
  width: 50%;
  text-align:left;
  margin: 0 auto;">

<?php
if(isset($_POST['ok'])){
$file=isset($_POST['file'])?($_POST['file']):"error";
$append_file_text=" /* dynamically created */";
for($i=0;$i<sizeof($file);$i++)
{
$file[$i]=strip_tags($file[$i]);
$myfile = fopen($file[$i], "r");
$append_file_text=$append_file_text." /*end*/ \n".fread($myfile,filesize($file[$i]));
fclose($myfile);
}
$myfile = fopen("tmp.txt", "w");
fwrite($myfile,$append_file_text);
fclose($myfile);

$myfile = fopen("tmp.txt", "r");
$append_file_read=fread($myfile,filesize("tmp.txt"));
fclose($myfile);

echo '<textarea autofocus style="
  width: 100%;
  margin: 0 auto;
  background-color: f9f9f9;
  padding: 15px;
  border: 1px solid #e0e0e0;
  overflow: auto;
  resize:none;
  height:500px;
">';
echo $append_file_read;
echo "</textarea>";
for($i=0;$i<sizeof($file);$i++)
echo 	$file[$i]." <br/> ";
}
else {
	echo "<form action='?' method='post'>";
$dir="../css/all/";
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
          foreach (glob($dir."*.*") as $filename)
echo "<input type='checkbox' value='".$filename."'  name='file[]' autofocus>".$filename." <br/> " ; 
        closedir($dh);
    }
}
?>

<br/>
<button  name="ok" id="more">Add more files</button>
</form>
<a href="tmp.txt" class="bu1 bu-red-link"> see file </a>



<?php }
?>
<a href="../append/" class="bu1 bu-blue">Reload</a>
<a href="../" class="bu1 bu-white">back</a>

</div>
</body>
</html>