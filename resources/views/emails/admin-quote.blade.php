<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Quote Request</title>
</head>
<body>

    <h2>New Quote Request</h2>

    <p><strong>Full Name:</strong> {{ $quote->full_name }}</p>

    <p><strong>Company:</strong> {{ $quote->company }}</p>

    <p><strong>Email:</strong> {{ $quote->email }}</p>

    <p><strong>Phone:</strong> {{ $quote->phone }}</p>

    <p><strong>Scope:</strong> {{ $quote->scope }}</p>

    <p><strong>Approx. Size:</strong> {{ $quote->approx_size }}</p>

    <p><strong>Project Scope & Schedule:</strong></p>

    <p>{{ $quote->message }}</p>

</body>
</html>