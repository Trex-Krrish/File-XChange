{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
@foreach ($files as $file)
    @php
        $user = App\Models\User::find($file->user_id);
    @endphp
    <div class="card">
        <div class="file-thumbnail-container" data-pdf="storage/{{ $file->file }}"></div>
        <hr>
        <div class="card-other-info">
            <span>
                <span class="sem">Semester: {{ $file->semester }}</span> &nbsp; | &nbsp; <span class="subj">Subject:
                    {{ $file->subject }}</span>
            </span>
            @auth
                <span class="more-actions">
                    <i class="fa-solid fa-ellipsis-vertical show-options"></i>
                    <ul class="add-options">
                        <form action="{{ route('favorite.create') }}" method="POST">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="file_id" value="{{ $file->id }}">
                            <button type="submit">
                                <li><i class="fa-solid fa-star"></i> Add to Favorites</li>
                            </button>
                            <button type="button">
                                <li class="comment-btn" data-file-id="{{ $file->id }}"><i
                                        class="fa-solid fa-comment-lines"></i> Add a Comment</li>
                            </button>
                        </form>
                    </ul>
                </span>
            @endauth
        </div>
        <div class="card-details">
            <span class="uploader-img-container">
                @if ($user->image == 'default.jpg')
                    <img src="{{ asset('images/default-user-img.png') }}" title="{{ $user->username }}" alt=""
                        class="uploader-img">
                @else
                    <img src="{{ asset('storage/' . $user->image) }}" title="{{ $user->username }}" alt=""
                        class="uploader-img">
                @endif
                <input class="user_id" type="hidden" value="{{ $user->id }}" data-user-id="{{ $user->id }}">
            </span>
            <span class="title-desc">
                <p class="card-title">{{ $file->title }}</p>
                <p class="card-description">{{ $file->description }}</p>
            </span>
        </div>
        @auth
            <div class="card-actions">
                <a href="{{ asset('storage/' . $file->file) }}" target="_blank"><button>View</button></a>
                <a class="download-btn"
                    href="{{ asset('storage/' . $file->file) }}"download="{{ $file->title }}"><button>Download</button></a>
                <p class="post-date">Posted on: {{ $file->created_at->format('d-m-y') }}</p>
            </div>
        @else
            <div class="card-actions">
                <button class="toggle-alert-for-login">View</button>
                <button class="toggle-alert-for-login">Download</button>
                <p class="post-date">Posted on: {{ $file->created_at->format('d-m-y') }}</p>
            </div>
        @endauth
    </div>
@endforeach

@section('scripts')
    <script src="{{ asset('js/card.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
@endsection
