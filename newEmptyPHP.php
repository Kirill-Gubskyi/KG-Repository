
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
function showMenu($menuArray)
{
    echo '<ul>';
    foreach($menuArray AS $keyl=>$item)
    {
     echo '<li><a href="'.$item['link'].'">'.$item['title'].'</a>
           </li>';
    }
    echo '</ul>';
}

echo showMenu($menu);
?>
