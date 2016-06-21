<?php
$menu = [
    ['link'=>'/', 'title'=>'Home'],
    ['link'=>'/services', 'title'=>'Services'],
    ['link'=>'/news', 'title'=>'News'],
    ['link'=>'/contacts', 'title'=>'Write to us']
    ['link'=>'/help', 'titile'=>'Help']
];
function showMenu($menuArray,$n=10)
{
    echo '<ul>';
    foreach($menuArray AS $keyl=>$item)
    {
     echo '<li><a href="'.$item['link'].'">'.$item['title'].'</a></li>';
    }
    echo '</ul>';
    
    if($n>1)
    return showMenu($menuArray,$n-1);
    else
    return 1;
}
echo showMenu($menu);
?>
