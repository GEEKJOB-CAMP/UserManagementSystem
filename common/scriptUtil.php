<?php
require_once '../common/defineUtil.php';


function return_top(){
    return "<a href='".ROOT_URL."'>トップへ戻る</a>";
}

function ex_typenum($type){
    switch ($type){
        case 1;
            return "エンジニア";
        case 2;
            return "営業";
        case 3;
            return "その他";
    }    
}
