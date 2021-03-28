// resource links
// https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollIntoView

var search_for_item_btn_count = 0;
var elmnt = document.getElementById("lightbulb-home-page-body");
function search_for_item($unique_id) {
    search_for_item_btn_count++;
    // alert('your test');
    $("#l-b-search").addClass("add-height-transition");
    $("#l-b-search").css("overflow-y", "hidden");
    $(".search-results-cont").fadeIn(3000);
    $(".banner-cont").fadeOut();
    // alert('test');
    // $('#l-b-search').val("");//important if active clears text box
    // ***********
    // use blur funtion intead of focusout to programatically focusout the search 
    // focusout/blur to allow the Post/share/brainstorm Icon to swith back to 
    // search icon when user clicks on the search box again or modifies their search
    $("#l-b-search").blur();
    // ***********
    // *****search btn icon flow*************
    $(".search-options-btns-lb-icon-3").hide();//must be placed under setfocus at all times this is because setfocus triggers another function that checks to see if textarea is populated and if so, shows search icon
    $(".search-options-btns-lb-icon-4").show();//show post btn
    // *****end search btn icon flow*************
    $(".post-question").fadeIn();
    // document.getElementById("l-b-search").style.height = "55px";// reset height
    // document.getElementById("l-b-search").style.height = "30px";// reset height to default
    balance_textarea_with_search_container();
    scroll_to_bottom(search_for_item_btn_count, elmnt);

    

    
    

    

    

}