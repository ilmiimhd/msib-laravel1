<!DOCTYPE html>
<html>
<head>
    <title>BERANDA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffdb4d; /* Warna latar belakang kuning Y2K */
            color: #333; /* Warna teks utama */
            text-align: center;
            padding: 20px;
            margin: 0; /* Menghilangkan margin default */
        }

        h1 {
            color: #ff3399; /* Warna teks judul pink Y2K */
        }

        .container {
            max-width: 1200px; /* Lebar maksimum konten */
            margin: 0 auto; /* Pusatkan konten di tengah */
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Warna latar belakang konten dengan transparansi */
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        }

        img {
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
            border: 5px solid #ff3399; /* Bingkai gambar pink Y2K */
            border-radius: 10px; /* Sudut gambar berbentuk bulat */
        }

        p {
            font-size: 18px;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: #ff3399; /* Warna teks tautan pink Y2K */
            margin-right: 10px;
        }

        /* Tombol */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff3399; /* Warna latar belakang tombol pink Y2K */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #ff0055; /* Warna latar belakang tombol saat hover */
        }
    </style>
</head>
<body>
    <h1>WELCOME ^,^</h1>
    
    <div class="container">
        <img src="{{ asset('aespa.jpg') }}" alt="aespa">
        <p>aespa adalah grup musik K-pop yang memiliki gaya Futuristik dan Cyberfunk.</p>
        <p>Lagu Terbaru</p>
        <audio controls>
            <source src="{{ asset('aespasong.mp3') }}" type="audio/mpeg">
            Maaf, browser Anda tidak mendukung pemutar audio.
        </audio> 
        <p>Link Spotify</p>       
        <a class="button" href="https://open.spotify.com/intl-id/track/6zZWoHlF2zNSLUNLvx4GUl?si=77fd1ef2f7434315" target="_blank">Better Things</a>
        <p>Informasi lebih lanjut Tentang profil dan Kampus.</p>

        <a href="{{ url('/profile-pembuat') }}">Profil Pembuat</a>
        <a href="{{ url('/informasi-kampus') }}">Informasi Kampus</a>
    </div>
</body>
</html>
