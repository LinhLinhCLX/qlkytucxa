<?php
function public_url($url = '')
{
    return base_url('public/' . $url);
}

function admin_theme($url = '')
{
    return base_url('public/' . $url);
}
function view_theme($url = '')
{
    return base_url('public/webview/' . $url);
}

function link_icon()
{
    return 'http://localhost:8080/webproduct_demo/public/images/';
//    return 'http://115.84.178.148:86/';
}

function link_banner()
{
//    return 'http://115.84.178.148:97/';
    return 'http://localhost:8080/webproduct_demo/public/images/icon/';
}
function pre($list, $exit = true)
{
    echo "<pre>";
    print_r($list);
    if($exit)
    {
        die();
    }
}
?>
