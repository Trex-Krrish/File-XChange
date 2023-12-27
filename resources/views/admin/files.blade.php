<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}">
</head>

<body>

    <div class="main-container">
        @include('admin.sidebar')
        <div class="main-section">

            <h1 style="margin-top: 4rem;">Files</h1>
            <hr>

            <div class="user-details-container">

                <div class="top-tools">

                    <div class="search-bar">
                        <input type="text" id="searchInput" placeholder="Search...">
                    </div>

                    <div class="other-tools">

                        <span class="filter">
                            <select name="filter" id="filter">
                                <option disabled selected hidden>Filter</option>
                                <option value="">by Name (Ascending)</option>
                                <option value="">by Name (Descending)</option>
                                <option value="">by Roll(Ascending)</option>
                                <option value="">by Roll(Descending)</option>
                            </select>
                        </span>

                        <span class="export">
                            <select name="export" id="export">
                                <option disabled selected hidden>Export</option>
                                <option value="pdf">as PDF</option>
                                <option value="csv">as CSV</option>
                            </select>
                        </span>

                    </div>
                </div>

                <div class="table-container">
                    <table id="myTable">

                        <tr>
                            <th><i class="fa-solid fa-circle-user"></i></th>
                            <th>File Name</th>
                            <th>Uploader Name</th>
                            <th>Enrollment no.</th>
                            <th>File ID</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($files as $file)
                            @php
                                $user = App\Models\User::find($file->user_id);
                            @endphp
                            <tr class="file-details-row">
                                <td>
                                    @if ($user->image == 'default.jpg')
                                        <img src="{{ asset('images/default-user-img.png') }}" title="{{ $user->username }}"
                                            alt="" class="user-img">
                                    @else
                                        <img src="{{ asset('storage/' . $user->image) }}" title="{{ $user->username }}"
                                            alt="" class="user-img">
                                    @endif
                                </td>
                                <td class="file-name">{{ $file->title }}</td>
                                <td>{{ $user->fname . ' ' . $user->lname }} </td>
                                <td>{{ $user->roll }}</td>
                                <td>{{ $file->id }}</td>
                                <td>
                                    <form action="{{route("admin.files.delete")}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button name="file_id" value="{{$file->id}}" type="submit" class="delete-btn" title="Delete file"><i
                                                class="fa-sharp fa-solid fa-trash"></i></button>
                                        <a href="{{ asset('storage/' . $file->file) }}" target="_blank"><button
                                                type="button" class="view-btn" title="View file"><i
                                                    class="fa-solid fa-eye"></i></button></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>

    </div>

    <script src="{{ asset('js/admin-panel.js') }}"></script>

</body>

</html>
