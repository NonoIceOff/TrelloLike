<div class="header-alignment">
    <img src="assets/images/logo.png" width="24" height="24" />

    <nav class="header-nav">
        <a href="index.php" class="<?php if ($page == "index") {
                                                                    echo "active";
                                                                } else {
                                                                    echo "header-a";
                                                                } ?>"> ACCUEIL </a>
        <a href="tableaux.php" class="<?php if ($page == "tableaux") {
                                                                    echo "active";
                                                                } else {
                                                                    echo "header-a";
                                                                } ?>"> TENDANCES </a>
        <a href="login.php" class="<?php if ($page == "connexion") {
                                                                    echo "active";
                                                                } else {
                                                                    echo "header-a";
                                                                } ?>"> SE CONNECTER </a>
        <a href="profile.php" class="<?php if ($page == "profile") {
                                                                    echo "active";
                                                                } else {
                                                                    echo "header-a";
                                                                } ?>"> PROFIL </a>
    </nav>
</div>