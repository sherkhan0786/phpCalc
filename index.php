<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

   <!-- <script src="main.js"> -->
    </script>
       <title>Calculator</title>
</head>
<body>
    <div class="container">
        <h1 id="h1">Calculator</h1>
        <div class="calc">
            <input type="text" id="display" placeholder="0">
            <table>
                <tr>
                    <td><button onclick="calculate('7')">7</button></td>
                    <td><button onclick="calculate('8')">8</button></td>
                    <td><button onclick="calculate('9')">9</button></td>
                    <td><button onclick="operator('*')">X</button></td>
                </tr>

                <tr>
                    <td><button onclick="calculate('4')">4</button></td>
                    <td><button onclick="calculate('5')">5</button></td>
                    <td><button onclick="calculate('6')">6</button></td>
                    <td><button onclick="operator('-')">-</button></td>
                </tr>

                <tr>
                    <td><button onclick="calculate('1')">1</button></td>
                    <td><button onclick="calculate('2')">2</button></td>
                    <td><button onclick="calculate('3')">3</button></td>
                    <td><button onclick="operator('+')">+</button></td>
                </tr>

                <tr>
                    <td><button onclick="calculate('0')">0</button></td>
                    <td><button onclick="clearBox()">C</button></td>
                    <td><button onclick="operator('/')">/</button></td>
                    <td><button onclick="operator('=')">=</button></td>
                </tr>
            </table>
        </div>
    </div>

    <script src="main.js"></script>
</body>
</html>