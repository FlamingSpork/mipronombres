<?php

/*
 * This prints out the pronoun nicely formatted, as well as each
 * of the sentences.
 */
function printPronoun($pronoun, $sentences, $pronounciation = null) {
    print '<h1>'.$pronoun."</h1>\n";

    if($pronounciation != null) {
        print '<p><h2 style="display: inline;">Pronunciación:</h2> '. $pronounciation ."\n";
    }

    print '<p>Como se usa:
<ul>';
    foreach($sentences as $sentence) {
        print '<li>'.$sentence."</li>\n";
    }
    print '</ul>';
}