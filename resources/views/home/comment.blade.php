<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>Comments | File Xchange</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/comments.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="icon" href="{{ asset('images/filex-icon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <div class="main-container">
        @include('alert')
        @error('comment')
            <div class="error-alert-container alert-body">
                <i class="fa-duotone fa-triangle-exclamation main-icon"></i>
                <p class="alert">{{ $message }}</p>
                <i class="fa-regular fa-xmark close-icon"></i>
            </div>
        @enderror
        <div class="top">
            <a href="{{ route('home') }}"><i class="fa-regular fa-arrow-left"></i></a>
            <h3>Comments</h3>
        </div>
        <div class="add-comment-box">
            <form action="{{ route('comments.create', ['id' => $id]) }}" id="comment-form" method="POST">
                @csrf
                @method('POST')
                <div class="textarea-container">
                    <textarea name="comment" placeholder="Write comment here" id="comment-box" class="comment-box" maxlength="100"
                        oninput="countCharacters()"></textarea>
                    <p class="char-count" id="charCount">0/100</p>
                </div>
                <button type="submit"><i class="fa-solid fa-paper-plane-top submit-btn"></i></button>
            </form>
        </div>

        <div class="comments-container">
            @unless (count($comments))
                <h1>No Comments found, be first to post a comment</h1>
            @else
                @foreach ($comments as $comment)
                    @php
                        $user = App\Models\User::find($comment->user_id);
                    @endphp
                    <div class="comment-box">
                        <div class="img-container">
                            @if ($user->image == 'default.jpg')
                                <img src="{{ asset('images/default-user-img.png') }}" title="{{ $user->username }}"
                                    alt="" class="user-img">
                            @else
                                <img src="{{ asset('storage/' . $user->image) }}" title="{{ $user->username }}"
                                    alt="" class="user-img">
                            @endif
                        </div>
                        <div class="uname-n-comment">
                            <h4 class="uname">{{ $user->username }}</h4>
                            <p class="comment">
                                {{ $comment->comment }}
                            </p>
                        </div>
                        <div class="date-delete">
                            <h5 class="date">{{ $comment->created_at->format('d F, o') }}</h5>
                            @php
                                $file = App\Models\File::find($comment->file_id);
                            @endphp
                            @if ($file->user_id == Auth::user()->id)
                                <i data-comment-id="{{ $comment->id }}" data-file-id="{{ $id }}"
                                    class="fa-solid fa-trash delete" title="Delete comment"></i>
                            @else
                                @if ($comment->user_id == Auth::user()->id)
                                    <i data-comment-id="{{ $comment->id }}" data-file-id="{{ $id }}"
                                        class="fa-solid fa-trash delete" title="Delete comment"></i>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            @endunless
        </div>
    </div>
    <script>
        function countCharacters() {
            // Get the textarea element
            var textarea = document.getElementById("comment-box");

            // Get the character count
            var charCount = textarea.value.length;

            // Update the character count display
            var charCountDisplay = document.getElementById("charCount");
            charCountDisplay.textContent = charCount;

            // Get the character limit
            var charLimit = parseInt(textarea.getAttribute("maxlength"), 10);

            // Update the character limit in the display
            charCountDisplay.textContent += "/" + charLimit;
        }
    </script>
    <script src="{{ asset('js/comment.js') }}"></script>

</body>

</html>
