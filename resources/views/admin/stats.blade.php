<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">

    <link rel="stylesheet" href="{{asset('css/admin-panel.css')}}">
</head>

<body>

    <div class="main-container">
        @include('admin.sidebar')
        <div class="main-section">

            <h1>Server Stats</h1>

            <div class="stats-card-container">
                <div class="user-card stats-card">
                    <i class="fa-solid fa-user-group"></i>
                    <span>
                        <h4>Users</h4>
                        <h3>{{$totalUser}}</h3>
                    </span>
                </div>

                <div class="files-card stats-card">
                    <i class="fa-solid fa-file"></i>
                    <span>
                        <h4>Files Uploaded</h4>
                        <h3>{{$totalFile}}</h3>
                    </span>
                </div>


                <div class="download-card stats-card">
                    <i class="fa-regular fa-arrow-down-to-line"></i>
                    <span>
                        <h4>Files Downloaded</h4>
                        <h3>{{$filesDownloaded}}</h3>
                    </span>
                </div>

            </div>

        </div>

    </div>

    <script src="{{asset('js/admin-panel.js')}}"></script>

</body>

</html>