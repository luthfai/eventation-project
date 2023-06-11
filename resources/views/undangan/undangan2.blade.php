<!DOCTYPE html>
<html>
<head>
    <title>Wedding Invitation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap">
    <style>
        body {
            background-image: url({{asset ('undangan2/roses_bush_bloom_128901_3840x2400.jpg') }});
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-
        }

        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -1;
        }

        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 40px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            background-color: rgba(132, 3, 3, 0.8);
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .couple-photo {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
        }

        .couple-photo img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            object-position: center;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
        }

        .details {
            margin-bottom: 40px;
        }

        .details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .details p {
            font-size: 18px;
            margin: 5px 0;
        }

        .event-details {
            margin-bottom: 40px;
        }

        .event-details h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .event-details p {
            font-size: 18px;
            margin: 5px 0;
        }

        .form-rsvp {
            margin-bottom: 40px;
        }

        .form-rsvp h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-rsvp form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-rsvp label {
            font-size: 18px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
        }

        .form-rsvp input[type="text"],
        .form-rsvp input[type="email"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            margin-bottom: 16px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .form-rsvp input[type="submit"] {
            background-color: #d00101;
            color: #fff;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-rsvp input[type="submit"]:hover {
            background-color: #ff0000;
        }

        .audio-player {
            position: fixed;
            bottom: 20px;
            left: 20px;
            display: flex;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px;
            border-radius: 50px;
        }

        .audio-player button {
            background-color: transparent;
            border: none;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
            margin-right: 10px;
        }

        .audio-player button:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <h1>Wedding Invitation</h1>

        <div class="couple-photo">
            <img src="{{asset ('undangan2\1.png') }}" alt="Foto Pria">
            <img src="{{asset ('undangan2\2.png') }}" alt="Foto Wanita">
        </div>

        <div class="details">
            <h2>Detail Mempelai</h2>
            <p>Nama Pria: John Doe</p>
            <p>Nama Wanita: Jane Smith</p>
        </div>

        <div class="event-details">
            <h2>Detail Acara</h2>
            <p>Tanggal: 25 Juni 2023</p>
            <p>Waktu: 10:00 - 13:00</p>
            <p>Tempat: Gedung Pernikahan Bahagia</p>
        </div>

        <div class="form-rsvp">
            <h2>Konfirmasi Kehadiran</h2>
            <form>
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <input type="submit" value="Konfirmasi">
            </form>
        </div>

        <div class="audio-player">
          <button id="play-pause-btn">&#9658;</button>
          <audio id="audio" src="{{asset ('undangan2/audio.mp3') }}" autoplay></audio>
      </div>
  
      <script>
          var audio = document.getElementById("audio");
          var playPauseBtn = document.getElementById("play-pause-btn");
  
          playPauseBtn.addEventListener("click", function() {
              if (audio.paused) {
                  audio.play();
                  playPauseBtn.innerHTML = "&#10074;&#10074;";
              } else {
                  audio.pause();
                  playPauseBtn.innerHTML = "&#9658;";
              }
          });
      </script>
    </div>
</body>
</html>
