<?php

$has_acc = false;
if($has_acc ) {
    echo "
    <a onclick='login();'>Se connecter</a>
    <span>ou</span>
    <a onclick='sign_up();'>S'inscire</a>
    ";
}else{
    echo "
    <div id='profil'>
    
        <div class='img_profil' style='background-image: url(\"https://cdn.pixabay.com/photo/2018/08/23/22/29/girl-3626901_960_720.jpg\");'></div>
        <h5><a href='#my_account'>Mon compte</a></h5>
    </div>
    ";
}

?>