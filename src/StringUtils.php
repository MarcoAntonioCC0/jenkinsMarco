<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <form>
        <label style="display:block; padding:2px; margin-bottom:4px">Introduce un texto</label>
        <input type="text" id="text" style="width: 320px">

        <div style="display:block; margin-top:5px">
            <button type="button" onclick="sendRequest('reverse')">Invertir</button>
            <button type="button" onclick="sendRequest('uppercase')">Mayúsculas</button>
            <button type="button" onclick="sendRequest('lowercase')">Minúsculas</button>
            <button type="button" onclick="sendRequest('count')">Contar letras</button>
        </div>
    </form>

    <div id="result"></div>

    <script>

        function sendRequest(action) {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "functions.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            var text = document.getElementById('text').value;
            var text = "text=" + text;
            var action = "action=" + action;

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {
                    const response = JSON.parse(xhr.responseText);
                        document.getElementById('result').innerText = response;

                    } else {
                        console.error("Error en la solicitud: " + xhr.statusText);
                    }
                }
            };
            xhr.send(action + "&" + text);
        }
    </script>
</body>

</html>