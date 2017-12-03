<?php
if (isset($_POST["submit"]))
    foreach ($_POST['Company'] as $index => $Company) {
        $data1 = mysql_real_escape_string($Company);
        $data2 = mysql_real_escape_string($_POST['Company2'][$index]);
        $data2 = mysql_real_escape_string($_POST['Company3'][$index]);
        mysql_query("INSERT INTO php_test (name, name2, name3) VALUES ('$data1', '$data2', '$data3')") or die(mysql_error());
    }

header("location: success.php");

?>