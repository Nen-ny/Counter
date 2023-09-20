<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Counter</title>
    @livewireStyles
</head>
<body>
    <livewire:counter /> 
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: skyblue;
        }

        .container {
            align-items: center;
            justify-content: center;
            display: flex;
            flex-direction: column;
        }

        h1 {
            margin: 3rem;
        }

        .container-counter {
            margin-top: 0;
        }

        .container-counter h2 {
            text-align: center;
            font-size: 30px;
            margin: 2px;
        }

        button {
            margin: 15px;
            padding: 15px;
            font-size: 25px;
            width: 75vw;
            border-radius: 10px;
            border: none;
        }

      
    </style>
    @livewireScripts
</body>
</html>