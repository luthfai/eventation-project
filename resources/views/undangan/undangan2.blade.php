<!DOCTYPE html>
<html>
<head>
    <title>Undangan Pernikahan</title>
    <style>
        body {
            font-family: 'Cedarville Cursive', cursive;
            text-align: center;
            color: #ffffff;
            padding: 20px;
            background-image: url("{{ asset('undangan2/wallpaperbetter.jpg') }}");
            background-size: cover;
            background-position: center;
        }
        
        .card {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px;
        background-color: rgba(2, 45, 44, 0.9);
        border-radius: 20px;
        box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1);
    }
    
    h1 {
        font-family: 'Parisienne', cursive;
        font-size: 36px;
        margin-bottom: 20px;
    }
    h3{
        font-family: 'Parisienne', cursive;
        font-size: 32px;
    }
    
    .couple-photos {
        display: flex;
        justify-content: center;
        margin-bottom: 20px;
    }
    
    .couple-photo {
        width: 25%;
        border-radius: 50%;
    }
    
    p {
        font-family: 'Crimson Text', serif;
        line-height: 1.5;
        font-size: 22px;
        margin-bottom: 20px;
        font-weight: bold;
    }
    
    .date-time {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    .location {
        font-size: 16px;
    }
    
    .contact-info {
        font-size: 14px;
    }
    
    .audio-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .audio-controls button {
        margin: 0 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-family: 'Crimson Text', serif;
        font-size: 16px;
        cursor: pointer;
    }

    .form-container {
        margin-top: 20px;
        text-align: left;
    }

    .form-container input[type="text"],
    .form-container input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border-radius: 5px;
        border: none;
    }

    .form-container button {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #ff4c60;
        color: #ffffff;
        font-family: 'Crimson Text', serif;
        font-size: 16px;
        cursor: pointer;
    }

    .form-container button:hover {
        background-color: #e63b4d;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Parisienne&family=Crimson+Text&display=swap" rel="stylesheet">
</head>
<body>
    <div class="card">
        <h1>Undangan Pernikahan</h1>
        <div class="couple-photos">
            <img class="couple-photo" src="{{ asset('undangan2\1.png') }}" alt="Foto Pasangan 1">
            <img class="couple-photo" src="{{ asset('undangan2\2.png') }}" alt="Foto Pasangan 2">
        </div>
        <p>Kami dengan gembira mengundang Anda untuk merayakan momen bahagia kami saat kami bergabung dalam ikatan pernikahan.</p>
        <p>Harap bergabung dengan kami pada:</p>
        <div class="date-time">
            <p>[Tanggal]</p>
            <p>[Waktu]</p>
        </div>
        <div class="location">
            <p>[Lokasi]</p>
            <p>[Alamat]</p>
        </div>
        <div class="contact-info">
            <p>Silakan hubungi kami di [Nomor Telepon] atau [Email] jika Anda memiliki pertanyaan atau konfirmasi kehadiran.</p>
        </div>
        <p>Terima kasih dan kami harap dapat berbagi kebahagiaan ini bersama Anda.</p>
        <p>Salam hangat,</p>
        <p>[Nama Pasangan]</p>

        <div class="audio-controls">
            <button id="play-btn">Play</button>
            <button id="pause-btn">Pause</button>
        </div>
    
        <audio id="audio" autoplay>
            <source src="{{ asset('undangan2\audio.mp3') }}" type="audio/mpeg">
            Your browser does not support the audio element.
        </audio>
    
        <div class="form-container">
            <h3>Konfirmasi Kehadiran</h3>
            <form action="" method="POST">
                @csrf
                <input type="text" name="nama" placeholder="Nama Anda" required>
                <input type="email" name="email" placeholder="Email Anda" required>
                <button type="submit">Konfirmasi</button>
            </form>
        </div>
    </div>
    
    <script>
        var audio = document.getElementById("audio");
        var playBtn = document.getElementById("play-btn");
        var pauseBtn = document.getElementById("pause-btn");
    
        playBtn.addEventListener("click", function() {
            audio.play();
        });
    
        pauseBtn.addEventListener("click", function() {
            audio.pause();
        });
    </script>
    </body>
    </html>
