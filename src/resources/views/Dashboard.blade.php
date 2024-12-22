<!-- resources/views/vendor/guardian/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Dashboard</title>
</head>
<body>
    <h1>Exception Records</h1>

    @foreach ($exceptions as $exception)
        <div>
            <p><strong>Message:</strong> {{ $exception->exception_message }}</p>
            <pre><strong>Stack Trace:</strong> {{ $exception->stack_trace }}</pre>
            <p><strong>Created At:</strong> {{ $exception->created_at }}</p>
        </div>
        <hr>
    @endforeach

    {{ $exceptions->links() }}
</body>
</html>
    