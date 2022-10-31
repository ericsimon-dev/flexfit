<body>
    <!-- Barre de navigation haute avec barre de recherche -->
    <nav class="navbar navbar-expand-lg fixed-top really-fixed-top custom-color" id="top-bar">
        <div class="container-fluid">
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
            </button>
            <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#">FlexFit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            </button>
            <div class="collapse navbar-collapse" id="topNavBar">
            
            <?php 
            if(isset($_SESSION['mail'])){
                $mail=$_SESSION['mail'];
                
                echo("<div class='d-flex ms-auto my-3 my-lg-0 text-right'>
                    <div class='input-group'>
                            <span>Bienvenue $mail</span>
                        </div>
                </div>"
            );
                
            }
            ?>
                <form class="d-flex ms-auto my-3 my-lg-0 text-right">
                    <div class="input-group">
                        <input class="form-control-lg" type="search" placeholder="Rechercher" aria-label="Search" />
                        <button class="btn button-color" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Barre de navigation haute avec barre de recherche -->
    <!-- Barre de navigation gauche -->
    <div class="offcanvas offcanvas-start sidebar-nav custom-color" id="sidebar">
        <div class="offcanvas-body p-0">
            <nav class="navbar-dark">
                <ul class="navbar-nav">
                    <li>
                        <a href="index.php?section=partenaire" class="nav-link px-3 mb-4 mt-3 ms-5 font-navbar custom-color">
                            <span class="me-2"><i class="bi bi-table"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?section=partenaire" class="nav-link px-3 mb-4 ms-5 font-navbar custom-color">
                            <span class="me-2"><i class="bi bi-person"></i></span>
                            <span>Partenaires</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?section=structure" class="nav-link px-3 mb-4 ms-5 font-navbar custom-color">
                            <span class="me-2"><i class="bi bi-file-earmark-person"></i></span>
                            <span>Structures</span>
                        </a>
                    </li>
                    <li>
                    <?php 
                        var_dump($_SESSION);
                        if(isset($_SESSION['mail'])){
                        
                            echo("<a href='index.php?section=deconnexion' class='nav-link px-3 mb-2 ms-5 font-navbar custom-color'>
                                    <span class='me-2'><i class='bi bi-shield-lock'></i></span>
                                    <span>Déconnexion</span>
                                </a>");
                        }
                        else{
                            echo("<a href='index.php?section=connexion' class='nav-link px-3 mb-2 ms-5 font-navbar custom-color'>
                                    <span class='me-2'><i class='bi bi-shield-lock'></i></span>
                                    <span>Connexion</span>
                                </a>");

                        }
                    ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- Barre de navigation gauche -->