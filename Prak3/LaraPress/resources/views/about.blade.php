<!DOCTYPE html> <html lang="id"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Tentang Kami - LaraPress</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #f3f4f6, #e0e7ff);
        color: #1f2937;
    }

    nav {
        background: #4f46e5;
        padding: 18px 8%;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    nav .logo {
        color: white;
        font-size: 24px;
        font-weight: bold;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin-left: 25px;
        font-weight: 500;
    }

    nav a:hover {
        color: #c7d2fe;
    }

    .container {
        max-width: 900px;
        margin: 80px auto;
        padding: 20px;
    }

    .card {
        background: white;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .card h1 {
        color: #4f46e5;
        margin-bottom: 20px;
        font-size: 40px;
    }

    .card p {
        line-height: 1.8;
        font-size: 18px;
        color: #4b5563;
    }

    .button {
        display: inline-block;
        margin-top: 30px;
        padding: 12px 25px;
        background: #4f46e5;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        transition: 0.3s;
    }

    .button:hover {
        background: #3730a3;
        transform: translateY(-2px);
    }

    footer {
        text-align: center;
        padding: 25px;
        color: #6b7280;
    }
</style>

</head> <body>
<nav>
    <div class="logo">LaraPress</div>

    <div>
        <a href="/">Beranda</a>
        <a href="/tentang">Tentang</a>
        <a href="/kontak">Kontak</a>
    </div>
</nav>

<div class="container">
    <div class="card">
        <h1>Profile</h1>

        <p>
            Nama  : Rangga Veda Aswangga
            
        </p>
        <P>Email : rangga@gmail.com

        </P>
        <P>Alamat : Cibinong

        </P>
        <p>NPM   : 4524210118

        </p>

        <a href="/kontak" class="button">
            kontak
        </a>
    </div>
</div>

<footer>
    &copy; MasMasBiasa.
</footer>

</body> </html>