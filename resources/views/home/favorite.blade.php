<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites | File Xchange</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/favorites.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="loading-container">
        <img src="{{ asset('images/filex-icon.png') }}" class="icon">
    </div>

    @include('components.navbar')
    <div class="main-container">
        @include('alert')
        <h1>Favorites</h1>
        <div class="cards-container">
            <x-favorite-card :files="$files" />
        </div>
    </div>

    <script src="{{ asset('js/card.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>

    <script>
        // Get all the elements with the class "show-options"
        const showOptionsIcons = document.querySelectorAll('.show-options');
        const addOptionsLists = document.querySelectorAll('.add-options');

        // Add click event listener to each "show-options" icon
        showOptionsIcons.forEach((showOptionsIcon, index) => {
            let isOptionsVisible = false;

            showOptionsIcon.addEventListener('click', () => {
                isOptionsVisible = !isOptionsVisible;
                addOptionsLists[index].style.display = isOptionsVisible ? 'block' : 'none';
            });
        });
    </script>

</body>

</html>
