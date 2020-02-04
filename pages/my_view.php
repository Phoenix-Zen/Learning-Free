<?php

if(!isset($_GET['type'])){
    echo "<script>load_page('home');</script>";
}

$type = $_GET['type'];

$title = "";
switch($type){
    case "post":
        $title = "Posts";
    case "lesson":
        $title = "Cours";
}

?>
<h2 id="title"><?=$title?></h2>
<div id="profil">
    <img class="img_profil" src="https://images.unsplash.com/photo-1580172275379-bf8077ea5b5f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80">
    <div id="profil_pseudo">
        <h3>PseudonymeXXX</h3>
        <span>Auteur</span>
    </div>
</div>

<div id="content"></div>

<script>
    $("#content").load("./pages/my_view/<?=$type?>.php");
</script>

