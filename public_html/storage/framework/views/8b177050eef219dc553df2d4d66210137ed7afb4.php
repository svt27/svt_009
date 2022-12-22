<?php $__env->startSection('content'); ?>
    <br>
    <br>

    <h2>Account Detail</h2>
    <div><b>Account number</b>: <?php echo e($account->account_number); ?></div>
    <div><b>Account Balance</b>: <?php echo e($account->balance); ?></div>
    <div><b>Account Type</b>: <?php echo e($account->account_type); ?></div>
    <div><b>Opened </b>: <?php echo e($account->created_at); ?></div>

    <br>
    <br>
    <table id="dt" class="table">
        <thead>
        <tr>
            <th scope="row">Destination account</th>
            <td>Source account</td>
            <td>Balance change</td>
            <td>Type</td>
            <td>Expected Total</td>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $account->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($transaction->dest->account_number); ?></td>
                <th><?php echo e($transaction->source->account_number); ?></th>
                <td><?php echo e($transaction->balance_change); ?></td>
                <td><?php echo e($transaction->transaction_type); ?></td>
                <td><?php echo e($transaction->expected_total); ?></td>
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
                    "pageLength": 10,
                    "lengthMenu": [ 5, 10, 15 ]
                }
            );
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/shezz/Desktop/Code/Project/Shreya/SB/resources/views/accounts/show.blade.php ENDPATH**/ ?>