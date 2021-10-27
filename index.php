<?php

function adminer_object()
{
    include_once 'AdminerPlugin.php';
    include_once 'AdminerFrames.php';
    include_once 'AdminerTablesFilter.php';
    include_once 'AdminerJsonColumn.php';

    $plugins = [
        new AdminerFrames(),
        new AdminerTablesFilter(),
        new AdminerJsonColumn()
    ];

    return new AdminerPlugin($plugins);
}

require 'adminer.php';
