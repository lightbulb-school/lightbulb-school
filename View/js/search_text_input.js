// ----------------check for pasted queries----------
function pasted_query() {
    $value = document.getElementById('l-b-search').value;
    if ($value == '') { //== if search text box is nolonger populated hide search button==========
        
    } else { //-------if search text box is populated show search button and hide search option buttons -----------------
        contract_search_btn_cont();
        switch_to_search_mode();
    }
}

// ----------------set focus if wrapper is clicked-----------------
$('.l-b-search-input-wrapper').click(function () {
    $('#l-b-search').focus();
});
// ----------check if search text field is pulpulated --------------
var track_key_press = 0;
function check_text_field() {
    $("#l-b-search").keyup(function (e) {//original code
    // $("#l-b-search").keypress(function (e) {
    // $("#l-b-search").focus(function (e) {
        // ----------------------------------------------------------
        $value = document.getElementById('l-b-search').value;
        if ($value == '') { //== if search text box is nolonger populated hide search button==========
            switch_to_default_mode();
            clear_textarea();
            track_key_press = 0;// initialise key press count whenever text field is cleared to enable search mode after clearing the search text field.
        } else { //-------if search text box is populated show search button and hide search option buttons -----------------

            track_key_press++;
            if (track_key_press >= 2) {
                // alert(track_key_press);
                // alert("testing icon");
            } else {
                // alert('switch to search mode');
                contract_search_btn_cont();
                switch_to_search_mode();
            }
        }

        add_scroll_search_text_input_on_maxheight();        
        balance_textarea_with_search_container();

    });

    $("#l-b-search,.l-b-search-input-wrapper").click(function (e) {
        track_key_press = 0;
        // alert(track_key_press);
    });

    

}


function add_scroll_search_text_input_on_maxheight() {
    // --------add scroll if max height reached-----------------
    var $maxHeight = 300;
    if ( $("#l-b-search").height() >= $maxHeight) {
        $("#l-b-search").css("overflow-y", "scroll");
    } else{
        $("#l-b-search").css("overflow-y", "hidden");
    }
    // ---------balance textarea with search cont---------------
}

function switch_to_search_mode() {
    $(".search-options-btns-lb-icon-1,.search-options-btns-lb-icon-2,.search-options-btns-lb-icon-4").hide();
    $(".search-options-btns-lb-icon-3").show();
    $(".show-search-options-btn").fadeIn(500);
    $(".clear-button").fadeIn(500);
}

function switch_to_default_mode() { 
    $(".search-options-btns-lb-icon-2,.search-options-btns-lb-icon-3,.search-options-btns-lb-icon-4").hide();
    $(".search-options-btns-lb-icon-1").show();
    $(".show-search-options-btn").fadeOut(500);
    $(".clear-button").fadeOut(500);
}
