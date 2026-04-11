<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App</title>
    <!-- Add Tailwind CSS just for quick styling until Breeze is loaded -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>
