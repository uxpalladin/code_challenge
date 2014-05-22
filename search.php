<div id="search-field">
    <input type="text" id="query" name="q"  placeholder="Search">
    <button type="submit" class="insert btn btn-default search">Submit</button>
</div>

    <?php
    $query = $_POST['query'];
    include("classes/amazon_api_class.php");
    $obj = new AmazonProductAPI();

    try
    {
        $result = $obj->searchProducts($query,AmazonProductAPI::BOOK,"TITLE");
        $e = "";
    }
    catch(Exception $e)
    {
        $e->getMessage();

    }

    //print_r($result);


    if ($e == "") {
    $similar_products = $result->Items->Item;
        echo '<div class="alert alert-success">Results founded for the query <b>'; echo $query;  echo '</b></div>';
        echo '<div class="search-result">';
    foreach($similar_products as $si){

        $item_url = $si->DetailPageURL; //get its amazon url
        $img = $si->LargeImage->URL; //get the image url
        echo "<div class='row'>";
            echo "<div class='book-image' style='background-image: url("; echo $img; echo ")'></div>";
            echo "<div class='text'>";
                echo "<b>Title: </b>" . $si->ItemAttributes->Title . "<br>";
                echo "<b>Author: </b>" . $si->ItemAttributes->Author . "<br>";
                echo "<b>Publisher: </b>" . $si->ItemAttributes->Publisher . "<br>";
                echo "<b>Publication Date: </b>" . $si->ItemAttributes->PublicationDate . "<br>";
                echo "<b>Format: </b>" . $si->ItemAttributes->Binding . "<br>";
                echo "<b>Price: </b>" . $si->ItemAttributes->ListPrice->FormattedPrice . "<br>";
                echo "<a href='".$item_url."' target='_blank'>Buy it on Amazon</a>";
            echo "</div>";
        echo "</div>";
    }
        echo '</div>';
    } else {
        echo '<div class="alert alert-danger">Oops... no results for the query <b>'; echo $query;  echo '</b>. Try another one.</div>';
    }
    ?>