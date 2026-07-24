<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Estimate Request</title>
    <style>
        body {
            font-family: 'Segoe UI', Helvetica, Arial, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .header {
            background-color: #0f172a;
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .header h2 {
            margin: 0;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        .content {
            padding: 30px;
        }
        .intro {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 24px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 24px;
        }
        .table th, .table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #f1f5f9;
        }
        .table th {
            background-color: #f8fafc;
            color: #475569;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            width: 35%;
        }
        .table td {
            color: #0f172a;
            font-size: 15px;
        }
        .message-box {
            background-color: #f8fafc;
            border-left: 4px solid #0f172a;
            padding: 16px;
            margin-top: 10px;
            font-size: 14px;
            line-height: 1.6;
            color: #334155;
            white-space: pre-line;
        }
        .footer {
            background-color: #f8fafc;
            text-align: center;
            padding: 20px;
            font-size: 12px;
            color: #64748b;
            border-top: 1px solid #e2e8f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Andraos Construction</h2>
        </div>
        <div class="content">
            <p class="intro">A new estimate request has been submitted through the website contact form. Here are the details:</p>
            
            <table class="table">
                <tr>
                    <th>Full Name</th>
                    <td><?php echo e($quote->full_name); ?></td>
                </tr>
                <?php if($quote->company): ?>
                <tr>
                    <th>Company</th>
                    <td><?php echo e($quote->company); ?></td>
                </tr>
                <?php endif; ?>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:<?php echo e($quote->email); ?>"><?php echo e($quote->email); ?></a></td>
                </tr>
                <?php if($quote->phone): ?>
                <tr>
                    <th>Phone</th>
                    <td><a href="tel:<?php echo e($quote->phone); ?>"><?php echo e($quote->phone); ?></a></td>
                </tr>
                <?php endif; ?>
                <?php if($quote->scope): ?>
                <tr>
                    <th>Project Scope</th>
                    <td><?php echo e($quote->scope); ?></td>
                </tr>
                <?php endif; ?>
                <?php if($quote->approx_size): ?>
                <tr>
                    <th>Approx. Size</th>
                    <td><?php echo e($quote->approx_size); ?></td>
                </tr>
                <?php endif; ?>
            </table>

            <?php if($quote->message): ?>
            <div style="font-weight: 600; font-size: 13px; text-transform: uppercase; color: #475569; margin-top: 20px;">Project Details & Schedule:</div>
            <div class="message-box">
                <?php echo e($quote->message); ?>

            </div>
            <?php endif; ?>
        </div>
        <div class="footer">
            &copy; <?php echo e(date('Y')); ?> Andraos Construction. All rights reserved.
        </div>
    </div>
</body>
</html>
<?php /**PATH E:\Andros\andraosconstruction\resources\views/emails/quote_submitted.blade.php ENDPATH**/ ?>