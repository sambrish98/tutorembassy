<?php
require_once("../db.php");

$query = "select user_id,username from user where type='T' order by username";
$result = mysqli_query($mysql_link, $query);
if((!$result) || (! mysqli_num_rows($result)))
{
    die("error listing teachers");
}
while ($row = mysqli_fetch_row($result))
{
    $id = $row[0];
    $name = $row[1];
    $sel = '';
    if ($teacher == $id)
    {
        $sel = 'selected';
    }
    print "<option $sel value=\"$id\">$name</option>";
}

?>

