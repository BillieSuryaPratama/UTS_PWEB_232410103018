<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlayLog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="sticky top-0 z-50">
        @include("components.navbar")
    </header>

    <main>
        <div>
            @yield("content")
        </div>
    </main>

    <footer>
        @include("components.footer")
    </footer>
</body>
</html>
