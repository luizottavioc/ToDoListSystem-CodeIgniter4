<?php 

function version_js() {
   return '?v1.2';
}

function permissoes_helper($permissao_code) {
    $permiss = new App\Libraries\AuthVerify;
    return $permiss->permissoes($permissao_code);
}