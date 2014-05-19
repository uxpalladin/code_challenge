<?php
    $currentTitle = "Alexandria - Searching books like a egyptian";
    $currentDescription = "Descrição desta página";
    $currentKeywords = "Palavras chaves desta página";
?>
<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
    <main>
        <h1 class="title-center">Welcome to the Alexandria. Here you can find awesome books for a very attractive price. Use the search below to find a desired title.</h1>
        <form class="navbar-form navbar-left" role="search" action="search.php" method="get">
            <div class="form-group">
                <input type="text" name="q" class="form-control" placeholder="Search">
            </div>
            <span class="input-group-btn">
          <button class="btn btn-lg btn-primary">
              <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
        </form>
        <h2>No ideas of what to look?</h2>
        <div class="suggestions">
            <h3>Try among the favorites of Cleopatra</h3>
            <a href="search.php?q=fifth shades of">Fifth shades of gray</a>
        </div>
        <div class="suggestions">
            <h3>Or the Julius Caesar best ones</h3>
            <a href="search.php?q=fifth shades of">Fifth shades of gray</a>
        </div>

    </main>
    <?php include 'include/footer.php' ?>
    </body>
</hhtml>