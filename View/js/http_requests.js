// listen to click event on the search button
$(document).ready(function(){
    $("#search-btn").click(function(){
        $("#search-form").submit();
    });
});
  
// submit search form--------------------------
$("#l-b-search").keypress(function (e) {
    if (e.which == 10 || e.which == 13) {
        $("#search-form").submit();
        // alert('test');
    }
});

$(document).ready(function () {
    // Listen to submit event on the <form> itself! and post search items---------------------
    $('#search-form').submit(function (e) {
        // Prevent form submission which refreshes page
        e.preventDefault();
        var l_b_search = $("#l-b-search").val();

        //Make AJAX request
        var base_url = window.location;
        // alert(base_url);
        $.ajax({
            type: "POST",
            url: base_url + 'Routes/Web.php',
            // url: 'http://ec2-18-225-33-80.us-east-2.compute.amazonaws.com/Routes/Web.php',
            // http://ec2-18-225-33-80.us-east-2.compute.amazonaws.com/Routes/Web.php
            data: {search_item:l_b_search},
            success: function (data) {
                // alert(data);
                // alert('data');

                // alert(base_url);
                // $("#search-results-cont").load('View/home.php?search=' + data + ' #inner-search-results-cont');
                
                // $("#search-results-cont").load(base_url + 'View/home.php?search=' + encodeURIComponent(data) + ' #inner-search-results-cont');
                $("#search-results-cont").load(base_url + 'View/home.php?search=' + encodeURIComponent( data) + ' #inner-search-results-cont');
                // $("#search-results-cont").load('View/home.php?search=' + data + ' #inner-search-results-cont');

                // var search_for_item_btn_count = 0;
                // var elmnt = document.getElementById("lightbulb-home-page-body");
                // scroll_to_bottom(search_for_item_btn_count, elmnt);
                // alert('testxxx')

                // setTimeout(
                //     function() 
                //     {
                //       //do something special
                //     }, 5000);

                
                
            },
            error: function(xhr, status, error) {
               // check status && error
            //    alert(xhr);
            //    alert(status);
            //    alert(error);

            },
            dataType: 'text'
        });
        // display search results------------
        search_for_item();
    });

    // Listen to submit event on the <form> itself! and post signup data---------------------
    $('#signup-formx').submit(function (e) {
        // Prevent form submission which refreshes page
        e.preventDefault();
        var l_b_search = $("#l-b-search").val();
        //Make AJAX request
        $.ajax({
            type: "POST",
            url: 'Routes/web.php',
            data: { search_item: l_b_search },
            success: function (data) {
                alert(data);
            }
        });
        // display search results------------
        search_for_item();
    });

    // -------------------------------

});



