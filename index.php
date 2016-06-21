<?php
$menu = [
    ['link'=>'/', 'title'=>'Home'],
    ['link'=>'/services', 'title'=>'Services', 'children'=>[
         ['link'=>'/serv1', 'title'=>'Serv 1'],
         ['link'=>'/serv2', 'title'=>'Serv 2'],
         ['link'=>'/serv3', 'title'=>'Serv 3'],
    ]],
    ['link'=>'/news', 'title'=>'News'],
    ['link'=>'/contacts', 'title'=>'Write to us']
];
$n=5;
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
