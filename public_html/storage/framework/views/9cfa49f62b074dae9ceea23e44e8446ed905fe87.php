<?php $__env->startSection('content'); ?>


            <h2>Account List</h2>

            <table id="dt" class="table">
                <thead>
                <tr>
                    <th scope="row">Account Number</th>
                    <td>Balance</td>
                    <td>Account Type</td>
                    <td>Modified</td>
                </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><a href="<?php echo e(route('accounts.show', $account->id)); ?>"><?php echo e($account->account_number); ?></a></th>
                            <td><?php echo e($account->balance); ?></td>
                            <td><?php echo e($account->account_type); ?></td>
                            <td><?php echo e($account->updated_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dt').DataTable(
                {
                    "pageLength": 5,
                    "lengthMenu": [ 5, 10, 15 ]
                }
            );
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shezz/Desktop/Code/Project/Shreya/SB/resources/views/accounts/list.blade.php ENDPATH**/ ?>