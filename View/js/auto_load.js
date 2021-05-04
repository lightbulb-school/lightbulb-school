$(document).ready(function () {
    
    // var l_b_search = $("#l-b-search").val();
    var l_b_search = "";

    //Make AJAX request
    $.ajax({
        type: "POST",
        url:'Routes/Web.php', // No "../" because the file is included on index.php
        data: {search_item:l_b_search},
        success: function (data) {
            $("#search-results-cont").load('View/home.php?search=' + encodeURIComponent(data) + ' #inner-search-results-cont');                            
        },
    });
    // display search results------------
    search_for_item();
    
});