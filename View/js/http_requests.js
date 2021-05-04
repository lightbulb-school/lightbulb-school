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


    // -------home-login-login-signup-form-------------------
    $('#home-login-signup-form').submit(function (e) {
        // Prevent form submission which refreshes page
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        // alert(email);
        //Make AJAX request
        $.ajax({
            type: "POST",
            url:'Routes/Web.php', // Add "../" because the file is not included on index.php
            data: {email:email,password:password},
            success: function (data) {
                alert(data);
                // $("#search-results-cont").load(base_url + 'View/home.php?search=' + encodeURIComponent( data) + ' #inner-search-results-cont');
            }, 
        });
        
    });
    // -------login-------------------
    $('#login-form').submit(function (e) {
        // Prevent form submission which refreshes page
        e.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        alert(email);
        //Make AJAX request
        $.ajax({
            type: "POST",
            url:'../Routes/Web.php', // Add "../" because the file is not included on index.php
            data: {email:email,password:password},
            success: function (data) {
                alert(data);
                // $("#search-results-cont").load(base_url + 'View/home.php?search=' + encodeURIComponent( data) + ' #inner-search-results-cont');
            }, 
        });
        
    });
    
    
    
    
    
    
    
    // ---------------------------------------------


    // Listen to submit event on the <form> itself! and post signup data---------------------
    $('#signup-form').submit(function (e) {
        // Prevent form submission which refreshes page
        e.preventDefault();

        alert('testing');
        var user_name = $("#user_name").val();
        var user_email = $("#user_email").val();
        var password = $("#password").val();
        
        alert(password);

        //Make AJAX request
        $.ajax({
            type: "POST",
            url: 'Routes/web.php',
            data: { user_name: user_name,user_email:user_email,password:password },
            success: function (data) {
                alert(data);
            }
        });
        // display search results------------
        search_for_item();
    });
    // -------------------------------

});



