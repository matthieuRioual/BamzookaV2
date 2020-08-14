<?php $title = 'Pricing'; ?>

<?php ob_start(); ?>
<section class="pricing-table">
        <div class="container">
            <div class="block-heading justify-content">
              <h2>Pricing Table</h2>
              <h3>Choose the plan that work for you</h3>
              <h4>Change at any time</h4>
            </div>
            <div class="row justify-content-md-center pb-3">
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="heading">
                            <h3>Standart</h3>
                        </div>
                        <p class="mb-1" style="opacity: 0.7;text-align: center;margin-top: 10px;">10 users included </p>
                        <p style="opacity: 0.7;text-align: center">$3 per additional user</p>
                        <div class="features">
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
                            <h4>$49<span>/month</span></h4>
                        </div>
                        <button class="btn btn-block btn-outline-primary" type="submit">Try it for free</button>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="item">
                        <div class="ribbon">50% off for <br> non profit</div>
                        <div class="heading">
                            <h3>Business</h3>
                        </div>
                        <p class="mb-1" style="opacity: 0.7;text-align: center;margin-top: 10px;">10 users included </p>
                        <p style="opacity: 0.7;text-align: center">$5 per additional user</p>                        <div class="features">
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
                            <h4>$99<span>/month</span></h4>
                        </div>
                        <button class="btn btn-block btn-primary" type="submit">Try it for free</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>