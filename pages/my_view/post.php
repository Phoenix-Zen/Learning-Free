<script>
    require("posts.css");
    require("pages/my_view/post/style.css")
</script>
<div id="post">
    <ul>
        <li>
            <i class="fas fa-chevron-circle-right"></i>
            <div class="post_desc">
                <div class="scroller"><div class="scroll_fill"></div></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla, quae sunt dolorem quibusdam magnam error consectetur culpa. Doloremque consectetur accusantium quo rerum nisi ipsa optio autem!</p>
                <a href="#post?id=3">Lire plus</a>
            </div>
            <div class="post" id="post_3">
                <h2>Nom du post très long qui fait plus d'une ligne</h2>
                <div class="infos">
                    <span>Il y a 3h</span>
                    <span>Par Username</span>
                </div>
            </div>
        </li>
        <li>
            <i class="fas fa-chevron-circle-right"></i>
            <div class="post_desc">
                <div class="scroller"><div class="scroll_fill"></div></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla, quae sunt dolorem quibusdam magnam error consectetur culpa. Doloremque consectetur accusantium quo rerum nisi ipsa optio autem!</p>
                <a href="#post?id=3">Lire plus</a>
            </div>
            <div class="post" id="post_3">
                <h2>Nom du post très long qui fait plus d'une ligne</h2>
                <div class="infos">
                    <span>Il y a 3h</span>
                    <span>Par Username</span>
                </div>
            </div>
        </li>
        <li>
            <i class="fas fa-chevron-circle-right"></i>
            <div class="post_desc">
                <div class="scroller"><div class="scroll_fill"></div></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla, quae sunt dolorem quibusdam magnam error consectetur culpa. Doloremque consectetur accusantium quo rerum nisi ipsa optio autem!</p>
                <a href="#post?id=3">Lire plus</a>
            </div>
            <div class="post" id="post_3">
                <h2>Nom du post très long qui fait plus d'une ligne</h2>
                <div class="infos">
                    <span>Il y a 3h</span>
                    <span>Par Username</span>
                </div>
            </div>
        </li>
        <li>
            <i class="fas fa-chevron-circle-right"></i>
            <div class="post_desc">
                <div class="scroller"><div class="scroll_fill"></div></div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla,Lorem ipsum dolor sit amet consectetur adipisicing elit. Id esse, eligendi aspernatur nulla, quae sunt dolorem quibusdam magnam error consectetur culpa. Doloremque consectetur accusantium quo rerum nisi ipsa optio autem!</p>
                <a href="#post?id=3">Lire plus</a>
            </div>
            <div class="post" id="post_3">
                <h2>Nom du post très long qui fait plus d'une ligne</h2>
                <div class="infos">
                    <span>Il y a 3h</span>
                    <span>Par Username</span>
                </div>
            </div>
        </li>
    </ul>
</div>

<script>
    $(document).ready(function () {
        $("li .fas").click(function () {
            $(this).parent().toggleClass("show");
        });
        $(".post").click(function () {
            document.location.hash = "post?id="+$(this)[0].id.replace("post_", "");
        });
        $(".post_desc").scroll(function () {
            var scrollHeight = Math.round($(this)[0].scrollHeight - $(this).outerHeight()) + 2/*border bot + top*/;
            var scrollTop = Math.round($(this)[0].scrollTop);
            var dif = scrollHeight - scrollTop;
            $(this).parent().find(".scroll_fill").css("height", (scrollTop*100/scrollHeight)+"%");
        });
    });
</script>