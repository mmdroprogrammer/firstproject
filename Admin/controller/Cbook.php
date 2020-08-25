<?php

switch ($action) {
    case 'bookadd':
        break;
    case 'bookgroup':
        break;
    case 'bookchapters':
        break;
    case 'booktopics':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';