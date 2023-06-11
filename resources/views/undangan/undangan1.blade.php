<!DOCTYPE html>
<html>
<head>
  <title>Undangan Pernikahan</title>
  <style>
    /* CSS untuk tata letak dan tampilan halaman */
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #070606; /* Warna latar belakang yang bertema alam */
      color: #fff; /* Warna teks yang kontras dengan latar belakang */
      position: relative;
    }
    
    h1 {
      font-family: 'Cedarville Cursive', cursive;
    }
    
    .header {
      background-color: #110c0c; /* Warna latar belakang yang lebih gelap pada header */
      padding: 20px;
      text-align: center;
    }
    
    .content {
      background-color: #1e1d1d; /* Warna latar belakang yang lebih gelap pada konten pertama */
      padding: 50px;
      text-align: center;
    }
    
    .couple-info {
      width: 70%;
      margin: 0 auto;
      margin-top: 30px; /* Jarak antara foto dan informasi mempelai */
    }

    .couple-nama{
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    .couple-nama h3{
        margin-left: 1em;
        margin-right: 1em;
    }

    .pria , .wanita{
        display: flex;
        flex-direction: column;
    }
    
    
    .couple-photo {
      display: flex;
      justify-content: center;
    }
    
    .couple-photo img {
      width: 50%; /* Atur ukuran foto mempelai */
      max-width: 250px;
    }
    
    .event-details {
      width: 70%;
      margin: 0 auto;
      margin-bottom: 50px; /* Jarak antara informasi acara dan rsvp form */
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
      background-color: #110c0c; /* Warna latar belakang form */
      border-radius: 10px; /* Membulatkan sudut form */
      margin-bottom: 50px; /* Jarak antara form kehadiran dan form RSVP */
    }
    
    .attendance-form h2 {
      color: #fff; /* Warna teks pada form */
      margin-bottom: 20px;
    }
    
    .attendance-form label {
      display: block;
      text-align: center;
      color: #fff; /* Warna teks pada form */
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
      background-color: #f5d5e6;
      color: #fff; /* Warna teks pada tombol */
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
      background-color: #699e78; /* Warna latar belakang audio control */
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 9999;
    }
    
    .audio-control i {
      color: #fff; /* Warna ikon pada audio control */
      font-size: 24px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <audio id="background-music" src="{{asset ('undangan2/audio.mp3') }}" autoplay loop></audio>
  
  <div class="header">
    <h1>Undangan Pernikahan</h1>
    <div class="couple-photo">
      <img src="{{asset ('undangan2\1.png') }}" alt="Foto Mempelai Pria">
      <img src="{{asset ('undangan2\2.png') }}" alt="Foto Mempelai Wanita">
    </div>
    <div class="couple-info">
        <div class="couple-nama">
            <div class="pria">
                <p>[Nama Pria]</p>
                <p>Putra dari bapak dan ibu</p>
            </div>
            <h3>Dengan</h3>
            <div class="wanita">
                <p>[Nama Wanita]</p>
                <p>Putra dari bapak dan ibu</p>
            </div>
        </div>
    </div>
  </div>
  
  <div class="content">
    <div class="event-details">
      <h2>Detail Acara</h2>
      <ul>
        <li>Tanggal Acara: 1 Januari 2024</li>
        <li>Waktu Acara: 12:00 - 16:00</li>
        <li>Tempat Acara: Gedung Pernikahan Indah</li>
      </ul>
    </div>
    
    <div class="attendance-form">
      <h2>Kehadiran</h2>
      <form>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        
        <input type="submit" value="Konfirmasi" style="background-color: rgb(109, 57, 66); ">
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
