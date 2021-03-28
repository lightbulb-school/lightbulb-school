                        <!-- <br><br> -->
                        <div class='brainstorm-menu'>
                        </div>

                        <p class="cart flt-right" src="View/images/paper-plane-regular.svg" alt="Cart"
                            style='right:0;top:10px;position:absolute;width:100px;height:50px;text-align:right'></p>
                        <?php
                        $q_counter=0;
                        foreach ($questions as $question){
                            $q_counter++;
                        ?>
                        <div id='options-cont<?php echo $q_counter ?>'
                            class='options-cont options-cont<?php echo $q_counter ?>'
                            style='background-color:orange;height:;'>
                            <div class='options-cont-sub-heading options-cont-sub-heading<?php echo $q_counter ?>'
                                onclick="open_question_side_tab(<?php echo $q_counter ?>)"
                                style='background-color:pink'>
                                whats an orange whats an orange?
                            </div>
                            <div id='options-btns-cont<?php echo $q_counter ?>'
                                class='options-btns-cont options-btns-cont<?php echo $q_counter ?>'
                                style='background-color:red;display:none;'>
                                <div id='service-disclaimer-side-menu<?php echo $q_counter ?>'
                                    class='service-disclaimer-side-menu' style='background-color:green'>
                                    whats a blablabla
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor

                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.

                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo

                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.

                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo
                                    voluptatibus amet natus, omnis dignissimos, earum dolorum velit tempora alias
                                    dolores? Vitae beatae officia nisi itaque possimus illo qui fuga.Lorem, ipsum
                                    dolor
                                    sit amet consectetur adipisicing elit. Magnam explicabo

                                </div>
                                <table class='options-tb' style="width:100%;">
                                    <!-- <caption>Monthly savings</caption> -->
                                    <tr class='options-tb'>
                                        <th>whats your course?</th>
                                        <th></th>
                                    </tr>
                                    <tr class='options-tb'>
                                        <th>Question Type</th>
                                        <th></th>
                                    </tr>
                                    <tr class='options-tb quiz_tr<?php echo $q_counter ?>'>
                                        <th>Quiz</th>
                                        <th>
                                            <label class="container">
                                                <input type="radio" name="q_radio<?php echo $q_counter ?>"
                                                    onclick="quiz_selected(<?php echo $q_counter ?>)">
                                                <span class="checkmark" id="checkmark<?php echo $q_counter ?>"></span>
                                            </label>
                                        </th>
                                    </tr>
                                    <tr class='options-tb assay_tr<?php echo $q_counter ?>'>
                                        <th>Assay</th>
                                        <th>
                                            <label class="container">
                                                <input type="radio" name="q_radio<?php echo $q_counter ?>"
                                                    onclick="assay_selected(<?php echo $q_counter ?>)">
                                                <span class="checkmark" id="checkmark<?php echo $q_counter ?>"></span>
                                            </label>
                                        </th>
                                    </tr>
                                    <tr id='How-many-questions<?php echo $q_counter ?>'
                                        class='options-tb How-many-questions'>
                                        <th>
                                            <label for="cars">number of questions:</label>
                                        </th>
                                        <th>
                                            <select name="q_numb" id="q_numb">
                                                <option value="volvo">0</option>
                                                <option value="volvo">1</option>
                                                <option value="saab">2</option>
                                                <option value="opel">3</option>
                                                <option value="audi">4</option>
                                                <option value="volvo">5</option>
                                                <option value="saab">6</option>
                                                <option value="opel">7</option>
                                                <option value="audi">8</option>
                                                <option value="volvo">9</option>
                                                <option value="saab">10</option>
                                                <option value="opel">11</option>
                                                <option value="audi">12</option>
                                                <option value="volvo">13</option>
                                                <option value="saab">14</option>
                                                <option value="opel">15</option>
                                                <option value="audi">16</option>
                                                <option value="volvo">17</option>
                                                <option value="saab">18</option>
                                                <option value="opel">19</option>
                                                <option value="audi">20</option>
                                                <option value="volvo">21</option>
                                                <option value="saab">22</option>
                                                <option value="opel">23</option>
                                                <option value="audi">24</option>
                                                <option value="volvo">25</option>
                                                <option value="saab">26</option>
                                                <option value="opel">27</option>
                                                <option value="audi">28</option>
                                                <option value="volvo">29</option>
                                                <option value="saab">30</option>
                                                <option value="opel">31</option>
                                                <option value="audi">32</option>
                                                <option value="volvo">33</option>
                                                <option value="saab">34</option>
                                                <option value="opel">35</option>
                                                <option value="audi">36</option>
                                                <option value="opel">37</option>
                                                <option value="audi">38</option>
                                                <option value="volvo">39</option>
                                                <option value="saab">40</option>
                                                <option value="opel">41</option>
                                                <option value="audi">42</option>
                                                <option value="opel">43</option>
                                                <option value="audi">44</option>
                                                <option value="volvo">45</option>
                                                <option value="saab">46</option>
                                                <option value="opel">47</option>
                                                <option value="audi">48</option>
                                                <option value="opel">49</option>
                                                <option value="audi">50</option>
                                            </select>
                                        </th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <!-- <span class='post-title-text'>Outsource your question to a tutor</span> -->
                                            <!-- <span class='post-title-text'>learn from a tutor</span> -->
                                            <span class='post-title-text'>Get answers from a tutor</span>
                                            - <br>for $0.25 per quiz question and $5 dollars for every assay/report
                                            question.
                                        </td>
                                        <td>
                                            <label class="container">
                                                <input type="radio" name="exp_type_radio<?php echo $q_counter ?>"
                                                    onclick="select_tutor(<?php echo $q_counter ?>)">
                                                <span class="checkmark" id="checkmark<?php echo $q_counter ?>"></span>
                                            </label>
                                        </td>
                                    </tr>

                                    <!-- ------------------------- -->
                                    <!-- <tr class='charge-details charge-details<?php echo 1 ?>'>
                            <td colspan="2">

                            </td>
                        </tr> -->

                                    <!-- ------------------------- -->

                                    <tr class='payment-details payment-details<?php echo $q_counter ?>'>
                                        <td colspan="2">
                                            <div class='payment-details payment-details<?php echo $q_counter ?>'
                                                style='background-color:white;'>
                                                Select a payment method:
                                                <br><br>
                                                <div class='payment-card-cont' style='background-color:pink;'>
                                                    <span>
                                                        Paypal
                                                    </span>
                                                </div>
                                                <div class='payment-card-cont' style='background-color:blue;'>
                                                    <span>
                                                        Credit Card
                                                    </span>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class='post-title-text'>
                                                Post to community
                                            </span>
                                            - its free and the community may or may not help with the question
                                        </td>
                                        <td>
                                            <label class="container">
                                                <input type="radio" name="exp_type_radio<?php echo $q_counter ?>"
                                                    onclick="post_to_community(<?php echo $q_counter ?>)">
                                                <span class="checkmark" id="checkmark<?php echo $q_counter ?>"></span>
                                            </label>
                                        </td>
                                    </tr>


                                    <!--  -->
                                    <!-- <tr style='border-style:none'>
                                        <td style='border-style:none'>
                                            <p onclick=" save_question_request(<?php echo 1 ?>)"
                                                    style='background-color:blue'>
                                                    Done</p>
                                        </td>
                                        <td style='border-style:none'>

                                        </td>
                                    </tr> -->
                                    <!--  -->
                                </table>
                                <br><br><br>
                                <div class='side-menu-close' style='background-color:pink;'>
                                    <p onclick="save_question_request(<?php echo $q_counter ?>)"
                                        style='background-color:blue'>
                                        Done</p>
                                </div>
                            </div>
                        </div>
                        <?php
                        } 
                        ?>