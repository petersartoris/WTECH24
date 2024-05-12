<!DOCTYPE html>
<html>

<head>
    <title>Order Success</title>
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body class="bg-color">
    <div class="container-custom ">
        <h1 class="top-attention">Order placed successfully!</h1>
        <p class="light-white" id="counter">You will be redirected in 5 seconds...</p>
    </div>
    <script type="text/javascript">
        var counter = 5;
        var interval = setInterval(function() {
            counter--;
            document.getElementById('counter').innerHTML = "You will be redirected in " + counter + " seconds...";
            if (counter === 0) {
                clearInterval(interval);
                window.location.href = '{{ url('/') }}';
            }
        }, 1000); // 1000 milliseconds = 1 second
    </script>
</body>

</html>
