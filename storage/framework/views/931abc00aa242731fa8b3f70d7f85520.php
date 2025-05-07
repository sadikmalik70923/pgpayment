

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2>Register</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('register.submit')); ?>">
        <?php echo csrf_field(); ?>

        <!-- Your other fields remain the same... -->
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Phone No:</label>
            <input type="number" name="number" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Permanent Address:</label>
            <input type="text" name="address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Aadhar No:</label>
            <input type="text" name="addhar_no" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>PAN No:</label>
            <input type="text" name="pan_no" class="form-control" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" title="Enter valid PAN number (e.g. ABCDE1234F)" required>
        </div>

        <div class="mb-3">
            <label>Rent Home Address:</label>
            <input type="text" name="rent_home_address" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password:</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <!-- Camera Capture Section -->
        

        <div class="mb-3">
            <label>Selfie Image:</label>
            <input type="file" name="selpi_image" class="form-control" accept="image/*" capture="user" required>
        </div>


        <button type="submit" class="btn btn-success">Proceed to Payment</button>
    </form>
</div>

<!-- Camera JS -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\PG-Patment-Application\resources\views/auth/register.blade.php ENDPATH**/ ?>