<?php

switch ($action) {
    case 'addcurriculum':
        break;
    case 'listcurriculum':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';