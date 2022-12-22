<?php $__env->startSection('content'); ?>


            <h2>Welcome to simple bank</h2>

            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?php echo e(route('accounts.create')); ?>">
                                <span data-feather="home"></span>
                                Create Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('accounts.index')); ?>">
                                <span data-feather="file"></span>
                                    My Accounts
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Manage Account</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('deposit.show')); ?>">
                                <span data-feather="file-text"></span>
                                Deposit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('withdraw.show')); ?>">
                                <span data-feather="file-text"></span>
                                Withdraw
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('transfer.show')); ?>">
                                <span data-feather="file-text"></span>
                                Transfer
                            </a>
                        </li>







                    </ul>
                </div>
            </nav>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shezz/Desktop/Code/Project/Shreya/SB/resources/views/home.blade.php ENDPATH**/ ?>