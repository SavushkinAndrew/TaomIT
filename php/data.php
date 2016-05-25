<?php
include "func.inc";
conect_DB();

$sql=mysql_query("SELECT * FROM users WHERE `id_user`='15'");

$row=mysql_fetch_array($sql);

?>