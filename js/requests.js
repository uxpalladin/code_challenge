$(document).ready(function(){
    $(document).on('click', ".search", function(){
        var query = $("#query").val();
        $("#content").html('<div class="loading"><img src="images/loader.gif" /><br>Please wait. Contacting Amazon...</div>');
        $("#content").load("search.php",  {query: query});
    });


    $(document).on('click', ".tag", function(){
        var query = $(this).attr('data-tag');
        $("#content").html('<div class="loading"><img src="images/loader.gif" /><br>Please wait. Contacting Amazon...</div>');
        $("#content").load("search.php", {query: query});
    });
});