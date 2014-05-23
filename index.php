<?php
    $currentTitle = "Alexandria - Searching books like an egyptian";
    $currentDescription = "Descrição desta página";
    $currentKeywords = "Palavras chaves desta página";
?>
<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
    <main id="content">
        <h1 class="title-center">Welcome to the Alexandria. Use the search below to find a desired title.</h1>
        <div id="search-field">
            <input type="text" id="query" name="q"  placeholder="Search">
            <button type="submit" class="insert btn btn-default search">Submit</button>
        </div>
        <h2>No ideas of what to look?</h2>
        <div class="suggestions">
            <h3>Try among the favorites of Cleopatra</h3>
            <a class="tag" data-tag="fifth shades">Fifth shades</a>
            <a class="tag" data-tag="sylvia day">Sylvia Day</a>
            <a class="tag" data-tag="Romeo and Juliet">Romeo and Juliet</a>
            <a class="tag" data-tag="john green">John Green</a>
        </div>
        <div class="suggestions">
            <h3>Or the Julius Caesar best ones</h3>
            <a class="tag" data-tag="watchmen">Watchmen</a>
            <a class="tag" data-tag="art of war">Art of War</a>
            <a class="tag" data-tag="game of thrones">Game of Thrones</a>
            <a class="tag" data-tag="dune">Dune</a>
            <a class="tag" data-tag="watchmen">Watchmen</a>
        </div>

    </main>

    <?php include 'include/footer.php' ?>
    </body>
</hhtml>