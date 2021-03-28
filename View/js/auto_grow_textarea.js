// global variables
// search_for_item_btn_count
var initial_height = 50;
function auto_grow(element) {
    
    element.style.height = "5px";
    element.style.height = (element.scrollHeight) + "px";

    if (initial_height != $(element).height()) {//only call scroll function if height changes  
        initial_height = $(element).height();
        // alert(initial_height);

        if (search_for_item_btn_count >= 1) {
            smooth_scroll_to_bottom(elmnt);
        }
    }

    // if ($(element).height() >= $maxHeight) { }
    
    
}