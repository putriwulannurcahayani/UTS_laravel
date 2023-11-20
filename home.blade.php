<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #000080;
            color: #fff;
            text-align: center;
            padding: 60px 0;
        }

        header h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        header p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        header a {
            display: inline-block;
            padding: 12px 24px;
            text-decoration: none;
            color: #fff;
            background-color: #f44336;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #000080;
        }

        main {
            padding: 40px;
        }

        .featured-products {
            margin-bottom: 40px;
        }

        .featured-products h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }

        .product {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            background-color: #fff;
            transition: box-shadow 0.3s ease;
        }

        .product:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .product h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #000000;
        }

        .product img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .product p {
            margin-bottom: 15px;
            color: #666;
        }

        .product a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #f44336;
            color: #fff;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .product a:hover {
            background-color: #555;
        }

        .about-us {
            line-height: 1.6;
            text-align: center;
        }

        .about-us h2 {
            font-size: 2.5em;
            margin-bottom: 30px;
            color: #333;
        }

        footer {
            text-align: center;
            background-color: #000080;
            color: #fff;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <h1>Selamat Datang di Toko Bunga Kami</h1>
        <p>Kami menyediakan berbagai macam bunga segar untuk segala kesempatan.</p>
        <a href="{{ route('products') }}">Lihat Katalog Bunga Kami</a>
    </header>

    <main>
        <section class="featured-products">
            <h2>Produk Unggulan</h2>
            <div class="product">
                <h3>Nama Produk</h3>
                <img src="https://th.bing.com/th/id/OIP.BYs73fUR6dIcGgwceXliBAHaFj?w=261&h=196&c=7&r=0&o=5&dpr=1.5&pid=1.7" alt="TULIP">
                <p>Deskripsi singkat produk...</p>
                <p>Harga: $100.000</p>
                <a href="{{ route('products') }}">Lihat Detail</a>
            </div>
        </section>

        <section class="about-us">
            <h2>Tentang Kami</h2>
            <p>Kami adalah toko bunga lokal yang berkomitmen untuk menyediakan bunga berkualitas tinggi kepada pelanggan kami.</p>
            <p>Kami juga menerima pesanan khusus untuk acara spesial Anda.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Flower Shop - Hak Cipta Dilindungi</p>
    </footer>
</body>

</html>
