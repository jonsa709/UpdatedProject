<?php
    view('front/includes/header.php');
    view('front/includes/nav.php');
?>

        <main class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 breaking-heading text-center my-3 font-weight-bold">
                        This is a breaking news headline at top.
                    </div>
                    <div class="col-6">
                        <img src="<?php echo url("assets/images/a.jpg"); ?>" class="img-fluid">
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-12">
                                <small class="text-muted font-italic">
                                    <i class="fas fa-clock mr-2"></i> 31 Jan 2020 04:30 PM

                                </small>
                            </div>
                            <div class="col-12 text-justify">
                                Baskota resigned as the minister of communications and information technology on Thursday after the release of an audiotape in which he is heard negotiating kickback worth Rs 740 million with Bijay Prakash Mishra, local agent of a Swiss equipment supplier, in the government’s security printing press procurement deal.

                                The scandal also put Oli under pressure after Mishra reportedly claimed he had forwarded the audiotape to the PM some two months ago. Oli is being criticised for not taking action against Baskota despite being aware of the scandal beforehand.

                                NC lawmaker Gagan Kumar Thapa said the prime minister could not get away by saying he was not aware of scandals, such as those involving Nepal Trust, Yeti Holdings and optical fibre contract. Thapa demanded the HoR speaker’s ruling to the prime minister to furnish his answers to questions raised by lawmakers.
                            </div>
                            <div class="col-12">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <?php for($i= 1; $i <= 8; $i++): ?>
                    <div class="col-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <img src="<?php echo url("assets/images/img_0.15776400 1582531638_1625.jpg"); ?>" class="img-fluid">
                            </div>
                            <div class="col-12 text-center font-weight-bold my-2">
                                <a href="#">This is a demo title of an article.</a>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </main>
<?php view('front/includes/footer.php');?>