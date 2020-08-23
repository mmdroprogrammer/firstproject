<?php

switch ($action) {
    case 'AddStudent':
        break;
    case 'ListStudent':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';