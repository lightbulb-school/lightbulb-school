function Copy_answer_ToClipboard(search_result) {
    // alert(search_result);
    if (document.selection) {
        var range = document.body.createTextRange();
        range.moveToElementText(document.getElementById(search_result));
        range.select().createTextRange();
        document.execCommand("copy");

    } else if (window.getSelection) {
        var range = document.createRange();
        range.selectNode(document.getElementById(search_result));
        window.getSelection().addRange(range);
        document.execCommand("copy");

    }
}

function count_times_copied($answer_id) {
    alert('copied!');
}