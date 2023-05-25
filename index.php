<!DOCTYPE html>
<html>

<head>
    <title>Rym & Idir</title>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

        * {
            padding: 0;
            margin: 0;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-family: "Montserrat Medium";
            max-width: 160ch;
            font-size: 75px;
            text-align: center;
            transform: scale(0.94);
            animation: scale 3s forwards cubic-bezier(0.5, 1, 0.89, 1);
        }

        @keyframes scale {
            100% {
                transform: scale(1);
            }
        }

        span {
            display: inline-block;
            opacity: 0;
            filter: blur(4px);
        }

        span:nth-child(1) {
            animation: fade-in 0.8s 0.1s forwards cubic-bezier(0.11, 0, 0.5, 0);
        }

        span:nth-child(2) {
            animation: fade-in 0.8s 0.2s forwards cubic-bezier(0.11, 0, 0.5, 0);
        }

        span:nth-child(3) {
            animation: fade-in 0.8s 0.3s forwards cubic-bezier(0.11, 0, 0.5, 0);
        }

        span:nth-child(4) {
            animation: fade-in 0.8s 0.4s forwards cubic-bezier(0.11, 0, 0.5, 0);
        }


        @keyframes fade-in {
            100% {
                opacity: 1;
                filter: blur(0);
            }
        }

        .loader {
            border: 16px solid #f3f3f3;
            /* Light grey */
            border-top: 16px solid #800020;
            /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @charset "UTF-8";
        /* Please ❤ this if you like it! */
        /* Follow Me https://codepen.io/designfenix */
        /**/
        /**/
        /**/
        /**/
        /**/
        /**/
        /**/
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

        :root {
            --vs-primary: 29 92 255;
        }

        /*Dialog Styles*/
        dialog {
            padding: 1rem 3rem;
            background: white;
            max-width: 400px;
            padding-top: 2rem;
            border-radius: 20px;
            border: 0;
            box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.1);
            -webkit-animation: fadeIn 1s ease both;
            animation: fadeIn 1s ease both;
        }

        dialog::-webkit-backdrop {
            -webkit-animation: fadeIn 1s ease both;
            animation: fadeIn 1s ease both;
            background: rgba(255, 255, 255, 0.4);
            z-index: 2;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
        }

        dialog::backdrop {
            -webkit-animation: fadeIn 1s ease both;
            animation: fadeIn 1s ease both;
            background: rgba(255, 255, 255, 0.4);
            z-index: 2;
            -webkit-backdrop-filter: blur(20px);
            backdrop-filter: blur(20px);
        }

        dialog .x {
            filter: grayscale(1);
            border: none;
            background: none;
            position: absolute;
            top: 15px;
            right: 10px;
            transition: ease filter, transform 0.3s;
            cursor: pointer;
            transform-origin: center;
        }

        dialog .x:hover {
            filter: grayscale(0);
            transform: scale(1.1);
        }

        dialog h2 {
            font-weight: 600;
            font-size: 2rem;
            padding-bottom: 1rem;
        }

        dialog p {
            font-size: 1rem;
            line-height: 1.3rem;
            padding: 0.5rem 0;
        }

        dialog p a:visited {
            color: rgb(var(--vs-primary));
        }

        /*General Styles*/
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Poppins, sans-serif;
            background-size: cover;
        }

        dialog {
            margin-left: auto;
            margin-right: auto;
        }

        button.primary {
            display: inline-block;
            font-size: 0.8rem;
            color: #fff !important;
            background: rgb(var(--vs-primary)/100%);
            padding: 13px 25px;
            border-radius: 17px;
            transition: background-color 0.1s ease;
            box-sizing: border-box;
            transition: all 0.25s ease;
            border: 0;
            cursor: pointer;
            box-shadow: 0 10px 20px -10px rgb(var(--vs-primary)/50%);
        }

        button.primary:hover {
            box-shadow: 0 20px 20px -10px rgb(var(--vs-primary)/50%);
            transform: translateY(-5px);
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        #myButton {
            background-color: #800020;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <dialog id="dialog">
        <h2>Hello.</h2>
        <p>Language preferences</p>
        <button id="myButton" onclick="redirect(1);">Engligh</button>
        <button id="myButton" onclick="redirect(2);">Francais</button>
    </dialog>
    <h1>

        <span>الرَّحِيمِ</span>
        <span>الرَّحْمَـٰنِ</span>
        <span>اللَّـهِ </span>
        <span>بِسْمِ</span>


    </h1>
    <div class="loader"></div>

</body>
<script>
    window.dialog.showModal();
    function redirect(a) {
        window.dialog.close();
        onclick = "redirect(1);"
        setTimeout(function () {
            if (a == 1) {
                window.location.href = "index.html";
            }

        }, (3000));
    }

</script>

</html>