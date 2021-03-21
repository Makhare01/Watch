<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">    
    <style>
        .Mywidth {
            height: 100vh;
            max-height: 1080px;
            border: solid 1px red;
            width: 100%;
            max-width: 1920px;
            margin: auto;
        }
        .vertical-carousel {
            height: 100%;
            width: 220px;
            max-height: 1080px;
            /* border: solid 1px red; */
            overflow-y: scroll;
        }

        .vertical-carousel::-webkit-scrollbar {
            display: none;
        }

        .content-div {
            height: 100%;
        }
        .galery-right {
            background-color: #D3D3D3;
        }
        .galery-left {
            background-color: #E8E8E8;
            position: relative;
        }
        .galery-left-text {
            width: 80%;
            position: absolute;
            top: 400;
            left: 10%;
        }
        .add-button {
            background: #555555;
        }
        .background-text {
            font-size: 13vw;
            /* font-variant-numeric: tabular-nums; */
            font-family: 'Open Sans', sans-serif;
            opacity: 0.1;
            margin-top: 20%;
        }
        .Xbut svg:hover {
            stroke: #FCA5A5;
        }
        .box {
            width: 220px;
            height: 220px;
            border: solid 1px green;
            background: #FDE68A;
        }
        .box:hover {

        }
    </style>

</head>
<body>
    <main class="flex Mywidth">
        <!-- Left vertical carousel -->
        <div class="vertical-carousel">
            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                        <path d="M8 17l4 4 4-4m-4-5v9"></path>
                        <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                    </svg>
                    <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                    <p class="leading-relaxed">Downloads</p> -->
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>

            <div class="w-full">
                <div class="px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110 hover:shadow-2xl hover:bg-purple-200 hover:bg-opacity-75">
                    <img src="img/black-tan-leather.webp" alt="Black/tan leather">
                </div>
            </div>
        </div>

        <div class="content-div flex w-screen">
            <!-- Description container -->
            <div class="galery-left bg-opacity-15 w-2/5">
                <p class="background-text text-center cursor-default font-bold">01/13</p>
                <div class="galery-left-text w-48 h-auto z-2 font-mono">
                    <p class="text-sm text-yellow-300 pacity-10">MAN WATCH</p>
                    <p class="text-5xl text-extrabold mt-1 font-sans">BLACK/TAN LEATHER</p> <br>
                    <p class="text-sm text-grey-200 pacity-25">45 mm, brushed black plated stainless steel case, hardened <br> mineral cristal. Thickness - 9mm. Water resistant up to 3atm.</p> <br break>
                    <p class="text-3xl mt-2 mb-2">$95,00 <span class="text-sm">USD</span></p> <br>
                    <button type="button" class="add-button focus:outline-none text-white text-bold h-14 w-48 text-lg py-2.5 px-5 hover:bg-gray-700 hover:shadow-lg">ADD TO CARD</button>
                    <input class="h-14 w-16 text-xl" type="number" value=1> <br>
                </div>
            </div>

            <!-- Watch galery container -->
            <div class="galery-right bg-opacity-75 flex w-3/5">

                <!-- Close icon -->
                <div class="Xbut h-14 w-14 absolute -ml-7 rounded-b-lg bg-white cursor-pointer shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="#CACACA">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>

                <div class="Xbut w-10 h-14 m-auto ml-0 rounded-r-2xl pt-5 pl-2 bg-white cursor-pointer shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42" fill="#CACACA">
                        <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

                <img src="img/watch-mido.png" alt="mido watch">
                <!-- <div class="relative">
                    <div class="absolute inset-0 w-screen h-screen bg-pink-500 text-white flex items-center justify-center text-5xl transition-all ease-in-out duration-1000 transform translate-x-0 slide">Hello</div>
                    <div class="absolute inset-0 w-screen h-screen bg-purple-500 text-white flex items-center justify-center text-5xl transition-all ease-in-out duration-1000 transform translate-x-full slide">There</div>
                    <div class="absolute inset-0 w-screen h-screen bg-teal-500 text-white flex items-center justify-center text-5xl transition-all ease-in-out duration-1000 transform translate-x-full slide">Booya!</div>
                    <div onclick="nextSlide()" class="fixed bottom-0 right-0 bg-white w-16 h-16 flex items-center justify-center text-black cursor-pointer">&#x276F;</div>
                    <div onclick="previousSlide()" class="fixed bottom-0 right-0 bg-white w-16 h-16 mr-16 border-r border-gray-400 flex items-center justify-center text-black cursor-pointer">&#x276E;</div>
                </div> -->

                <div class="Xbut w-10 h-14 m-auto mr-0 rounded-l-2xl pt-5 pl-3 bg-white cursor-pointer shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42 42" fill="#CACACA">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>
        
    </main>

    <script>
        function nextSlide(){
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('-translate-x-full');
            
            let nextSlide = activeSlide.nextElementSibling;
            nextSlide.classList.remove('translate-x-full');
            nextSlide.classList.add('translate-x-0');
        }

        function previousSlide(){
            let activeSlide = document.querySelector('.slide.translate-x-0');
            activeSlide.classList.remove('translate-x-0');
            activeSlide.classList.add('translate-x-full');
            
            let previousSlide = activeSlide.previousElementSibling;
            previousSlide.classList.remove('-translate-x-full');
            previousSlide.classList.add('translate-x-0');
        }
    </script>
    

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>