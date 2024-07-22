<?php
namespace Ember\HexletPhp;

function run()
{
    return collect(['taylor', 'abigail', 'ivan'])->map(function ($name) {
        return strtoupper($name);
    });
}