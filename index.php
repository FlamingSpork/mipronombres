<?php
include "header.php";

print '<h1>Pronombres comunes:</h1>
<ul>
';

$pronouns = array("él", "ella", "elle");
foreach( $pronouns as $p) {
    print '    <li><a href="'.$p.'">'.$p.'</a></li>
';
}
print '</ul>
';

include "footer.php";