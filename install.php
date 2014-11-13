<?php
require "connect.php";
//mysql_query("DROP TABLE blog");

mysql_query("
CREATE TABLE blog (
  id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  tema VARCHAR(255),
  text TEXT,  
  date TIMESTAMP,
  INDEX (tema)
) DEFAULT CHARSET=cp1251;" 
);
echo mysql_error();
?>
<br>