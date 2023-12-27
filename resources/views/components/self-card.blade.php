@unless ($files->count())
    <div class="no-files">
        <h1>No files uploaded yet</h1>
    </div>
@else
    @foreach ($files as $file)
        <div class="card">
            <div class="file-thumbnail-container" data-pdf="storage/{{ $file->file }}">
            </div>
            <hr>
            <div class="card-other-info">
                <span>
                    <span class="sem">Sem {{ $file->semester }}</span> &nbsp; | &nbsp; <span
                        class="subj">{{ $file->subject }}</span>
                </span>
                <span class="more-actions">
                    <i class="fa-solid fa-ellipsis-vertical show-options"></i>
                    <ul data-file-id="{{ $file->id }}" class="add-options comment-btn">
                        <li><i class="fa-solid fa-comment-lines "></i> Comments</li>
                    </ul>
                </span>
            </div>
            <div class="card-details">
                <span class="uploader-img-container">
                    @if (auth()->user()->image == 'default.jpg')
                        <img src="{{ asset('images/default-user-img.png') }}" title="{{ auth()->user()->username }}"
                            alt="" class="uploader-img">
                    @else
                        <img src="{{ asset('storage/' . auth()->user()->image) }}" title="{{ auth()->user()->username }}"
                            alt="" class="uploader-img">
                    @endif
                </span>
                <span class="title-desc">
                    <p class="card-title">{{ $file->title }}</p>
                    <p class="card-description">{{ $file->description }}</p>
                </span>
            </div>
            <form action="{{ route('files.delete') }}" method="post">
                @csrf
                @method('DELETE')
                <div class="card-actions">
                    <a href="{{route('edit.file.show', ['id'=>$file->id])}}"><button class="edit-btn" type="button">Edit</button></a> 
                    <button type="submit" value="{{ $file->id }}" name="delete" class="delete-btn"
                        data-file-id="{{ $file->id }}">Delete</button>
                    <p class="post-date">Posted on {{ $file->created_at->format('d-m-y') }}</p>
                </div>
            </form>

            {{-- <div class="edit-modal-container">
                <div class="edit-modal">
                    <form action="">

                        <div class="file-details">
                            <span>
                                <label for="title" class="required">Title</label>
                                <input value="{{ $file->title }}" type="text" name="title" maxlength="20">
                            </span>

                            <span>
                                <label for="description" class="required">Description</label>
                                <textarea name="description" maxlength="50" class="desc-input"></textarea>
                            </span>

                            <div class="sem-subj">
                                <span>
                                    <label for="semester" class="required">Semester</label>
                                    <select name="semester" class="semesters">
                                        <option disabled selected hidden>Semester</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </span>

                                <span>
                                    <label for="subject" class="required">Subject</label>
                                    <input type="text" name="subject">
                                </span>
                            </div>
                            <div class="file-actions" class="required">
                                <button class="save-btn" type="submit">Save Changes</button>
                                <button class="cancel-edit-btn" onclick="event.preventDefault()">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    @endforeach
@endunless
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
    <script src="{{ asset('js/card.js') }}"></script>
    <script src="{{ asset('js/manage-file.js') }}"></script>
    {{-- <script>
        $(document).ready(function() {
            $(".comment-btn").click(function() {
                let file_id = $(this).data('file-id');
                window.location.href = "/comments/" + file_id;
            });
        });
    </script> --}}
@endsection
