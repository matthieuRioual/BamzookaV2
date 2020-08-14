<?php $title = 'Pricing'; ?>

<?php ob_start(); ?>
<section class="pricing-table">
        <div class="container">
            <div class="block-heading justify-content">
              <h2>Pricing Table</h2>
              <h3>Choose the plan that work for you</h3>
              <h4>Change at any time</h4>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="heading">
                            <h3>Standart</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="features">
                            <h4><span class="feature">Full Support</span> : <span class="value">No</span></h4>
                            <h4><span class="feature">Duration</span> : <span class="value">30 Days</span></h4>
                            <h4><span class="feature">Storage</span> : <span class="value">10GB</span></h4>
                        </div>
                        <div class="price">
                            <h4>$25</h4>
                        </div>
                        <button class="btn btn-block btn-outline-primary" type="submit">Try for free</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="ribbon">50% off for <br> non profit</div>
                        <div class="heading">
                            <h3>Business</h3>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="features justify-content-center">
                            <ul>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Conditional logic</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Calendar view</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Enforced task order</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>User input validation with pass/fail</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Email & phone support with TX staff</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>99.9% uptime SLA</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Dedicated customer success manager</li>
                                <li class="nonpoint"><i class="far fa-check-circle mr-2"></i>Flowers once a week</li>
                            </ul>
                        </div>
                        <div class="price">
                            <h4>$50</h4>
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Try it for free</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>