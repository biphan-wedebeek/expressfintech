<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="referrer" content="unsafe-url">
    <title>Redirecting...</title>
</head>
<body>
<script>
    const cleanUrl = @json($currentClickUrl);
    const targetUrl = @json($targetUrl);

    try {
        history.replaceState({}, '', cleanUrl);
    } catch (e) {}

    window.location.replace(targetUrl);
</script>
</body>
</html>