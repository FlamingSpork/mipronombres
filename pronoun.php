<?php

/*
 * This prints out the pronoun nicely formatted, as well as each
 * of the sentences.
 */
function printPronoun($pronoun, $sentences) {
    print '<h1>'.$pronoun."</h1>\n";

    foreach($sentences as $sentence) {
        print '<p>'.$sentence."\n";
    }
}