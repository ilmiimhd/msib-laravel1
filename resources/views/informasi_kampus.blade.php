<!DOCTYPE html>
<html>
<head>
    <title>Informasi Kampus - Suasana Akademis</title>
    <style>
        body {
            font-family: "Times New Roman", serif; /* Menggunakan font serif yang sering digunakan dalam lingkungan akademis */
            background-color: #8f2424; /* Warna latar belakang abu-abu muda */
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #ffffff;
        }

        .campus-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 800px; /* Lebar maksimum konten untuk tampilan yang lebih akademis */
            margin: 0 auto;
        }

        img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        h2 {
            color: #3498db;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #3498db;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline; /* Tautan menjadi bergaris bawah saat dihover, mirip dengan tampilan akademis */
        }
    </style>
</head>
<body>
    <h1>INFORMASI KAMPUS</h1>
    
    <div class="campus-card">
        <img src="{{ asset('ittp.png') }}" alt="ittp">
        <h2>Institut Teknologi Telkom Purwokerto</h2>
        
        <p>Menjadi mahasiswa di Institut Teknologi Telkom Purwokerto adalah pengalaman luar biasa. Kampus ini menawarkan berbagai program studi yang berkualitas dalam berbagai bidang teknologi dan informatika.</p>
        
        <h3>Informasi Umum</h3>
        <ul>
            <li>Lokasi: Purwokerto, Jawa Tengah</li>
            <li>Website: <a href="https://ittelkom-pwt.ac.id/" target="_blank">https://ittelkom-pwt.ac.id/</a></li>
        </ul>
        
        <h3>Program Studi</h3>
        <p>ITTP menawarkan berbagai program studi yang siap mempersiapkan mahasiswa untuk masa depan yang cerah.</p>
        
        <h3>Fasilitas</h3>
        <p>Kampus ITTP dilengkapi dengan fasilitas modern yang mendukung proses belajar mengajar, termasuk laboratorium, perpustakaan, dan ruang kuliah yang nyaman.</p>

        <a href="{{ url('/') }}">Halaman Depan</a>
        <a href="{{ url('/profile-pembuat') }}">Profil Pembuat</a>
    </div>
</body>
</html>