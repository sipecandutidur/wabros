<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test api</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div id="token"></div>
    <div id="QR"></div>
    <script>
        $.ajax({
            url: 'https://waserver.teknologio.id/api/KHUCUYCOBA/THISISMYSECURETOKEN/generate-token',
            type: 'post',
            dataType: 'json',
            success: function(data){
                document.getElementById("token").innerHTML = "Token: " + data.token;
                $.ajax({
                    url: 'https://waserver.teknologio.id/api/KHUCUYCOBA/THISISMYSECURETOKEN/start-session',
                    type: 'post',
                    dataType: 'json',
                    headers: {"Authorization": "Bearer " + encodeURI(data.token)},
                    success: function(data1){
                        document.getElementById("QR").innerHTML = "QR: " + data1;
                    }
                });
            }
        });
    </script>
</body>
</html>
