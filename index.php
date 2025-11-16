<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Text Reverser</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            text-align: center;
        }
        textarea {
            width: 80%;
            height: 100px;
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            cursor: pointer;
        }
        #result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h2>Text Reverser Tool</h2>
    <textarea id="inputText" placeholder="Enter text here..."></textarea><br>
    <button onclick="reverseText()">Reverse</button>

    <p id="result"></p>

    <script>
        function reverseText() {
            const text = document.getElementById("inputText").value;
            const reversed = text.split("").reverse().join("");
            document.getElementById("result").innerText = "Reversed: " + reversed;
        }
    </script>

</body>
</html>
