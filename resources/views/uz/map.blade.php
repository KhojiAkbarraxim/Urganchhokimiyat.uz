<!DOCTYPE HTML>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Bu qator Tailwind CSS-ni yuklaydi, bu CSS framework veb sahifani tartibga solish uchun ishlatiladi. -->

    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        /* Bu qismda butun HTML hujjat va body uchun margin va padding 0 ga o'rnatilgan, hamda kenglik va balandlik 100% qilib belgilangan.   */

        #map {
            width: 100%;
            height: 100%;
        }

        /* Bu qismda "map" ID ga ega elementning kengligi va balandligi 100% qilib o'rnatilgan.   */
    </style>
</head>

<body>
    <div layout:fragment="content" style="height: 80vh; width: 100%;">
        <!-- Bu div `content` layout fragmentini ifodalaydi va uning kengligi 100%, balandligi esa 80vh qilib o'rnatilgan. -->

        <div style="height: 100%">
            <!-- Bu div "height: 100%" uslubida, ya'ni uning balandligi ota elementining 100% ini egallaydi. -->

            <div>
                <div style="height: 80vh; width: 100%;">
                    <!-- Bu div ham balandligi 80vh va kengligi 100% bo'lgan holatda uslublangan. -->

                    <div class="grid grid-cols-4 gap-4" style="height: 80vh; width: 100%;">
                        <!-- Bu div Tailwind CSS yordamida to'rt ustunli grid qilib o'rnatilgan va elementlar orasidagi masofa "gap-4" bilan belgilangan. Balandligi 80vh va kengligi 100%. -->
                        <div class="col-span-3" style="width: 100%">
                            <!-- Bu div uch ustun kenglikni egallaydi va kengligi 100% ga teng. -->

                            <div id="map"></div>
                            <!-- Bu element xaritani ko'rsatish uchun ishlatiladi va "map" ID bilan belgilangan. -->
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://api-maps.yandex.ru/2.1/?apikey=2e7cad27-1966-484e-bc9b-0cb482946535&lang=en_US"
                type="text/javascript"></script>
            <!-- Bu qator Yandex Maps API-ni yuklaydi va xarita funksiyalaridan foydalanish imkonini beradi. -->
        </div>
    </div>

    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map("map", {
                center: [41.5545, 60.6249],
                zoom: 13,
                controls: ['typeSelector', 'fullscreenControl']
            });

            fetch('https://new.amudarya.uz/api/obj/locations/1')
                .then(data => data.json())
                .then(data => {

                    for (let i = 0; i < data.Data.length; i++) {
                        var marker = new ymaps.Placemark(
                            [data.Data[i].latitude, data.Data[i].longitude], {}, {
                                iconLayout: 'default#image',
                                iconImageHref: 'https://imgs.search.brave.com/S_Kcx0tx-Oeb89e_2e85gmT3cs0l3GE5H9hdEINuEaQ/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4t/aWNvbnMtcG5nLmZs/YXRpY29uLmNvbS8x/MjgvNDkwLzQ5MDA5/MS5wbmc',
                                iconImageSize: [50, 50]
                            }
                        );
                        myMap.geoObjects.add(marker);
                    }

                })

        }
    </script>
</body>

</html>
