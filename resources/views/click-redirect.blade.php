<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="referrer" content="unsafe-url">
    <meta http-equiv="refresh" content="0;url={{ $targetUrl }}">
    <title>Redirecting...</title>
    <script>
        window.location.replace(@json($targetUrl));
    </script>
</head>
<body>
    <p>Redirecting...</p>
    <p>
        <a href="{{ $targetUrl }}" rel="noreferrer">Continue</a>
    </p>
</body>
</html>