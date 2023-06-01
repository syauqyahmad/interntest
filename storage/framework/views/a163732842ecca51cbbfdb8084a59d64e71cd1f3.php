
<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-3">
        <div class="intro">
            <h2 class="text-center">OUR VALUES</h2>
        </div>
        <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-danger mb-3">
                        <div class="card-body text-center">
                                <img src="img/lightbulb-o.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Innovative</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-success mb-3">
                        <div class="card-body text-center">
                                <img src="img/bank.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Loyalty</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="card text-bg-info mb-3 text-white">
                        <div class="card-body text-center">
                                <img src="img/balance-scale.png" class="img-fluid" alt="..." style="width: initial">
                                <h4 class="card-title">Respect</h4>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe excepturi dolorum aspernatur earum doloremque quia aliquid? Saepe aut, eos assumenda quos mollitia ratione earum cumque odio vero veniam qui beatae?</p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <section class="mt-5 mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>
    
        <div class="row justify-content-center" style="">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <!--Grid column-->
                <div class="col-md-10 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="FormController.php" method="POST">
                        <?php echo e(csrf_field()); ?>

        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <input type="text" id="message" name="message" rows="2" class="form-control md-textarea" value="<?php echo e(old('message')); ?>">
                                    <label for="message">Your message</label>
                                </div>
        
                            </div>
                        </div>
                        <!--Grid row-->
        
                    </form>
        
                    <div class="text-center text-md-auto">
                        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Submit</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
            </div>
        </div>

        <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ahmad\OneDrive - Bina Nusantara (1)\Binus\Semester 6\intern-test\resources\views/home.blade.php ENDPATH**/ ?>