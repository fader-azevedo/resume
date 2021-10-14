<?php
$action = isset($_POST['action'])?$_POST['action']:'';

if($action){
    if($action == 'render' && isset($_POST['view'])){
        echo file_get_contents('../view/'.$_POST['view'].'.php');
    }
}
