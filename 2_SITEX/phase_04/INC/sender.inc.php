<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 14/05/18
 * Time: 10:09
 */

if (count(get_included_files()) == 1) die("--access denied--");

$toSend = [];

function display($txt) {
    global $toSend;
    if (!isset($toSend['display'])) $toSend['display'] = "";
    $toSend['display'] .= $txt;
}

function error($txt) {
    global $toSend;
    if (!isset($toSend['error'])) $toSend['error'] = "";
    $toSend['error'] .= $txt;
}

function debug($txt) {
    global $toSend;
    if (!isset($toSend['debug'])) $toSend['debug'] = "";
    $toSend['debug'] .= $txt;
}

function kint($txt) {
    global $toSend;
    if (!isset($toSend['kint'])) $toSend['kint'] = "";
    $toSend['kint'] .= $txt;
}

function toSend($txt, $action = 'display') {
    global $toSend;
    if (!isset($toSend[$action])) $toSend[$action] = "";
    $toSend[$action] .= $txt;
}