<script>
    require("posts.css");
    require("lesson.css");
</script>

<div id="search_bar">
    <form id="search_form">
        <h3>Rechercher</h3>
        <select>
            <option class="select_default" selected="selecteds">Tous</option>
            <option>Cour</option>
            <option>Post</option>
        </select>
        <input type="text" placeholder="Element à rechercher">
        <button>Valider</button>
    </form>
</div>

<div id="result">
    <i id="result_spinner" class="fas fa-spinner fa-pulse fa-2x"></i>

    <div id="result_div">
        <h2>Résultat(s) de la recherche:</h2>
        <div class="post">
            <h2>Nom du post très long qui fait plus d'une ligne</h2>
            <div class="infos">
                <span>Il y a 3h</span>
                <span>Par Username</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur debitis nihil illo voluptas. Nihil, adipisci! Qui illum esse corporis facilis rem excepturi reiciendis autem? Vitae nisi distinctio tenetur est alias!</p>
        </div>
        <div class="cour">
            <h3>Nom du cour</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem necessitatibus magni repudiandae itaque alias cumque tempore accusamus possimus aperiam sint ipsa, impedit praesentium id excepturi ducimus dolores. Vel, explicabo velit.</p>
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
</div>

<script>
    $("#result_div").toggle();
    $("#result_spinner").toggle();
    $(document).ready(function () {
        $("form#search_form").submit(function (e) {
            e.preventDefault();
            $("#result_div").fadeOut(400, function () {
                $("#result_spinner").fadeIn(400, function () {
                    setTimeout(function () {
                        $("#result_spinner").fadeOut(400, function () {
                            $("#result_div").fadeIn();
                        });
                    }, 200);
                });
            });
            return false;
        });
    });

</script>