<!DOCTYPE html>
<html>
<head>
  <title>Undangan Pernikahan</title>
  <style>
    /* CSS untuk tata letak dan tampilan halaman */
    body {
      font-family: 'Cedarville Cursive', cursive;
      margin: 0;
      padding: 0;
    }
    
    .header {
      background-color: #f5d5e6;
      padding: 20px;
      text-align: center;
      width: 100%;
      height: 100vh;
    }
    
    .content {
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f9e2f3;
      padding: 50px;
      width: 100%;
      height: 100vh;
    }
    
    .couple-info {
      text-align: center;
      width: 50%;
    }
    
    .event-details {
      text-align: center;
      width: 50%;
    }
    
    .rsvp-form {
      text-align: center;
      width: 100%;
    }
    
    .rsvp-form input[type="text"],
    .rsvp-form input[type="email"],
    .rsvp-form select {
      font-family: 'Cedarville Cursive', cursive;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      width: 100%;
      max-width: 300px;
      margin-bottom: 10px;
    }
    
    .rsvp-form input[type="submit"] {
      background-color: #f5d5e6;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
    <h1>Undangan Pernikahan</h1>
    <p>Foto kedua mempelai dan informasi mengenai mempelai</p>
    <!-- Masukkan foto kedua mempelai di sini -->
    <img src="foto-mempelai.jpg" alt="Foto Mempelai">
  </div>
  
  <div class="content">
    <div class="couple-info">
      <h2>Informasi Mempelai</h2>
      <p>Deskripsi mengenai mempelai</p>
    </div>
    
    <div class="event-details">
      <h2>Detail Acara</h2>
      <p>Tanggal, Waktu, dan Tempat Acara</p>
    </div>
    
    <div class="rsvp-form">
      <h2>Konfirmasi Kehadiran</h2>
      <form>
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="attendance">Kehadiran:</label>
        <select id="attendance" name="attendance" required>
          <option value="">Pilih Kehadiran</option>
          <option value="hadir">Hadir</option>
          <option value="tidak_hadir">Tidak Hadir</option>
        </select><br><br>
        
        <input type="submit" value="Konfirmasi">
      </form>
    </div>
  </div>
  
  <script>
    // JavaScript untuk logika tambahan, jika diperlukan
  </script>
</body>
</html>
