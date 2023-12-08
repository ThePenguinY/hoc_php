<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 6</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #14207e;
        }

        header {
            height: 200px;
            width: 900px;
            background-image: linear-gradient(to right, yellow, yellow);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        menu {
            width: 250px;
            height: 1070px;
            background-image: linear-gradient(to right, green, green);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        #slide,
        #content,
        footer {
            width: 900px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #slide {
            height: 500px;
            background-image: linear-gradient(to right, pink, pink, pink);
        }

        #content {
            height: 300px;
            background-image: linear-gradient(to right, red, red);
        }

        footer {
            height: 70px;
            background-image: linear-gradient(to right, gold, gold, gold);
            color: #f7797d;
        }

        h1 {
            margin: 0;
        }
    </style>
</head>

<body>
    <div style="float: left;">
        <menu>
            <h1>Menu</h1>
        </menu>
    </div>
    <div style="margin-left: 200px;">
        <header>
            <h1>Header</h1>
        </header>
        <section id="slide">
            <h1>Slide</h1>
        </section>
        <section id="content">
            <h1>Content</h1>
        </section>
        <footer>
            <h1>Footer</h1>
        </footer>
    </div>
</body>

</html>