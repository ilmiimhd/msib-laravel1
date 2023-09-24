<!DOCTYPE html>
<html>
<head>
    <title>Profil - Muhammad Ilmi</title>
    <style>
        body {
            font-family: "Georgia", serif;
            background-color: #545252;
            text-align: center;
            padding: 20px;
            margin: 0;
        }

        h1 {
            font-family: "Times New Roman", serif;
            color: #ffffff;
        }

        .profile-card {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        img {
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%;
        }

        h2 {
            color: #212121;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
            text-align: justify;
        }

        /* Tombol dengan efek kotak bayangan */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #545252;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease; /* Efek transisi ketika tombol dihover */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); /* Efek kotak bayangan */
        }

        .button:hover {
            background-color: #545252; /* Warna latar belakang saat tombol dihover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Efek kotak bayangan saat dihover */
        }

        a {
            text-decoration: none;
            color: #545252;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>BIODATA</h1>
    
    <div class="profile-card">
        <img src="{{ asset('ilmi.jpg') }}" alt="ilmi">
        <h2>Muhammad Ilmi</h2>
        <p>Mahasiswa Teknik Informatika dari Institut Teknologi Telkom Purwokerto, sekarang tengah menjalankan studi di semester 5 dan juga mengikuti MBKM Studi Independen di Gits.id.</p>
        <!-- Tombol menuju halaman depan dengan kotak bayangan -->
        <a href="{{ url('/') }}" class="button">Halaman Depan</a>
        <!-- Tombol menuju halaman informasi kampus dengan kotak bayangan -->
        <a href="{{ url('/informasi-kampus') }}" class="button">Informasi Kampus</a>
    </div>
</body>
</html>