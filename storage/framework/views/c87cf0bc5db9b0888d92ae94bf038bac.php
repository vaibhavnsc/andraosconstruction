<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Quote Request</title>
</head>
<body>

    <h2>New Quote Request</h2>

    <p><strong>Full Name:</strong> <?php echo e($quote->full_name); ?></p>

    <p><strong>Company:</strong> <?php echo e($quote->company); ?></p>

    <p><strong>Email:</strong> <?php echo e($quote->email); ?></p>

    <p><strong>Phone:</strong> <?php echo e($quote->phone); ?></p>

    <p><strong>Scope:</strong> <?php echo e($quote->scope); ?></p>

    <p><strong>Approx. Size:</strong> <?php echo e($quote->approx_size); ?></p>

    <p><strong>Project Scope & Schedule:</strong></p>

    <p><?php echo e($quote->message); ?></p>

</body>
</html><?php /**PATH I:\CRN\andraosconstruction\resources\views/emails/admin-quote.blade.php ENDPATH**/ ?>