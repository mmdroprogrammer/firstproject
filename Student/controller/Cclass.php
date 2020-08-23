<?php

switch ($action) {
    case 'addclass':
        break;
    case 'listclass':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';