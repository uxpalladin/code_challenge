<?php
$currentTitle = "Alexandria - Searching books like a egyptian";
$currentDescription = "Descrição desta página";
$currentKeywords = "Palavras chaves desta página";
?>
<?php include 'include/head.php'; ?>
<?php include 'include/header.php'; ?>
<main>
    <h1>Welcome to the Alexandria. Here you can find awesome books for a very attractive price. Use the search below to find a desired title.</h1>
    <form class="navbar-form navbar-left" role="search" action="search.php" method="get">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
            <span class="input-group-btn">
          <button class="btn btn-lg btn-primary">
              <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
    </form>
    <?php
    echo $search_query = $_GET['q'];
    include("classes/amazon_api_class.php");
    $obj = new AmazonProductAPI();

    try
    {
        $result = $obj->searchProducts($search_query,AmazonProductAPI::BOOK,"TITLE");
    }
    catch(Exception $e)
    {
        echo $e->getMessage();

    }

    //print_r($result);


    if ($e == "") {
    $similar_products = $result->Items->Item;
        echo '<div class="search-result">';
    foreach($similar_products as $si){

        $item_url = $si->DetailPageURL; //get its amazon url
        $img = $si->LargeImage->URL; //get the image url
        echo "<div class='row'>";
        echo "<div class='book-image' style='background-image: url("; echo $img; echo ")'/></div>";
        //echo "<a href='$item_url'>". $si->ASIN . "</a>";
        echo "<b>Title</b>" . $si->ItemAttributes->Title . "<br>";
        echo "<b>Author</b>" . $si->ItemAttributes->Author . "<br>";
        echo "<b>Publisher</b>" . $si->ItemAttributes->Publisher . "<br>";
        echo "<b>Publication Date</b>" . $si->ItemAttributes->PublicationDate . "<br>";
        echo "<b>Format</b>" . $si->ItemAttributes->Binding . "<br>";
        echo "<b>Price</b>" . $si->ItemAttributes->ListPrice->FormattedPrice . "<br>";
        echo "</div>";
    }
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger">Oops... no results for the query <b>'; echo $search_query;  echo '</b>. Try another one.</div>';
    }
    ?>
</main>
<?php include 'include/footer.php' ?>
</body>
</hhtml>