function manage_bubble($question_count,$text){

    var number_of_text = $text.length;
    if (number_of_text <= 100) {
        $("#manage-bubble" + $question_count).addClass('width-at-one-hundred');
    } else if ((number_of_text > 100)&&(number_of_text < 200)) {
        $("#manage-bubble" + $question_count).addClass('width-at-two-hundred');
    } else if ((number_of_text > 200)&&(number_of_text < 300)) {
        $("#manage-bubble" + $question_count).addClass('width-at-three-hundred');
    } else if ((number_of_text > 300)&&(number_of_text < 400)) {
        $("#manage-bubble" + $question_count).addClass('width-at-four-hundred');
    }else if (number_of_text > 400) {   
    }
}