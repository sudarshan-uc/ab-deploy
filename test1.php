<?php
shell_exec('date >>  /test/1/test-`cat /etc/hostname`.txt')
for ($x = 0; $x <= 5; $x++) {
    echo "The number is: $x <br>";
}  
?>
