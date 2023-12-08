<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
    <style>
        body {
            background-color: blue;
            color: royalblue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            position: relative;
        }

        #newsignin {
            background-color: rgba(234, 236, 239, 0.87);
            padding: 40px;
            width: 390px;
            border-radius: 5px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
        }

        #SignIn {

            justify-content: space-between;
            display: inline-flex;
        }

        #mid {
            display: flex;
            justify-content: space-between;
        }

        #top input {
            width: 380px;
            height: 30px;
            border: 1pxpx;
        }

        #bot {
            display: flex;
            justify-content: space-between;
        }

        button {
            display: flex;
            background-color: royalblue;
            border: 0px;
            border-radius: 3px;
            color: azure;
            width: 100px;
            height: 30px;
        }
    </style>
</head>

<body>
    <div id="newsignin">
        <div id="SignIn">
            <img src="https://cdn2.iconfinder.com/data/icons/ui-basic-glyph/512/UI_Basic_GLYPH-13-512.png" style="width: 30px; height: 30px" />
            <h1 style="margin:0px; margin-left:5px;">Sign In</h1>
        </div>
        <hr>
        <div id="top">
            <label>Username</label><br>
            <input class="Input" type="text"><br><br>
            <label>Password</label><br>
            <input class="Input" type="text">
        </div>
        <br>
        <div id="mid">
            <div>
                <input class="Input" type="checkbox">
                <label>Remember me</label>
            </div>
            <button>
                <p style="margin:8px">Sign In</p><img src="https://cdn-icons-png.flaticon.com/512/152/152532.png"
                    style="width: 20px; height: 20px; margin-top:4px;" />
            </button>
        </div>
        <hr>
        <div id="bot">
            <label>Forgot your password?</label>
            <label>New user?Regester Now?</label>
        </div>
    </div>
</body>
</html>