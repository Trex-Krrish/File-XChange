<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/admin-panel.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="main-container">
        @include('admin.sidebar')
        <div class="main-section">

            <h1 style="margin-top: 4rem;">Users</h1>
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
                            <th>Name</th>
                            <th>Enrollment no.</th>
                            <th>Downloaded files</th>
                            <th>Editor</th>
                        </tr>
                        @foreach ($users as $user)
                            <tr class="user-details-row">
                                <td>
                                    @if ($user->image == 'default.jpg')
                                        <img src="{{ asset('images/default-user-img.png') }}"
                                            title="{{ $user->username }}" alt="" class="user-img">
                                    @else
                                        <img src="{{ asset('storage/' . $user->image) }}" title="{{ $user->username }}"
                                            alt="" class="user-img">
                                    @endif
                                </td>
                                <td class="user-name">{{ $user->fname . ' ' . $user->lname }}</td>
                                <td>{{ $user->roll }}</td>
                                <td>20</td>
                                <td>
                                    <select data-user="{{ $user->id }}" name="editor" class="editor"
                                        id="editor">
                                        <option disabled>Editor Permission</option>
                                        <option {{ $user->editor == 1 ? 'selected' : '' }} value="1">Allowed
                                        </option>
                                        <option {{ $user->editor == 0 ? 'selected' : '' }} value="0">Denied
                                        </option>
                                    </select>
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
