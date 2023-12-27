<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File XChange</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }}">
</head>

<body>

    <div class="form-container">
        <h1>Share Your Thoughts with Us</h1>

        <form id="" action="{{ route('feedback.create') }}" method="post">
            @csrf
            @method('POST')
            @error('feedback')
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="star-rating" id="starRating">
                <span class="star" data-value="1"><i class="fa-solid fa-star"></i></span>
                <span class="star" data-value="2"><i class="fa-solid fa-star"></i></span>
                <span class="star" data-value="3"><i class="fa-solid fa-star"></i></span>
                <span class="star" data-value="4"><i class="fa-solid fa-star"></i></span>
                <span class="star" data-value="5"><i class="fa-solid fa-star"></i></span>
            </div>

            <input type="hidden" name="rating" id="rating" value="1">

            <div class="text-filed">
                <label for="text">Please share more details about your experience or suggestions</label>
                <textarea name="feedback" id="" cols="30" rows="8"></textarea>
            </div>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
    <script src="{{ asset('js/feedback.js') }}"></script>

</body>

</html>
