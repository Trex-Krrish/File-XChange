
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit file - File XChange</title>
    <link rel="stylesheet" href="{{asset('css/manage-file.css')}}">
</head>
<body>
    <h1 class="file-name">Editing <span>File - Name</span></h1>

    <div class="edit-modal-container">
        <div class="edit-modal">
            <form action="{{route('edit.file', ['id'=>$file->id])}}" method="POST">
                @csrf
                @method('PUT')
                <div class="file-details">
                    <span>
                        <label for="title" class="required">Title</label>
                        <input value="{{$file->title}}" type="text" name="title" maxlength="20">
                    </span>

                    <span>
                        <label for="description" class="required">Description</label>
                        <textarea name="description" maxlength="50" class="desc-input">{{$file->description}}</textarea>
                    </span>

                    <div class="sem-subj">
                        <span>
                            <label for="semester" class="required">Semester</label>
                            <select name="semester" class="semesters">
                                <option disabled hidden>Semester</option>
                                <option {{$file->semester == 1 ? 'selected' : ''}} value="1">1</option>
                                <option {{$file->semester == 2 ? 'selected' : ''}} value="2">2</option>
                                <option {{$file->semester == 3 ? 'selected' : ''}} value="3">3</option>
                                <option {{$file->semester == 4 ? 'selected' : ''}} value="4">4</option>
                                <option {{$file->semester == 5 ? 'selected' : ''}} value="5">5</option>
                                <option {{$file->semester == 6 ? 'selected' : ''}} value="6">6</option>
                            </select>
                        </span>

                        <span>
                            <label for="subject" class="required">Subject</label>
                            <input value="{{$file->subject}}" type="text" name="subject">
                        </span>
                    </div>
                    <div class="file-actions" class="required">
                        <button class="save-btn" type="submit">Save Changes</button>
                        <button class="cancel-edit-btn" onclick="event.preventDefault()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>