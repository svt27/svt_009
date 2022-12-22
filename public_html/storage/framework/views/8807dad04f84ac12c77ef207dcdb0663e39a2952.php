<?php $__env->startSection('content'); ?>


            <h2>Deposit</h2>

            <form action="<?php echo e(route('deposit.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Amount</label>
                    <input name="amount" min="35" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Minimum 5$ deposit for account creation.</div>
                </div>
                <div class="mb-3">
                <select required name="source_id" class="form-select" aria-label="Default select example">
                    <option selected>To Account</option>
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($account->id); ?>"><?php echo e($account->account_number); ?> <b>(<?php echo e($account->balance); ?>)</b></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shezz/Desktop/Code/Project/Shreya/SB/resources/views/accounts/deposit.blade.php ENDPATH**/ ?>