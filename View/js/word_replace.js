function wordreplace($answer, $answer_id) {
    var sentence = $answer;
    alert("test");
    alert($answer);
    alert($answer_id);
    // ====wordlist==============================================
    alert(synonyms);
    // =====end of wordlist======================================

    /* for(var i = 0; i < 10; i++){ */
    for (var i = 0; i < 1; i++) {
        // document.body.innerHTML += (replaceWithRandomFromRegexes(sentence, [synonyms_of_genius, synonyms_of_crazy, synonyms_of_crazy, synonyms_of_you_are])) + "<br/>";
        $('#paraphrased_search_answer' + $answer_id).empty();
        // $(".original_search_answer").hide();
        // document.getElementById("paraphrased_search_answer" + $answer_id).innerHTML += (replaceWithRandomFromRegexes(sentence, [synonyms_of_genius, synonyms_of_crazy, synonyms_of_crazy, synonyms_of_you_are])) + "<br/>";
        document.getElementById("paraphrased_search_answer" + $answer_id).innerHTML += (replaceWithRandomFromRegexes(sentence, synonyms)) + "<br/>";
    }

    function replaceWithRandomFromRegexes(theString, theRegexes) {
        //alert(theRegexes);
        for (var i = 0; i < theRegexes.length; i++) {
            theString = globalReplaceWithRandomFromRegex(theString, theRegexes[i]);
            //alert(theRegexes[i]);
        }
        //alert("All the regexes: " + theRegexes);
        return theString;
    }

    function globalReplaceWithRandomFromRegex(theString, theRegexString) {
        var theRegex = new RegExp(theRegexString, "gi");
        //replace all matches of theRegex with '<thing to replace>'
        theString = theString.replace(theRegex, "<thing to replace>")


        //replace the first match of '<thing>'

        while (theString.indexOf("<thing to replace>") != -1) {
            theString = theString.replace("<thing to replace>", getRandomStringFromNestedParentheses(theRegexString));
        }

        //alert(theString);
        return theString;
    }

    function getRandomStringFromNestedParentheses(theString) {
        while (theString.indexOf("(") != -1) {
            theString = replaceInFirstParentheses(theString);
        }
        return theString;
    }

    function replaceInFirstParentheses(theString) {
        //find the index of the first parentheses
        var parenthesesIndex = theString.indexOf("(");
        var randomString = getRandomStringInsideParentheses(theString, parenthesesIndex);
        //alert(randomString);

        //theString = theString.replace();

        //find the string to replace
        var stringToReplace = theString.substring(parenthesesIndex, getCorrespondingParenthesesIndex(theString, parenthesesIndex) + 1);
        //alert(stringToReplace);
        theString = theString.replace(stringToReplace, randomString);
        //alert(theString);
        return theString;
    }

    function getRandomStringInsideParentheses(string, parenthesesIndex) {
        var stringArray = getStringsInsideParentheses(string, parenthesesIndex)
            //find out how to pick random in a range
            //pick something random from the array declared above
            //var theMin = 0;
            //var theMax = stringArray.length-1;
        var randomNumber = Math.floor(Math.random() * stringArray.length);
        return stringArray[randomNumber];
    }

    function getStringsInsideParentheses(string, parenthesesIndex) {
        //alert("calling function getStringsInsideParentheses");
        var theString = getStringFromParentheses(string, parenthesesIndex);
        for (var i = 0; i < theString.length; i++) {
            var theParenthesesNum = getParenthesesNum(theString, i);
            if (theString[i] == '|') {
                //alert("Parentheses num: " + theParenthesesNum);
                if (theParenthesesNum == 0) {
                    theString = theString.substring(0, i) + "|" + theString.substring(i, theString.length);
                    i++;
                }
            }
        }
        //alert(theString);
        return theString.split("||")
    }

    function getStringFromParentheses(theString, parenthesesIndex) {
        return theString.substring(parenthesesIndex + 1, getCorrespondingParenthesesIndex(theString, parenthesesIndex))
    }

    function getCorrespondingParenthesesIndex(theString, openingParenthesesIndex) {
        if (!parenthesesAreMatching(theString)) {
            writeMessage("Error: The parentheses do not match!");
            return false;
        }
        if (theString.charAt(openingParenthesesIndex) != "(") {
            writeMessage("Error: The index must be an opening parentheses!");
            return false;
        }
        var num = 0;
        for (var i = openingParenthesesIndex; i < theString.length; i++) {
            if (theString.charAt(i) == "(") {
                num++;
            }
            if (theString.charAt(i) == ")") {
                num--;
            }
            if (num == 0) {
                return i;
            }
        }
        writeMessage("Error: The parentheses do not match!");
        return false;
    }

    function parenthesesAreMatching(theString) {
        var num = 0;
        for (var i = 0; i < theString.length; i++) {
            if (theString.charAt(i) == "(") {
                num++;
            }
            if (theString.charAt(i) == ")") {
                num--;
            }
        }
        if (num == 0) {
            return i;
        } else {
            return false;
        }
    }

    function getParenthesesNum(theString, index) {
        //this should be based on parenthesesAreMatching, but stopping at index
        var num = 0;
        for (var i = 0; i < index; i++) {
            if (theString.charAt(i) == "(") {
                num++;
            }
            if (theString.charAt(i) == ")") {
                num--;
            }
        }
        return num;
    }
}