<?php

$url = "http://localhost/food_project/";

function getActiveUrl(){
    $urlArr = explode('/',$_SERVER['REQUEST_URI']);
    return ["active_page"=>$urlArr[3]?$urlArr[3]:'',"page_type"=>$urlArr[4]?$urlArr[4]:""];
}

function checkActiveSection($section){
    $activeUrl = getActiveUrl();
    return $activeUrl["active_page"] && $activeUrl["active_page"]==$section;
}

function checkActivePage($page){
    $activeUrl = getActiveUrl();
    return $activeUrl["page_type"] && strpos($activeUrl["page_type"], $page) !== false;
}

?>