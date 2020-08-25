<?php

switch ($action) {
    case 'addstudent':
        break;
    case 'liststudent':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';