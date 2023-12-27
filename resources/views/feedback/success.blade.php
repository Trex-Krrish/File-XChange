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

    <div class="submitted-message">
        <i class="fa-sharp fa-solid fa-circle-check"></i>
        <div class="message">
            <h2>Thank you!</h2>
            <h3>We have received your feedback and will review it. <br> Once approved, it will be featured on our main
                page.</h3>
        </div>


        <div class="count-down">
            <h4>You will be redirected to home page in <br> <span id="numbers">5</span> <br> Seconds</h4>
        </div>
    </div>

    <div id="time-bar"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let countdownValue = 10;
            const numbersElement = document.getElementById('numbers');

            function updateCountdown() {
                numbersElement.textContent = countdownValue;
                if (countdownValue === 0) {
                    window.location.href = '/';
                } else {
                    countdownValue--;
                }
            }

            updateCountdown();

            setInterval(updateCountdown, 1000);
        });
    </script>

</body>

</html>
