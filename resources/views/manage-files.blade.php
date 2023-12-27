@extends('home.layout.app')
@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/manage-file.css') }}">
@endsection
@section('content')
    <section class="upload-sec">

        <div class="upload-box">
            <i class="fa-solid fa-file-arrow-up"></i>
            <div class="text-n-btn">
                <h3>Upload Your Notes</h3>
                <button class="custom-upload-btn">Upload</button>
            </div>
        </div>

        <div class="upload-modal-container">
            <div class="upload-modal">
                <form action="{{ route('files.create') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <label for="images" class="drop-container" id="dropcontainer">
                        <span class="drop-title">Drop files here</span>
                        or
                        <input name="file" type="file" id="images" accept=".pdf" required>
                        <p>Pdf supported under 50mb</p>
                    </label>

                    <div class="file-details">
                        <span>
                            <label for="title" class="required">Title</label>
                            <input type="text" name="title" maxlength="20" required>
                            @error('title')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </span>

                        <span>
                            <label for="description" class="required">Description</label>
                            <textarea required name="description" maxlength="50" class="desc-input"></textarea>
                        </span>

                        <div class="sem-subj">
                            <span>
                                <label for="semester" class="required">Semester</label>
                                <select name="semester" class="semesters" required>
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
                                <input type="text" name="subject" required>
                            </span>
                        </div>
                        <div class="file-actions" class="required">
                            <button class="upload-btn" type="submit">Upload File</button>
                            <button class="cancel-btn">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <hr>
    <section class="recent-sec">

        <h1>Recent files</h1>

        <div class="cards-container">
            <x-self-card :files="$files" />
        </div>

    </section>
@endsection
