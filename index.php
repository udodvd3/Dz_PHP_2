<?php
define("APP","111");
$page = isset($_GET['page']) ? $_GET['page'] : "main";

if($page == "main"){
    $view = "main";
    $logic = "main";
    $tmpl = "tmpl-main";

}elseif ($page == "contacts") {
    $view = "contacts";
    $logic = "contacts";
    $tmpl = "tmpl-1";

}elseif ($page == "portfolio"){
    $view = "portfolio";
    $logic = "portfolio";
    $tmpl = "tmpl-2";
}
else{
    $view = "404";
    $logic = null;
    $title = "NOT FOUND";
}
if($logic != null){
    include "./logic/".$logic.".php";
}
include "./templates/".$tmpl.".php";