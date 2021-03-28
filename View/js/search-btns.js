function expand_search_btn_cont($unique_id) {
    // alert('test');
    $(".search-btn-cont" + $unique_id).addClass("search-btn-cont-expanded", function() {});
    $(".search-options-btns-cont").fadeIn(2000);
    $(".search-options-btns-lb-icon-1").hide();
    $(".search-options-btns-lb-icon-2").show();
    $(".search-options-btns-lb-icon-3").hide();
    $(".show-search-options-btn").hide();



}

function contract_search_btn_cont() {
    // alert('test');
    $(".search-options-btns-lb-icon-2").hide();
    $(".search-options-btns-lb-icon-1").show();
    $(".search-options-btns-cont").fadeOut();
    $(".search-btn-cont").removeClass("search-btn-cont-expanded", function() {});
}

// ========hide search options on focus======
$("#l-b-search").focusin(function() {

    $value = document.getElementById('l-b-search').value;
    if ($value == '') {
        contract_search_btn_cont();
    } else {
        
        check_text_field();
        contract_search_btn_cont();
        $(".search-options-btns-lb-icon-1,.search-options-btns-lb-icon-2,.search-options-btns-lb-icon-4").hide();
        $(".search-options-btns-lb-icon-3").show();
        $(".show-search-options-btn").fadeIn(500);
    }
});

function switch_to_Apa_citation($answer_count) {
    alert($answer_count);
    $(".apa-citation"+$answer_count).show();
    $(".harvard-citation"+$answer_count).hide();

}

function switch_to_Harvard_citation($answer_count) {
    alert($answer_count);
    $(".apa-citation"+$answer_count).hide();
    $(".harvard-citation"+$answer_count).show();

}