<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    @props([
        'showHeader' => true,
        'showFooter' => true,
        'showSideNav' => true
    ])

    @if($showHeader)
        <x-header />
    @endif

    <main style="display: flex; height: 88vh;">
        @if($showSideNav)
            <x-sidenav />
        @endif

        <div class="content" style="padding: 10px 20px; height: 450px;">   
            {{ $slot }}
        </div>
    </main>

    @if($showFooter)
        <x-footer />
    @endif
</body>
</html>
