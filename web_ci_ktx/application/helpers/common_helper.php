<?php
// function public_url($url ='')
// {
// 	echo  base_url( "public/" );
// }
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
