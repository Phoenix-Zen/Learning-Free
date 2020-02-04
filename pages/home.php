<script async="async">
    require("posts.css");
    require("lesson.css");
</script>
<div id="cours">
    <span>Cours</span>
    <div id="cours_div">
        <div id="cours_close">
            <i class="fas fa-times"></i>
        </div>
        <h2>Cours suivis</h2>
        <ul id="cours_ul">

            <li>
                <div class="cour">
                    <h3>Nom du cour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus magni repudiandae itaque alias cumque tempore accusamus possimus aperiam sint ipsa, impedit praesentium id excepturi ducimus dolores. Vel, explicabo velit.</p>
                </div>
            </li>
            <li>
                <div class="cour">
                    <h3>Nom du cour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus magni repudiandae itaque alias cumque tempore accusamus possimus aperiam sint ipsa, impedit praesentium id excepturi ducimus dolores. Vel, explicabo velit.</p>
                </div>
            </li>
            <li>
                <div class="cour">
                    <h3>Nom du cour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus magni repudiandae itaque alias cumque tempore accusamus possimus aperiam sint ipsa, impedit praesentium id excepturi ducimus dolores. Vel, explicabo velit.</p>
                </div>
            </li>
            <li>
                <div class="cour">
                    <h3>Nom du cour</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus magni repudiandae itaque alias cumque tempore accusamus possimus aperiam sint ipsa, impedit praesentium id excepturi ducimus dolores. Vel, explicabo velit.</p>
                </div>
            </li>

        </ul>
    </div>
</div>
<div id="posts">
    <h1>Acceuil</h1>

    <div id="posts_icon">
        <i class="far fa-newspaper fa-3x"></i>
        <h2>Derniers posts:</h2>
    </div>

    <div class="post">
        <h2>Nom du post très long qui fait plus d'une ligne</h2>
        <div class="infos">
            <span>Il y a 3h</span>
            <span>Par Username</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis nihil illo voluptas. Nihil, adipisci! Qui illum esse corporis facilis rem excepturi reiciendis autem? Vitae nisi distinctio tenetur est alias!</p>
    </div>
    <div class="post">
        <h2>Nom du post très long qui fait plus d'une ligne</h2>
        <div class="infos">
            <span>Il y a 3h</span>
            <span>Par Username</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis nihil illo voluptas. Nihil, adipisci! Qui illum esse corporis facilis rem excepturi reiciendis autem? Vitae nisi distinctio tenetur est alias!</p>
    </div>
    <div class="post">
        <h2>Nom du post très long qui fait plus d'une ligne</h2>
        <div class="infos">
            <span>Il y a 3h</span>
            <span>Par Username</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis nihil illo voluptas. Nihil, adipisci! Qui illum esse corporis facilis rem excepturi reiciendis autem? Vitae nisi distinctio tenetur est alias!</p>
    </div>
    <div class="post">
        <h2>Nom du post très long qui fait plus d'une ligne</h2>
        <div class="infos">
            <span>Il y a 3h</span>
            <span>Par Username</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis nihil illo voluptas. Nihil, adipisci! Qui illum esse corporis facilis rem excepturi reiciendis autem? Vitae nisi distinctio tenetur est alias!</p>
    </div>
</div>







<script async="async">
    $("#cours span").click(function () {
        $("#cours span").fadeOut(300, function () {
            $("#cours").addClass("cour_show");
        });
    });
    $("#cours_close").click(function () {
        $("#cours").removeClass("cour_show");
        setTimeout(function () {
            $("#cours span").fadeIn(300);
        }, 800);
    });
</script>