<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>submit demo</title>
    <style>
    p {
        margin: 0;
        color: blue;
    }

    div,
    p {
        margin-left: 10px;
    }

    span {
        color: red;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <?php
include('../View/head.php');
?>
</head>
<form action="" id='text-box-form'>

    <body>

        <p>Type 'correct' to validate.</p>

        <div>
            <!-- <input type="text" id='text-box'> -->
            <textarea id='l-b-search' placeholder='Search Lightbulb'></textarea>
            <input type="submit">

        </div>

        <span></span>

        <script>
        $('#l-b-search').keypress(function(e) {
            // Enter pressed?
            if (e.which == 10 || e.which == 13) {
                $("#text-box-form").submit();
            }


        });

        $(document).ready(function() {
            // Listen to submit event on the <form> itself!
            $('#text-box-form').submit(function(e) {
                // alert('test');
                // Prevent form submission which refreshes page
                e.preventDefault();
                // alert('test');
                var l_b_search = $("#l-b-search").val();
                // Serialize data
                // var formData = $(this).serialize();
                alert(l_b_search);

                //Make AJAX request
                $.ajax({
                    type: "POST",
                    url: 'View/testpage.php',
                    data: {
                        search_item: l_b_search
                    },
                    success: function(data) {
                        alert('it works');
                        //===reload the View===========================================
                        // $(".View-container").load("model.php", {search_item : $search_item} );
                    }
                });

            });
        });

        // $(this).find('input[type=submit]').hide();
        </script>
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <script src="View/js/flyto.js"></script>
        <script>
        $('.items').flyto({
            item: 'li',
            target: '.cart',
            button: '.my-btn'
        });
        </script>

    </body>
    <?php
// include('View/footer.php');
include('../Libraries/Libraries.php');
?>
</form>

</html>