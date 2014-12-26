<div class="row">
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
        <div class="container-fluid">
              <button type="button" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navwrapper">
            <a class="brand" href="index.php">Cocomo Creative</a>
            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li class="nav_home <?php if ($section == "Home") { echo "active"; } ?>"><a href="index.php">HOME</a> </li>
                    <li class="nav_about <?php if ($section == "The Woman") { echo "active"; } ?>"><a href="about.php">THE WOMAN</a> </li>
                    <li class="nav_portfolio <?php if ($section == "The Work") { echo "active"; } ?>"><a href="portfolio.php">THE WORK</a> </li>
                    <li class="nav_resume <?php if ($section == "The Creds") { echo "active"; } ?>"><a href="docs/resume1.pdf" target="_blank">THE CREDS</a> </li>
                    <li class="nav_blog <?php if ($section == "The Blog") { echo "active"; } ?>"><a href="blog/index.php" target="_blank">THE JOURNAL</a> </li>
                </ul>
            </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</nav>
</div>
