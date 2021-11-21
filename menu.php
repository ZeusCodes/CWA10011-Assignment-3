<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Company Details" />
    <meta name="keywords" content="Home Page, Oracle" />
    <meta name="author" content="Pallab Paul" />
</head>

<body>
    <?php

    function homePage($page){
        return ($page == 1)? "active": null ;
    }

    function jobsPage($page){
        return ($page == 2)? "active": null ;
    }

    function applyPage($page){
        return ($page == 3)? "active": null ;
    }

    function aboutPage($page){
        return ($page == 4)? "active": null ;
    }

    function enhancementPage($page){
        return ($page == 5)? "active": null ;
    }

    function managerPage($page){
      return ($page == 6)? "active": null ;
  }

    function menu($page){
    echo ('    
    <img src="./images/oracle_logo.png" alt="Logo" class="brand-logo-fixed" />
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navigator"
            aria-controls="navigator"
            aria-expanded="true"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="./index.php">
            <img
              src="./images/oracle_logo.png"
              alt="Logo"
              class="d-inline-block align-text-center brand-logo"
            />
          </a>
          <div class="collapse navbar-collapse" id="navigator">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a 
                class="nav-link ' );
                echo(homePage($page));
                echo ('"
                href="./index.php"
                >Home</a>
              </li>
              <li class="nav-item">
                <a 
                class="nav-link ' );
                echo(jobsPage($page));
                echo ('" 
                href="./jobs.php"
                >Jobs</a>
              </li>
              <li class="nav-item">
                <a 
                class="nav-link ' );
                echo(applyPage($page));
                echo ('" 
                href="./apply.php"
                >Apply</a
                >
              </li>
              <li class="nav-item">
                <a
                class="nav-link ' );
                echo(aboutPage($page));
                echo ('"
                href="./about.php"
                >About</a>
              </li>
              <li class="nav-item">
                <a 
                class="nav-link ' );
                echo(managerPage($page));
                echo ('"
                href="./manage.php"
                >Manage Applications</a>
              </li>
              <li class="nav-item">
                <a
                id="dropDownLink"
                class="nav-link ' );
                echo(enhancementPage($page));
                echo ('"
                aria-current="page"
                >Enhancements⬇️</a
                >
                <div id="dropDownMenu" class="dropdown-content">
                  <a href="./enhancements.php">CSS Enhancement</a>
                  <a href="./enhancements2.php">JS Enhancement</a>
                  <a href="./phpenhancements.php">PHP Enhancement</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    ');
    }
    ?>
</body>

</html>