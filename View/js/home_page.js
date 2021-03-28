function open_question_side_tab($item_number) {
    // alert($item_number);
    $(".options-btns-cont" + $item_number).show();
    $(".options-cont-sub-heading" + $item_number).fadeOut();
    
    $width = $(".options-cont-sub-heading").width();
    // alert($width);
    $(".options-btns-cont" + $item_number).width($width).delay().queue(function (next) {
        $(".options-btns-cont"+$item_number).addClass("options-btns-cont-show");
        next();
    });
    // $(".search-btn-cont").removeClass("search-btn-cont-expanded", function() {});

    // $height = $("#service-disclaimer-side-menu"+$item_number).height();
    // $height = 345 + $height;
    // document.getElementById("options-btns-cont"+$item_number).style.height = $height+"px";
    $(".options-btns-cont" + $item_number).addClass("auto-height");
    
}

function save_question_request($item_number) {

    $(".options-btns-cont" + $item_number).hide();
    $(".options-btns-cont" + $item_number).width($width).delay().queue(function (next) {
        $(".options-btns-cont"+$item_number).removeClass("options-btns-cont-show");
        next();
    });
    $(".options-cont-sub-heading" + $item_number).fadeIn();
}
function quiz_selected($item_number) {
    $(".options-btns-cont" + $item_number).addClass("auto-height");
    $("#How-many-questions" + $item_number).slideDown(1000);    
}
function assay_selected($item_number) {
    $(".options-btns-cont" + $item_number).addClass("auto-height");
    $("#How-many-questions" + $item_number).slideDown(1000);    
}

function select_tutor($item_number) {
    alert($item_number)
    $(".options-btns-cont" + $item_number).addClass("auto-height");
    $(".payment-details").slideDown(1000);
        
}

function post_to_community($item_number) {
    alert($item_number)
    $(".options-btns-cont" + $item_number).addClass("auto-height");
    $(".payment-details").slideUp(1000);
        
}


function balance_textarea_with_search_container() {
    var $textarea_height = $("#l-b-search").height();
    if ($textarea_height > 50) {
        // alert($textarea_height);
        // automaticall match textarea height with bottom pading for search-cont for simless UI UX
        document.getElementById("search-cont").style.paddingBottom = ($textarea_height - 25.5) + "px";
        // document.getElementById("search-cont").style.paddingBottom = ($textarea_height)+"px";
    }
}

function scroll_to_bottom(search_for_item_btn_count, elmnt) {
    // alert(search_for_item_btn_count);
        if (search_for_item_btn_count==0) {
        } else {
            elmnt.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
        }
    // alert(search_for_item_btn_count);
    $(".search-cont").addClass("search-cont-active").delay(2000).queue(function(next) {
        // $(this).addClass("search-cont-flex-height");
        $(".search-input-cont").addClass("fixed-search-cont");
        // $(this).addClass("search-cont-flex-height");
        $(this).addClass("search-cont-flex-height");
        // $(".search-cont").addClass("search-cont-active");
        if (search_for_item_btn_count >= 1) {
            elmnt.scrollIntoView({ block: "end", inline: "nearest" });
            // elmnt.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
        }
        next();
        $("#l-b-search").removeClass("add-height-transition");
    });
}

function smooth_scroll_to_bottom(elmnt) { 
    $(".search-cont").addClass("search-cont-active").delay().queue(function(next) { 
        $(".search-input-cont").addClass("fixed-search-cont");
        $(this).addClass("search-cont-flex-height");
            elmnt.scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });
        next();
        $("#l-b-search").removeClass("add-height-transition");
    });
}
// -----like emojis----------
function like($question_count) {
    hide_emoji_options($question_count);
    show_like_emoji_options($question_count);
}

function expand_like($question_count) {
    $(".likes" + $question_count).addClass("clicked-like-btn");
    $(".dislikes"+ $question_count).removeClass("clicked-dislike-btn");
    
}

function show_like_emoji_options($question_count) {
    $(".like-emojis"+$question_count).slideDown();
}

function above_and_beyond($question_count) {
    hide_emoji_options($question_count);
    expand_like($question_count);
}

function very_happy($question_count) {
    hide_emoji_options($question_count);
    expand_like($question_count);
}

function happy($question_count) {
    hide_emoji_options($question_count);
    expand_like($question_count);
}

function like_neutral($question_count) {
    hide_emoji_options($question_count);
    expand_like($question_count);
}
// ------dislike emojis-----------

function dislike($question_count) {
    hide_emoji_options($question_count);
    show_dislike_emoji_options($question_count);
}

function show_dislike_emoji_options($question_count) {
    $(".dislike-emojis"+$question_count).slideDown();
}

function expand_dislike($question_count) {
    $(".dislikes" + $question_count).addClass("clicked-dislike-btn");
    $(".likes"+ $question_count).removeClass("clicked-like-btn"); 
}
// ------
function dislike_neutral($question_count) {
    hide_emoji_options($question_count);
    expand_dislike($question_count);
}

function sad($question_count) {
    hide_emoji_options($question_count);
    expand_dislike($question_count);
}

function angry($question_count) {
    hide_emoji_options($question_count);
    expand_dislike($question_count);
}

function very_angry($question_count) {
    hide_emoji_options($question_count);
    expand_dislike($question_count);
}
// ----------------
function hide_emoji_options($question_count) {
    $(".like-emojis"+$question_count).slideUp();
    $(".dislike-emojis"+$question_count).slideUp();
}

function show_journal_btn($answer_count) {

    // if($answer_count)
    // alert('show journal btns'+$answer_count);
    $('.source-type-btns-journal' + $answer_count).show();
    
}

function show_document_btn($answer_count) {
    // alert('show document btns');
    $('.source-type-btns-document' + $answer_count).show();
    
}

$(document).ready(function(){
    $width = $(".side-menu-cont").width();
    $width=$width - 10;
    $(".inner-side-menu-cont").width($width);
    // alert($width);
});
  
$(window).resize(function(){
    // alert('testing');
    $width = $(".side-menu-cont").width();
    $width=$width - 10;
    $(".inner-side-menu-cont").width($width);
});






  

