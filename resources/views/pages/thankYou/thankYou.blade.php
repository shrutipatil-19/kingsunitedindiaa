<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>thank you</title>
    <style>
        .letter-image {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300px;
            height: 300px;
            transform: translate(-50%, -50%);
            cursor: pointer;
            transition: transform 1s ease-in-out;
        }

        p {
            font-size: 20px;
            font-weight: 700;
        }

        .animated-mail {
            position: absolute;
            height: 225px;
            width: 300px;
            transition: .4s;
        }

        .body {
            position: absolute;
            bottom: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 0 150px 300px;
            border-color: transparent transparent #e95f55 transparent;
            z-index: 2;
        }

        .top-fold {
            position: absolute;
            top: 75px;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 75px 150px 0 150px;
            transform-origin: 50% 0%;
            transition: transform .4s .4s, z-index .2s .4s;
            border-color: #cf4a43 transparent transparent transparent;
            z-index: 2;
        }

        .back-fold {
            position: absolute;
            bottom: 0;
            width: 300px;
            height: 150px;
            background: #cf4a43;
            z-index: 0;
        }

        .left-fold {
            position: absolute;
            bottom: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 75px 0 75px 150px;
            border-color: transparent transparent transparent #e15349;
            z-index: 2;
        }

        .letter {
            left: 30px;
            bottom: 0;
            position: absolute;
            width: 240px;
            height: 90px;
            background: white;
            z-index: 1;
            overflow: hidden;
            transition: .4s .2s;
        }

        .letter-border {
            height: 15px;
            width: 100%;
            background: repeating-linear-gradient(-45deg,
                    #cb5a5e,
                    #cb5a5e 8px,
                    transparent 8px,
                    transparent 18px);
        }

        .letter-title {
            margin-top: 15px;
            margin-left: 5px;
            height: 15px;
            width: 40%;
            background: #cb5a5e;
        }

        .letter-context {
            margin-top: 10px;
            margin-left: 5px;
            height: 10px;
            width: 20%;
            background: #cb5a5e;
        }

        .letter-stamp {
            margin-top: 45px;
            margin-left: 180px;
            border-radius: 100%;
            height: 45px;
            width: 45px;
            background: #cb5a5e;
            opacity: 0.3;
        }

        .letter-text {
            position: absolute;
            top: 55px;
            left: 15px;
            right: 15px;
            font-size: 16px;
            color: #333;
            text-align: center;
            font-family: 'Arial', sans-serif;
            line-height: 1.4;
            z-index: 2;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .shadow {
            position: absolute;
            top: 300px;
            left: 50%;
            width: 600px;
            height: 45px;
            transition: .4s;
            transform: translateX(-50%);
            border-radius: 100%;
            background: radial-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0));
        }

        .letter-image.open .animated-mail {
            transform: translateY(75px);
        }

        .letter-image.open .animated-mail .top-fold {
            transform: rotateX(180deg);
            z-index: 0;
            transition: transform .4s, z-index .2s;
        }

        .letter-image.open .animated-mail .letter {
            height: 270px;
        }

        .letter-image.open .shadow {
            width: 350px;
        }

        .letter-image.open .letter-text {
            opacity: 1;
        }

        .letter-image.zoom-out {
            transform: translate(-50%, -70%) scale(0.3);
            opacity: 0;
        }
    </style>
    <!-- Bootstrap 5 CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<body>
    <div class="letter-image" id="letter">
        <div class="animated-mail">
            <div class="back-fold"></div>
            <div class="letter">
                <div class="letter-border"></div>
                <div class="letter-title"></div>
                <div class="letter-context"></div>
                <div class="letter-stamp"></div>
                <div class="letter-text">
                    <p class="">Thank you<br>for enrolling!</p>
                </div>
            </div>
            <div class="top-fold"></div>
            <div class="body"></div>
            <div class="left-fold"></div>
        </div>
        <div class="shadow"></div>
    </div>

    <script>
        window.addEventListener('load', () => {
            const letter = document.getElementById('letter');
            letter.classList.add('open');
        });
    </script>
</body>

</html>