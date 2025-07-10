<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kingsunitedindia</title>
    @include('partial.styleLink')
    @stack('style')
    <style>
        @import url('https://fonts.googleapis.com/css?family=Anton');

        /* Real custom cursor */
        .cursor {
            position: fixed;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            background-color: #f44336;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.05s ease;
            transform: translate(-50%, -50%);
        }

        /* Trailing follower */
        .cursor__follower {
            position: fixed;
            top: 0;
            left: 0;
            width: 10px;
            height: 10px;
            background-color: rgba(244, 67, 54, 0.3);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            transition: transform 0.4s ease;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    @include('partial.header')
    <!-- <div >
        <br><span></span>
    </div> -->
    @yield('content')
    @include('partial.footer')
    @include('partial.jsLink')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const cursor = document.createElement('div');
            cursor.classList.add('cursor');
            document.body.appendChild(cursor);

            const follower = document.createElement('div');
            follower.classList.add('cursor', 'cursor__follower');
            document.body.appendChild(follower);

            let mouseX = 0,
                mouseY = 0;
            let followerX = 0,
                followerY = 0;

            document.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;

                cursor.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
            });

            function animateFollower() {
                followerX += (mouseX - followerX) * 0.1;
                followerY += (mouseY - followerY) * 0.1;
                follower.style.transform = `translate(${followerX}px, ${followerY}px)`;
                requestAnimationFrame(animateFollower);
            }

            animateFollower();
        });
    </script>

    @stack('js')
</body>

</html>