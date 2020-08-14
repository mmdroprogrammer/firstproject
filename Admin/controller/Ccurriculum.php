<?php

switch ($action) {
    case 'AddCurriculum':
        break;
    case 'ListCurriculum':
        break;
    default:
        # code...
        break;
}
require_once 'view/'.$controller."/".$action.'.php';