<div class="topbanner">
    <img src="<?php echo base_url() ?>public/imgs/toeicp1.png" class="img-fluid" alt="Responsive image">
</div>

<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Conversations</h1>
                <p>Category: <a class="tx-ye" href="">Part 3 - Conversations</a></p>

                <p><strong>Test Length</strong> <br>
                    The test takes approximately 2½ hours, with: <br>

                    - 45 minutes for Section I: Listening <br>
                    - 75 minutes for Section II: Reading <br>
                    - approximately 30 minutes to answer biographical questions
                </p>
                <p><strong>Directions:</strong>  You will hear some conversations between two people. You will be asked to answer three questions about what the speakers say in each conversation. Select the best response to each question and mark the letter (A), (B), (C), or (D) on your answer sheet. The conversations will not be printed in your test book and will be spoken only one time.</p>
                <hr>
                <p class="tx-note">Click on the 'View Answers' button to see the correct answers.</p>
            </div>
            <div class="quest">
                <div class="mp3">
                    <audio controls class="audio-p2" controlsList="nodownload">
                        <?php
                        foreach ($quesList as $key => $value){
                            if ($value['mp3url'] != ''){
                                echo '<source src="'.$value['mp3url'].'" type="audio/mpeg">';
                                echo 'Your browser does not support the audio element.';
                            }
                        }
                        ?>
                    </audio>

                </div>

                <!-- choose answer-->
                <div class="question-p2">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Question: 41 - 46</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">47 - 52</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">53 - 58</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">59 - 64</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">65 - 70</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active part2-ans" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                        $index = 0;
                                        $number = 1;
                                        for ($i = 0; $i <3 ; $i++){
                                            $j = 1;

                                            echo ''.(40 + $number).'. '.$quesList[0]['quest'.($i + 1).''].'. </h6>';
                                            echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                            $number++;
                                        }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $index = 1;
                                    $number = 4;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $index = 2;
                                    $number = 7;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $index = 3;
                                    $number = 10;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $index = 4;
                                    $number = 13;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $index = 5;
                                    $number = 16;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-4" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $index = 6;
                                    $number = 19;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $index = 7;
                                    $number = 22;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade part2-ans" id="nav-5" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php
                                    $index = 8;
                                    $number = 25;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php
                                    $index = 9;
                                    $number = 28;
                                    for ($i = 0; $i <3 ; $i++){
                                        $j = 1;

                                        echo ''.(40 + $number).'. '.$quesList[1]['quest'.($i + 1).''].'. </h6>';
                                        echo '<ul class="part2-list">
                                                        <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$quesList[$index]['ansa'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$quesList[$index]['ansb'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$quesList[$index]['ansc'.($i + 1).''].'</label></li>
                                                            <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$quesList[$index]['ansd'.($i + 1).''].'</label></li>
                                                    </ul>';
                                        $number++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Answer -->
            <div class="answer">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        View Answer 41 - 46
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                        47 - 52
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                        53 - 58
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                        59 - 64
                    </button>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
                        65 - 70
                    </button>
                </p>
                <?php

//                41 - 46
                    echo '<div class="collapse" id="collapseExample">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                        $j = 1;
                        for ($i = 0; $i < 2; $i++){
                            echo '<li>' . (40 + $j) . ': ' . $value['trueans1'] . '</li>';
                            echo '<li>' . (40 + $j+1) . ': ' . $value['trueans2'] . '</li>';
                            echo '<li>' . (40 + $j+2) . ': ' . $value['trueans3'] . '</li>';

                            $j = $j + 3;
                        }
                    echo '</ul>
                        </div>
                    </div>';

//                47 - 52
                echo '<div class="collapse" id="collapseExample2">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $j = 7;
                for ($i = 0; $i < 2; $i++){
                    echo '<li>' . (40 + $j) . ': ' . $value['trueans1'] . '</li>';
                    echo '<li>' . (40 + $j+1) . ': ' . $value['trueans2'] . '</li>';
                    echo '<li>' . (40 + $j+2) . ': ' . $value['trueans3'] . '</li>';

                    $j = $j + 3;
                }
                echo '</ul>
                        </div>
                    </div>';

//                53 - 58
                echo '<div class="collapse" id="collapseExample3">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $j = 13;
                for ($i = 0; $i < 2; $i++){
                    echo '<li>' . (40 + $j) . ': ' . $value['trueans1'] . '</li>';
                    echo '<li>' . (40 + $j+1) . ': ' . $value['trueans2'] . '</li>';
                    echo '<li>' . (40 + $j+2) . ': ' . $value['trueans3'] . '</li>';

                    $j = $j + 3;
                }
                echo '</ul>
                        </div>
                    </div>';

//                53 - 58
                echo '<div class="collapse" id="collapseExample4">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $j = 19;
                for ($i = 0; $i < 2; $i++){
                    echo '<li>' . (40 + $j) . ': ' . $value['trueans1'] . '</li>';
                    echo '<li>' . (40 + $j+1) . ': ' . $value['trueans2'] . '</li>';
                    echo '<li>' . (40 + $j+2) . ': ' . $value['trueans3'] . '</li>';

                    $j = $j + 3;
                }
                echo '</ul>
                        </div>
                    </div>';

//                53 - 58
                echo '<div class="collapse" id="collapseExample5">
                                <div class="card card-body mar-btm dotbor">
                                    <ul class="part2-ans">';
                $j = 25;
                for ($i = 0; $i < 2; $i++){
                    echo '<li>' . (40 + $j) . ': ' . $value['trueans1'] . '</li>';
                    echo '<li>' . (40 + $j+1) . ': ' . $value['trueans2'] . '</li>';
                    echo '<li>' . (40 + $j+2) . ': ' . $value['trueans3'] . '</li>';

                    $j = $j + 3;
                }
                echo '</ul>
                        </div>
                    </div>';



                ?>
            </div>

            <!-- Script -->
            <div class="script">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#transcript" aria-expanded="false" aria-controls="collapseExample">
                        View Tramscript
                    </button>
                </p>
                <div class="collapse" id="transcript">
                    <div class="card card-body dotbor mar-btm">
                        <?php
                            if ($quesList[0]['transcript'] != ''){
                                echo $quesList[0]['transcript'];
                            }
                            if ($quesList[0]['transimg'] != ''){
                                echo $quesList[0]['transimg'];
                            }
                        ?>
                    </div>
                </div>
            </div>

            <!-- Note -->
            <div class="note">
                <p class="tx-note"><strong>BE CAREFUL:</strong> We can not turn back previous question after clicking on 'Next' button. Let's go!</p>
            </div>

            <!-- page -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item">
                        <a class="page-link tx-ye" href="" onclick="window.location.reload(true);">Next <img src="<?php echo base_url() ?>public/imgs/icons/right-arrow.svg" class="lgicon"></a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Right -->
        <div class="col-sm-3">

            <div class="card" style="width: 17rem;">
                <img class="card-img-top" src="http://ichef.bbci.co.uk/images/ic/480xn/p05mp293.jpg" alt="Card image cap">
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </div>
            </div>

            <!-- Category -->
            <div class="category">
                <h3>Test Content <img src="<?php echo base_url() ?>public/imgs/icons/speech-bubble.svg" class="lgicon"></h3>
                <ul>
                    <h5 class="cate-line">Section I: Listening</h5>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-1">Part 1</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-2">Part 2</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-3">Part 3</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-4">Part 4</a></li>
                    <h5 class="cate-line">Section II: Reading</h5>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-5">Part 5</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-6">Part 6</a></li>
                    <li>
                        <img src="<?php echo base_url() ?>public/imgs/icons/next.svg" class="gicon">
                        <a href="<?php echo base_url()?>toeic-part-7">Part 7</a></li>
                </ul>
            </div>
            <!-- End category -->
        </div>
    </div>
</div>