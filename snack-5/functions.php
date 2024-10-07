<?php


function isPalindrome()
{
    if (strrev($_GET["userword"] === $_GET["userword"])) {
        return true;
    } else {
        return false;
    }
}
