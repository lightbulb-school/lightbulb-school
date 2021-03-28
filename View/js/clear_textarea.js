function clear_textarea() {
    // alert('test');
    $('#l-b-search').val("");
    $(".clear-button").fadeOut(500);
    $(".show-search-options-btn").fadeOut(500);
    document.getElementById("l-b-search").style.height = "30px";// reset height to default
    document.getElementById("search-cont").style.paddingBottom = "30px";
    balance_textarea_with_search_container();
}