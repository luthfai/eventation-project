@extends('layouts.template')

<style>
    /* CSS untuk tata letak dan tampilan halaman */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #660000;
        /* Warna latar belakang yang bertema alam */
        color: #cc9900;
        /* Warna teks yang kontras dengan latar belakang */
        position: relative;
    }

    h1 {
        font-family: 'Cedarville Cursive', cursive;
    }

    .header {
        background-color: #262626;
        /* Warna latar belakang yang lebih gelap pada header */
        padding: 20px;
        text-align: center;
    }

    .content {
        background-color: #fff;
        /* Warna latar belakang yang lebih gelap pada konten pertama */
        padding: 50px;
        text-align: center;
    }

    .couple-info {
        width: 70%;
        margin: 0 auto;
        margin-top: 30px;
        /* Jarak antara foto dan informasi mempelai */
    }

    .couple-nama {
        font-family: "Lucida Console", "Courier New", monospace;
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .couple-nama h3 {
        margin-left: 1em;
        margin-right: 1em;
    }

    .pria,
    .wanita {
        display: flex;
        flex-direction: column;
    }




    .event-details {
        width: 70%;
        margin: 0 auto;
        margin-bottom: 50px;
        /* Jarak antara informasi acara dan rsvp form */
    }

    .event-details ul {
        list-style-type: none;
        padding: 0;
    }

    .event-details li {
        margin-bottom: 20px;
    }

    .attendance-form {
        width: 70%;
        margin: 0 auto;
        padding: 50px;
        text-align: center;
        background-color: #660000;
        /* Warna latar belakang form */
        border-radius: 10px;
        /* Membulatkan sudut form */
        margin-bottom: 50px;
        /* Jarak antara form kehadiran dan form RSVP */
    }

    .attendance-form h2 {
        color: #fff;
        /* Warna teks pada form */
        margin-bottom: 20px;
    }

    .attendance-form label {
        display: block;
        text-align: center;
        color: #fff;
        /* Warna teks pada form */
        margin-bottom: 1em;
    }

    .attendance-form input[type="text"],
    .attendance-form input[type="email"],
    .attendance-form select {
        font-family: 'Poppins', sans-serif;
        padding: 10px;
        border-radius: 5px;
        border: none;
        width: 100%;
        max-width: 300px;
        margin-bottom: 10px;
    }

    .attendance-form input[type="submit"] {
        background-color: #000;
        color: #000;
        /* Warna teks pada tombol */
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    .audio-control {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 50px;
        height: 50px;
        background-color: #000;
        /* Warna latar belakang audio control */
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 9999;
    }

    .audio-control i {
        color: #fff;
        /* Warna ikon pada audio control */
        font-size: 24px;
    }
    .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 100%;
            border-radius: 10px;
            margin: 10pt;
        }
</style>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <audio id="background-music" src="/image/event/audio.mp3" autoplay loop></audio>



    <br><br>
    <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
        <h3 class="mb-6 text-3xl font-bold text-yellow-600 dark:text-neutral-200">
            {{ $event->title }}
        </h3>

        <!-- Image gallery -->
        <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
            <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                <img src="https://d.wattpad.com/story_parts/33/images/15b4cdd751d194c5198240135214.jpg"
                    alt="Two each of gray, white, and black shirts laying flat."
                    class="h-full w-full object-cover object-center" alt="Model wearing plain white basic tee."
                    class="h-full w-full object-cover object-center">
            </div>
            <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                    <img src="https://imgsrv2.voi.id/gB2lUt0-1EpZYA8NV_MsHPjAru0Sjt31wg4vUVMP9ww/auto/1200/675/sm/1/bG9jYWw6Ly8vcHVibGlzaGVycy8yNjYyOTQvMjAyMzAzMjMyMTMyLW1haW4uY3JvcHBlZF8xNjc5NTgxOTcwLmpwZWc.jpg"
                        alt="Model wearing plain black basic tee." class="h-full w-full object-cover object-center">
                </div>
                <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                    <img src="https://assets.ayobandung.com/crop/0x0:0x0/750x500/webp/photo/2023/03/23/Kevin-Sanjaya-dan-Valencia-Tanoesoedibjo-yang-diduga-beda-agama-resmi-menikah-ini-profil-keduanya-4128384275.jpg"
                        alt="Model wearing plain gray basic tee." class="h-full w-full object-cover object-center">
                </div>
            </div>
            <div class="aspect-h-5 aspect-w-4 lg:aspect-h-4 lg:aspect-w-3 sm:overflow-hidden sm:rounded-lg">
                <img src="https://weddingmarket.com/storage/images/artikelideacontent/new/843e8f59cf6fcb37e3cb929c9d5a3cba299b7a31.webp"
                    alt="Two each of gray, white, and black shirts laying flat."
                    class="h-full w-full object-cover object-center" alt="Model wearing plain white basic tee."
                    class="h-full w-full object-cover object-center">
            </div>
        </div>



        <div class="couple-info">
            <div class="couple-nama">
                <div class="pria">
                    <p>{{ $event->name1 }}</p>
                </div>
                <h3>Dengan</h3>
                <div class="wanita">
                    <p>{{ $event->name2 }}</p>
                </div>
            </div>
        </div>
    </div>


    <div class="content">
        <div class="event-details">
          <h2>Detail Acara</h2>
          <ul>
            {{ setlocale(LC_TIME, 'id_ID') }}
            <li>Tanggal Acara: {{ date('l, d-m-Y', strtotime($event->event_date)) }}</li>
            <li>Waktu Acara: {{ date('H:i', strtotime($event->start_date)) }} - {{ date('H:i', strtotime($event->end_date)) }}</li>
            <li>Tempat Acara: {{ $event->location }}</li>
            <div class="event-details">
                <h2>Location</h2>
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe width="50%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{ $event->location }}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0"
                      marginwidth="0"></iframe>
                  </div>
                </div>
              </div>
          </ul>
        </div>

        {{-- location map --}}
        <div class="attendance-form">
            <h2>Kehadiran</h2>
            @isset($guest)
                <form action='/event/{{ $event->slug }}/{{ $guest->token }}/konfirmasi' method="POST">
                    @csrf
                    @method('patch')
                @else
                    <form action='' method="">
                    @endisset
                    <label for="name">Nama:</label>
                    <h1>{{ $guest->name ?? 'Nama Tamu' }}</h1>
                    <label for="status">Kehadiran:</label>
                    <select id="status" name="status" required>
                        <option value="">Pilih Kehadiran</option>
                        <option value="hadir">Hadir</option>
                        <option value="tidak hadir">Tidak Hadir</option>
                    </select>

                    <input type="submit" value="Konfirmasi" style="background-color: darkgreen; ">
                </form>
        </div>
      </div>

    <div class="audio-control" onclick="toggleAudio()">
        <i class="fas fa-play" id="audio-icon"></i>
    </div>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
        var audio = document.getElementById('background-music');
        var audioIcon = document.getElementById('audio-icon');

        function toggleAudio() {
            if (audio.paused) {
                audio.play();
                audioIcon.classList.remove('fa-play');
                audioIcon.classList.add('fa-pause');
            } else {
                audio.pause();
                audioIcon.classList.remove('fa-pause');
                audioIcon.classList.add('fa-play');
            }
        }
    </script>
</body>

</html>
