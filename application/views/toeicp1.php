<div class="topbanner">
    <img src="<?php echo base_url() ?>public/imgs/toeicp1.png" class="img-fluid" alt="Responsive image">
</div>

<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Photographs</h1>
                <p>Category: <a class="tx-ye" href="">Part 1 - Photographs</a></p>

                <p><strong>Test Length</strong> <br>
                    The test takes approximately 2½ hours, with: <br>

                    - 45 minutes for Section I: Listening <br>
                    - 75 minutes for Section II: Reading <br>
                    - approximately 30 minutes to answer biographical questions
                </p>
                <p><strong>Directions:</strong>  For each question in this part, you will hear
                    four statements about a picture in your test book. When you hear the statements, you must select the one statement that best describes what you see in the picture. Then find the number of the question on your answer sheet and mark your answer. The statements will not be printed in your test book and will be spoken only one time.</p>
                <hr>
                <p class="tx-note">Click on the 'View Answers' button to see the correct answers.</p>
            </div>
            <div class="quest">
                <div class="mp3">
                    <audio controls class="audio-p2" controlsList="nodownload">
                        <?php
                         sort($quesList);
                        foreach ($quesList as $key => $value){
                            if ($value['mp3url'] != ''){
                                echo '<source src="'.$value['mp3url'].'" type="audio/mpeg">';
                                echo 'Your browser does not support the audio element.';
                            }
                        }
                        ?>
                    </audio>

                </div>

                <?php
                    $i = 1;
                    asort($quesList);
                    foreach ($quesList as $key => $value) {
                        $j = 1;
                        echo '<h6><strong>Question '.$i.':</strong></h6>';
                        echo '<img src="'.$value['quest'].'" class="img-fluid" alt="TOEIC Test">';
                        echo '<ul class="part5-list">
                                <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">Your answer is A</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">Your answer is B</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">Your answer is C</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">Your answer is D</label></li>
                            </ul>';

                        $i++;
                    }
                ?>
            </div>

            <!-- Answer -->
            <div class="answer">
                <p>
                    <button class="btn btn-ye" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        View Answer
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body mar-btm dotbor">
                        <ul class="part5-ans">
                            <?php
                                asort($quesList);
                                foreach ($quesList as $key => $value) {
                                    echo '<li>'.$value['trueans'].'</li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
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
                        foreach ($quesList as $key => $value) {
                            if ($value['transcript'] != ''){
                                echo $value['transcript'];
                            }
                            if ($value['transimg']){
                                echo '<img src="'.$value['transimg'].'" class="img-fluid" alt="TOEIC Test">';
                            }
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