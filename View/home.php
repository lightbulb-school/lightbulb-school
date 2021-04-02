<?php
// variable declaration =======
$unique_id='1';
$page_count='';
$page_label='';
$journal='lb_journal_';
$document='lb_document_';
$page_name='home';
?>

<!DOCTYPE html>

<html manifest='manifest.appcache' lang="en">
<?php
include('View/head.php');
?>
<?php
// ====Answers table======
$answer_id=1;
// $answer="You aren &#39;t a crackpot! You &#39;re a prodigy!";
$answer="Remission is either the reduction or disappearance of the signs and symptoms of a disease. The term may also be used to refer to the period during which this diminution occurs. A remission may be considered a partial remission or a complete remission!";
// $source_type='document';
$source_type='lb_journal_';
$source_type2='lb_document_';
$author_last_name='test author';
$initials='x.z.';
$year_of_publication='1982';
$month_of_publication='7';
$date_of_publication='20';
// ----
$retrieved_date='20';
$retrieved_month_in_words='july';//must be in words as is the standard e.g"2 june 2022"
$retrieved_year='2020';
// ------

$title_of_page='test page title';
$title_of_article='test title of article';
$site_Name='test web page';
$https='www.testing.com';
$https_doi='http://dx.doi.org/10.1021/jf900623w';
$title_of_journal='journal tiltle';
$volume_issue='57(13)';
$first_page=1;
$last_pages='5';
$quotation='"';
$Copied='20';
$user_id='1';
// ====Questions table======
$question='123 exercitationem quidem illo? ';

// ====User table======
$user_id='1';
$user_name='ashmita'; 

$answers = [
    [
        "id"=>$answer_id, 
        "answer"=>$answer,
        "quotation"=>$quotation,
        "Copied"=>$Copied,
        "user_id"=>$user_id,
        
        // references----------------
        
        
    ],
    
];

$references = [
    [
        "source_type"=>$source_type,
        "author_last_name"=>$author_last_name,
        "initials"=>$initials,
        'Year_of_publication'=>$year_of_publication,
        "month_of_publication"=>$month_of_publication,
        "date_of_publication"=>$date_of_publication,
        "retrieved_date"=>$retrieved_date,
        "retrieved_month"=>$retrieved_month_in_words,
        "retrieved_year"=>$retrieved_year,
        "first_page"=>$first_page,
        "last_page"=>$last_pages,
        "title_of_page"=>$title_of_page,
        "title_of_article"=>$title_of_article,
        "site_Name"=>$site_Name,
        "https"=>$https,
        "https_doi"=>$https_doi,
        "title_of_journal"=>$title_of_journal,
        "volume_issue"=>$volume_issue,
        
    ],
    // ---------------------------------
    [
        "source_type"=>$source_type2,
        "author_last_name"=>$author_last_name,
        "initials"=>$initials,
        'Year_of_publication'=>$year_of_publication,
        "month_of_publication"=>$month_of_publication,
        "date_of_publication"=>$date_of_publication,
        "retrieved_date"=>$retrieved_date,
        "retrieved_month"=>$retrieved_month_in_words,
        "retrieved_year"=>$retrieved_year,
        "first_page"=>$first_page,
        "last_page"=>$last_pages,
        "title_of_page"=>$title_of_page,
        "title_of_article"=>$title_of_article,
        "site_Name"=>$site_Name,
        "https"=>$https,
        "https_doi"=>$https_doi,
        "title_of_journal"=>$title_of_journal,
        "volume_issue"=>$volume_issue,
        
    ],
    
    
];

$questions =[
    [
        "id"=>"1",
        "question"=>$question
    ],
    [
        "id"=>"2",
        "question"=>$question
    ],
    [
        "id"=>"3",
        "question"=>$question
    ]
];

$users =[
    [
        "id"=>$user_id,
        "user_name"=>$user_name
        
    ],
    [
        "id"=>$user_id,
        "user_name"=>$user_name
    ],
    [
        "id"=>$user_id,
        "user_name"=>$user_name
    ]
];

if ($page_count==1) {
    $page_label='p';
} else {
    $page_label='pp';
}

?>

<body class='lightbulb-home-search-body' style='min-height:300px'>
    <form id="search-form" method="post">
        <div id='lightbulb-home-page-body' class="lightbulb-home-page-body">
            <?php include('View/header.php');?>
            <div class='main-question-label'>
            </div>
            <!--testing window wrapper  -->
            <div class='window-wrapper'>
                <div id='side-menu-cont' class='side-menu-cont'>
                    <!-- brainstorm container -->
                    <div id='inner-side-menu-cont' class='inner-side-menu-cont brainstorm-container'>
                        <!--start selection  -->
                        <?php// include('View/rightsidemenu_v1.php');?>
                        <?php include('View/rightsidemenu.php');?>
                        <!-- end selection -->

                    </div>
                    <!-- -------------------------------- -->
                </div>
                <div id="search-cont" class="search-cont">
                    <div class='banner-cont' style="">
                    </div>
                    <div id='search-results-cont' class='search-results-cont'>
                        <div id='inner-search-results-cont'>
                            <?php include('questionsoptions.php');?>
                            <br><br><br><br><br><br><br><br>
                            <div class='question-tag' style='display:none'>
                                <div class='user-detail'></div>
                            </div>


                            <!-- -------post questino to lightbulb------- -->
                            <!-- <div class='post-question' style='display:none'>
                    <div class='post-question-btn-cont'>
                        <div class='p-question'>Hello it appears your question has not yet been answered on lightbulb, click the notification icon and will let you know once its answered. </div>
                        <div class='search-post-btn notification'>Post</div>                   
                    </div>
                    <div class='notification-email-cont'>
                    <input type='text' class='notification-email-text' placeholder='Enter your email '>
                    <div class='notification-email-btn'></div>
                    </div>
                    <div class='name-and-pic-cont'>
                    <div class='search-question-name'>Question</div>                    
                    </div>                      
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, dicta. Quidem reprehenderit
                     explicabo officiis deserunt maxime ut vero! Rerum expedita dolor, facilis iste dolorem ad debitis
                     amet dolores voluptatibus praesentium?
                    
                </div> -->
                            <!-- -------end of posting question to lightbulb------- -->

                            <hr class='tag-divider'>
                            <?php
                if (isset($_GET['search'])) {
                    echo$que=$_GET['search'];
                    
                    // if (1==1) {
                    //     echo$que=$_GET['search'];
                                           
                    $question_count=0;
                    foreach ($questions as $question) {
                        $question_count++; ?>
                            <div class='question-bubble-cont'>
                                <script>
                                $(document).ready(function() {
                                    manage_bubble(<?php echo$question_count ?>,
                                        '<?php echo$question['question'] ?>');
                                });
                                </script>
                                <div id='manage-bubble<?php echo$question_count ?>'
                                    class='question-bubble manage-bubble'>
                                    <!-- <div class='name-and-pic-cont'>
                                    <div class='search-answer-pic'></div>
                                    <div class='search-question-name'><?php echo$users[0]['user_name'] ?></div>
                                </div> -->
                                    <div class='question-image'>
                                    </div>
                                    <div class='question-text' id='search_question<?php echo $question["id"] ?>'>
                                        <span id='question-text-span<?php echo$question_count ?>'
                                            class='searched-question'>
                                            <?php echo$question['question'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <hr class='tag-divider'>

                            <?php
                    $answer_count=0;
                        foreach ($answers as $answer) {
                            $answer_count++; ?>
                            <!-- ------------------------------- -->
                            <div class='answer-bubble-cont'>
                                <div id='manage-bubble' class='answer-bubble manage-bubble'>
                                    <div class='name-and-pic-cont'>
                                        <div class='search-answer-img'></div>
                                        <div class='search-answer-cfg-img'></div>
                                        <div class='search-answer-name'>user name</div>
                                        <div class='search-answer-pic'></div>
                                    </div>
                                    <div class='answer-img'>
                                    </div>
                                    <hr class='tag-divider'>
                                    <div class='source-type'>
                                        <div class='times-copied'>
                                            Copied: <?php echo $Copied ?>*
                                        </div>
                                        Source type:<span
                                            class='source-type-btns source-type-btns-journal<?php echo$answer_count ?>'>Journal</span><span
                                            class='source-type-btns source-type-btns-document<?php echo$answer_count ?>'>document</span>
                                    </div>

                                    <div class='answer-text' id='search_result<?php echo $answer['id'] ?>'
                                        oncopy="count_times_copied(<?php echo $answer['id'] ?>)">
                                        <span class='original_search_answer'><?php echo$answer['answer'] ?></span>
                                        <!-- Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo quae repellat aspernatur assumenda quibusdam asperiores, soluta quidem adipisci explicabo, excepturi est, optio quis ipsam a. Molestiae est hic itaque debitis. -->
                                        <span class='paraphrased_search_answer'
                                            id='paraphrased_search_answer<?php echo $answer_count ?>'></span>
                                        <!--The code below is for the paraphrase button  -->
                                        <!-- <span class='paraphrase'
                                            onclick='wordreplace("<?php echo$answer["answer"] ?>","<?php echo $answer_count ?>")'>
                                            paraphrase
                                        </span> -->
                                    </div>
                                    <hr class='tag-divider'>
                                    <div class='search-clipboard'
                                        onclick="Copy_answer_ToClipboard('search_result<?php echo $answer['id'] ?>')">
                                        <span class='i-con-propaties'><i
                                                class="fas fa-clipboard-check fa-2x"></i></span>
                                    </div>
                                    <div class='citation-format-cont'>
                                        <div class='citation-format apa-cite-btn'
                                            onclick="switch_to_Apa_citation(<?php echo$answer_count ?>)">APA</div>
                                        <div class='citation-format harvard-cite-btn'
                                            onclick="switch_to_Harvard_citation(<?php echo$answer_count ?>)">Harvard
                                        </div>
                                    </div>

                                    <div class='citation-name'>
                                        In-text parenthetical citation:
                                    </div>
                                    <!-- start of In-text parenthetical citation list loop -->
                                    <?php
                    $references_count=0;
                            foreach ($references as $reference) {
                                $references_count++; ?>
                                    <!--  -->
                                    <?php
                    //if source type is journal the call journal btn else if source type is document then call document btn
                    if ($reference['source_type']==$document) {
                        ?><script>
                                    $(document).ready(function() {
                                        show_journal_btn(<?php echo$answer_count ?>);
                                    });
                                    </script><?php
                    } elseif ($reference['source_type']==$journal) {
                        ?><script>
                                    $(document).ready(function() {
                                        show_document_btn(<?php echo$answer_count ?>);
                                    });
                                    </script><?php
                    } ?>

                                    <div
                                        class='parathentical-citation-cont padding-for-first-cont<?php echo$references_count ?>'>
                                        <div class='search-clipboard apa-citation  apa-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('apa_in_text_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check fa-2x"></i></span>
                                        </div>
                                        <div class='search-clipboard harvard-citation harvard-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('harvard_in_text_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check fa-2x"></i></span>
                                        </div>
                                        <!-- APA-author--year--page_number -->
                                        <!--APA- format (Neal, 2005, p. 3) -->
                                        <span
                                            class='apa-citation-document  apa-citation apa-citation<?php echo$references_count ?>'
                                            id='apa_in_text_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)">(<?php echo$reference["author_last_name"],", ",$reference['Year_of_publication'],", ",empty($reference['last_page']) ? "p. " : "pp. "," ",$reference["first_page"],empty($reference['last_page']) ? "" :"-",$reference['last_page'] ?>)</span>

                                        <!-- <br> -->
                                        <!-- harvard-author--year--page_number -->
                                        <!-- ---harvard ---(Chen 2017, 15) -->
                                        <!-- --(ABS 2016, para. 12)-->
                                        <!-- use para in place of page number if source doesnt use page number e.g web page  -->
                                        <span
                                            class='harvard-citation-document harvard-citation harvard-citation<?php echo$references_count ?>'
                                            id='harvard_in_text_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)">(<?php echo$reference["author_last_name"],", ",$reference['Year_of_publication'],", ",empty($reference['last_page']) ? "p. " : "pp. "," ",$reference['first_page'],empty($reference['last_page']) ? "" :"-",$reference['last_page'] ?>)</span>
                                    </div>
                                    <?php
                            } // end of In-text parenthetical citation loop ?>
                                    <div class='reference-list-label'>
                                        Reference List:
                                    </div>

                                    <!-- start of reference list loop -->
                                    <?php
                    $references_count=0;
                            foreach ($references as $reference) {
                                $references_count++; ?>


                                    <?php
                    if ($reference['source_type']==$document) { //test code
                    ?>
                                    <div class='reference-list-cont'>
                                        <div class='search-clipboard apa-citation apa-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('apa_doc_reference_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check reference-list-clipboard-check fa-2x"></i></span>
                                        </div>
                                        <div class='search-clipboard harvard-citation harvard-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('harvard_doc_reference_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check reference-list-clipboard-check fa-2x"></i></span>
                                        </div>

                                        <!--when sourced from a web page thats not a journal--- author, A. A. (year). Title of page. Site Name. https://www.xxxxxxxx -->
                                        <span
                                            class='reference apa-citation-document apa-citation apa-citation<?php echo$references_count ?>'
                                            id='apa_doc_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","(",$reference['Year_of_publication'],", ",$reference['month_of_publication']," ",$reference['date_of_publication'],")",". ","<span class='italic'>", $reference['title_of_page'],"</span>",". ", $reference['site_Name'],". ", $reference['https']; ?></span>
                                        <!-- <br> -->
                                        <!-- --- Author/organisation’s name Year, Page title in italics, Retrieved: date you accessed it, from specific website address (best to copy and paste URL to ensure accuracy.)---- -->
                                        <!-- Chin, R. 2006, History of typography: history of digital font [PowerPoint slides], Retrieved: 29 January, 2020, from http://www.cs.ucsb.edu/~almeroth/classes/tech-soc/2006-Fall/nov-07.ppt#262,7,Typography and Print: Creating Type  -->
                                        <span
                                            class='reference harvard-citation-document harvard-citation harvard-citation<?php echo$references_count ?>'
                                            id='harvard_doc_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","",$reference['Year_of_publication'],"",", <span class='italic'>", $reference['title_of_page'],"</span>, Retrieved: ",$reference['retrieved_date']," ",$reference['retrieved_month'],", ",$reference['retrieved_year'],", ","from ", $reference['https']; ?></span>
                                    </div>
                                    <?php
                    }//end of if document
                    ?>



                                    <?php
                    if ($reference['source_type']==$journal) { //test code
                    ?>
                                    <div class='reference-list-cont'>
                                        <div class='search-clipboard apa-citation apa-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('apa_jor_reference_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check reference-list-clipboard-check fa-2x"></i></span>
                                        </div>
                                        <div class='search-clipboard harvard-citation harvard-citation<?php echo$references_count ?>'
                                            onclick="Copy_answer_ToClipboard('harvard_jor_reference_citation<?php echo $references_count ?>')">
                                            <span class='i-con-propaties'><i
                                                    class="fas fa-clipboard-check reference-list-clipboard-check fa-2x"></i></span>
                                        </div>

                                        <!-- accademic source journal--- -->
                                        <?php
                    if ($reference['https_doi']) {
                        ?>
                                        <!-- Reference List With a DOI -->
                                        <!-- Author, A. A. (year). Title of article. Title of Journal, Volume(issue), pages. https://doi.org/xx.xxx.xxxx.xxxxx -->
                                        <!-- <span class='reference apa-citation-journal apa-citation apa-citation<?php// echo$answer_count ?>' id='apa_jor_reference_citation<?php// echo $answer['id'] ?>' oncopy="count_times_copied(<?php// echo $answer['id'] ?>)" ><?php// echo $reference["author_last_name"],", ",$reference["initials"]," ","(",$reference['Year_of_publication'],")",".", $reference['title_of_article'],".","<span class='italic'>", $reference['title_of_journal'],"</span>",",",$reference['volume_issue'],",",$reference['first_page'],"-",$reference['last_page'], $reference['https_doi']; ?></span> -->

                                        <span
                                            class='reference apa-citation-journal apa-citation apa-citation<?php echo$references_count ?>'
                                            id='apa_jor_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","(",$reference['Year_of_publication'],")",". ", $reference['title_of_article'],". ","<span class='italic'>", $reference['title_of_journal'],"</span>",", ",$reference['volume_issue'],", ",$reference['first_page'],empty($reference['last_page']) ? "" :"-",$reference['last_page'],". ", $reference['https_doi']; ?></span>
                                        <!-- ---Author. year. "Title of article." Title of Journal Volume (Issue): Pages. https://www.xxxxxxx.--- -->
                                        <span
                                            class='reference harvard-citation-journal harvard-citation harvard-citation<?php echo$references_count ?>'
                                            id='harvard_jor_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","",$reference['Year_of_publication'],"",". ",$answer['quotation'], $reference['title_of_article'],$answer['quotation'],". ","<span class='italic'>", $reference['title_of_journal'],"</span>",". ",$reference['volume_issue'],", ",$reference['first_page'],empty($reference['last_page']) ? "" :"-",$reference['last_page'],". ", $reference['https_doi']; ?></span>

                                        <br>
                                        <?php
                    } else {
                        ?>
                                        <!-- Without a DOI with a non-database URL -->
                                        <!-- Author, A. A. (Year). Title of article. Title of Journal, Volume(issue), pages. https://xx.xxx.xxxx.xxxxx -->
                                        <span
                                            class='reference apa-citation-journal apa-citation apa-citation<?php echo$references_count ?>'
                                            id='apa_jor_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","(",$reference['Year_of_publication'],")",". ", $reference['title_of_article'],". ","<span class='italic'>", $reference['title_of_journal'],"</span>",", ",$reference['volume_issue'],", ",$reference['first_page'],empty($reference['last_page']) ? "" :"-",$reference['last_page'],". ", $reference['https']; ?></span>
                                        <!-- ---Author. year. "Title of article." Title of Journal Volume (Issue): Pages. https://www.xxxxxxx.--- -->
                                        <span
                                            class='reference harvard-citation-journal harvard-citation harvard-citation<?php echo$references_count ?>'
                                            id='harvard_jor_reference_citation<?php echo $references_count ?>'
                                            oncopy="count_times_copied(<?php echo $references_count ?>)"><?php echo $reference["author_last_name"],", ",$reference["initials"]," ","",$reference['Year_of_publication'],"",". ",$answer['quotation'], $reference['title_of_article'],$answer['quotation'],". ","<span class='italic'>", $reference['title_of_journal'],"</span>",". ",$reference['volume_issue'],", ",$reference['first_page'],empty($reference['last_page']) ? "" :"-",$reference['last_page'],". ", $reference['https']; ?></span>

                                        <?php
                    }
                    ?>
                                    </div>

                                    <?php
                    }// end of if journal //test code
                    ?>
                                    <!-- end of references list loop -->
                                    <?php
                            } ?>
                                    <!-- ------------ -->
                                    <div class='likes-and-emojis'>
                                        <div class='likes-and-emojis-btns likes-btn'
                                            onclick="like('<?php echo $question_count ?>')">
                                            <img src="View/images/like.svg"
                                                class='likes likes<?php echo $question_count ?>'>
                                        </div>
                                        <div class='likes-and-emojis-btns dislikes-btn'
                                            onclick="dislike('<?php echo $question_count ?>')">
                                            <img src="View/images/dislike.svg"
                                                class='dislikes dislikes<?php echo $question_count ?>'>
                                        </div>
                                        <div class='likes-and-emojis-btns likes1'></div>
                                        <div class='likes-and-emojis-btns likes2'></div>
                                        <div class='likes-and-emojis-btns likes3 emoji-btn'>
                                            <img src="View/images/smile.svg" class='smiley'>
                                        </div>
                                    </div>
                                    <div class='like-emojis-wrapper like-emojis<?php echo $question_count ?>'>
                                        <div class='emojis'>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="above_and_beyond('<?php echo $question_count ?>')">
                                                <img src="View/images/rocket.svg" class='smiley rocket'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="very_happy('<?php echo $question_count ?>')">
                                                <img src="View/images/happy.svg" class='smiley'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="happy('<?php echo $question_count ?>')">
                                                <img src="View/images/smile.svg" class='smiley'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="like_neutral('<?php echo $question_count ?>')">
                                                <img src="View/images/neutral.svg" class='smiley'>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- --------- -->
                                    <div class='dislike-emojis-wrapper dislike-emojis<?php echo $question_count ?>'>
                                        <div class='emojis'>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="dislike_neutral('<?php echo $question_count ?>')">
                                                <img src="View/images/neutral.svg" class='smiley'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="sad('<?php echo $question_count ?>')">
                                                <img src="View/images/sad.svg" class='smiley'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="angry('<?php echo $question_count ?>')">
                                                <img src="View/images/angry.svg" class='smiley'>
                                            </div>
                                            <div class='emojis-btns emoji-btn'
                                                onclick="very_angry('<?php echo $question_count ?>')">
                                                <img src="View/images/very_angry.svg" class='smiley'>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ------------ -->

                                </div>
                            </div>
                            <?php
                        }
                    }
                }
                //end of main question loop......
                ?>
                            <!-- ------not what you are looking for? post your question---- -->
                            <div class='no-matches-found-cont items'>
                                <div class='no-matches-found-msg secondary-post-image-wrapper my-btn'>
                                    <p class='no-matches-found-msg-p'>not what you are looking for? Click to get a
                                        new
                                        answer from a tutor now!
                                    </p>
                                    <p class='no-matches-found-btn-p '>
                                        <img src="View/images/paper-plane-black.svg" alt="" class='post-question-image'>
                                    </p>
                                </div>
                            </div>
                            <!-- ----------------------------- -->
                        </div>
                    </div>
                    <hr class='search-divider'>
                    <div class='search-input-cont-placeholder'>
                        <div class='inner-search-place-holder'>
                        </div>
                        <div class=' search-input-cont'>
                            <!-- <input type='text' onkeypress="check_text_field()" id='l-b-search' class='l-b-search-input'
                        placeholder='Search Lightbulb'> -->
                            <!-- -------------------------- -->
                            <div class='l-b-search-input-wrapper'>
                                <textarea onkeypress="check_text_field()" onpaste="pasted_query()"
                                    oninput="auto_grow(this)" id='l-b-search'
                                    class='l-b-search-input l-b-search-input-textarea' name='l-b-search'
                                    placeholder='Search Lightbulb'></textarea>
                                <div class='clear-post-button-cont'>
                                    <div class='clear-button' onclick="clear_textarea()">
                                        <i class="fa fa-remove" style='position:absolute;left:5px;top:7px;'></i>
                                    </div>
                                </div>
                            </div>
                            <!-- -------------------------- -->
                            <div class='show-search-options-btn'
                                onclick="expand_search_btn_cont(<?php echo$unique_id ?>)">
                                <div class='more-dots'></div>
                                <div class='more-dots'></div>
                                <div class='more-dots'></div>
                            </div>
                            <div class='search-btn-cont search-btn-cont<?php echo$unique_id ?>'>
                                <div class='search-options-btns-cont'>
                                    <div class='search-options-btns search-options-btns_pluss'></div>
                                    <div class='search-options-btns search-options-btns_notification'></div>
                                    <div class='search-options-btns search-options-btns_search'></div>
                                </div>

                                <div class='search-options-btns-lb-icon-wrapper items'>
                                    <div class='search-options-btns-lb-icon-1 search-icons'
                                        onclick="expand_search_btn_cont(<?php echo$unique_id ?>)"></div>
                                    <div class='search-options-btns-lb-icon-2 search-icons'
                                        onclick="contract_search_btn_cont(<?php echo$unique_id ?>)"></div>
                                    <!-- <div class='search-options-btns-lb-icon-3 search-icons' id='search-btn'
                                        onclick="search_for_item(<?php// echo$unique_id ?>)"></div> -->
                                    <div class='search-options-btns-lb-icon-3 search-icons' id='search-btn'></div>
                                    <div class='search-options-btns-lb-icon-4 search-icons my-btn'
                                        onclick="post_item_btn(<?php echo$unique_id ?>)"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- -----more search options btns------- -->
                    <div class='more-search-options-btns-cont'>
                        testing one two
                    </div>

                    <!-- -----search options btns close------ -->
                </div>
                <div class='side-menu-cont'>
                </div>
                <!-- window wrapper -->
            </div>
        </div>
        <!-- fixing -->
    </form>
    <!-- xxxxxxxxxxxxxxxxxxxx -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="View/js/flyto.js"></script>
    <?php
    $synonyms=[
        // add synonyms---------------
        "(genius|prodigy)",
        "(freak|loony|crackpot|crank|crazy)",
        "(You&#39re |You are |Thou art )",
        "(aren&#39t|ain&#39t|are not)"
        // add more synonyms----------------
        ];
    ?>
    <script>
    $('.items').flyto({
        item: 'li',
        target: '.cart',
        button: '.my-btn'
    });
    // ------------------------
    synonyms = <?php echo json_encode($synonyms);?>
    </script>
    <!-- xxxxxxxxxxxxxxxxxxx -->
</body>
<?php
// include('View/footer.php');
include('Libraries/Libraries.php');
?>


</html>