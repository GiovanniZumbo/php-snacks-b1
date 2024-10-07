<?php

function isPalindrome($word)
{

    if (strrev($word) === $word) {
        return true;
    } else {
        return false;
    }
}
