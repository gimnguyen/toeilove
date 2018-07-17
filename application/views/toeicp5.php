<div class="topbanner">
    <img src="<?php echo base_url() ?>public/imgs/toeicp5.png" class="img-fluid" alt="Responsive image">
</div>

<div class="container cbody">
    <div class="row">
        <div class="col-sm-9">
            <div class="intro">
                <h1>TOEIC - Incomplete sentences</h1>
                <p>Category: <a class="tx-ye" href="<?php echo base_url()?>toeic-part5">Part 5 - Incomplete sentences</a></p>
                <p><strong>Directions:</strong> A word or phrase is missing in each of the
                    following sentences. Four answer choices are given below
                    each sentence. Select the best answer to complete the
                    sentence. Then mark the letter (A), (B), (C), or (D) on your
                    answer sheet.</p>
                <hr>
                <p class="tx-note">Click on the 'View Answers' button to see the correct answers.</p>
            </div>
            <div class="quest">
                <?php
                    $i = 1;
                    foreach ($quesList as $key => $value){
                        $j = 1;
                        echo '<h6>'.$i.'. '.$value['quest'].' </h6>';
                        echo '<ul class="part5-list">
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.$j.'"> <label for="'.$i.$j.'">'.$value['ansa'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+1).'"> <label for="'.$i.($j+1).'">'.$value['ansb'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+2).'"> <label for="'.$i.($j+2).'">'.$value['ansc'].'</label></li>
                                    <li><input type="radio" name="subscribe_comments'.$i.'" id="'.$i.($j+3).'"> <label for="'.$i.($j+3).'">'.$value['ansd'].'</label></li>
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
                    <div class="card card-body dotbor">
                        <ul class="part5-ans">
                            <?php
                            foreach ($quesList as $key => $value){
                                if ($value['trueans'] != ''){
                                    echo '<li>'.$value['trueans'].'</li>';
                                }else{
                                    echo '<li>N/A</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
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