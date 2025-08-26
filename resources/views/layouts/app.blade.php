<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard User</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <script src="https://unpkg.com/feather-icons"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      list-style: none;
      text-decoration: none;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f8f9fc;
      color: #000;
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 100vh;
      padding: 0 8%;
    }

    .conten {
      max-width: 600px;
    }

    .title h6 {
      font-size: 14px;
      letter-spacing: 3px;
      font-weight: 500;
      opacity: 0.8;
      color: #000000;
    }

    .title h1 {
      font-size: 46px;
      font-weight: 700;
      margin: 10px 0 25px;
      line-height: 1.2;
      color: #2e2e2e;
    }

    .masuk {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .masuk input,
    .masuk select {
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid rgba(0, 0, 0, 0.15);
      outline: none;
      font-size: 14px;
      flex: 1;
      min-width: 180px;
      transition: all 0.2s;
    }

    .masuk input:focus,
    .masuk select:focus {
      border-color: #4e73df;
      box-shadow: 0 0 0 3px rgba(78, 115, 223, 0.25);
    }

    .masuk button {
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      background: #4e73df;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .masuk button:hover {
      background: #2e59d9;
    }

    .cta p {
      margin: 10px 0;
      color: #555;
    }

    .cta button {
      padding: 12px 25px;
      border: none;
      border-radius: 8px;
      background: #406AE7;
      color: white;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .cta button:hover {
      background: #335ee0;
    }

    header img {
      max-width: 420px;
      margin-left: 40px;
      display: block;
    }
  </style>
</head>

<body>
  <header>
    <div class="conten">
      <div class="kontek">
        <div class="title">
          <h6>S M K N 6 J E M B E R</h6>
          <h1>Cari Lowongan Kerja</h1>
        </div>
        <div class="masuk">
          <input type="text" placeholder="Posisi / Perusahaan">
          <select name="input" id="">
            <option value="" disabled selected>==pilih==</option>
            <option value="">SMK</option>
          </select>
          <button>Cari</button>
        </div>
        <div class="cta">
          <p>Daftar sekarang dan dapatkan pekerjaan secepatnya.</p>
          <button>Daftar Sekarang</button>
        </div>
      </div>
    </div>
    <img src="{{asset('img/wonghome.png')}}" alt="Ilustrasi">
  </header>

  <script>
    feather.replace()
  </script>
</body>

</html>
