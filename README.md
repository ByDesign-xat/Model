
<!-- Copyright Notice
    // All images and code contained in this project are the sole property of Seph (10241024).
    // They may not be used, copied, or redistributed in any form unless purchased directly from Seph (10241024).
    // Usage is strictly limited to xat.com and requires the explicit approval of the owner.
    // Unauthorized use is prohibited and subject to legal action.

    // Notificare de Copyright
    // Toate imaginile și codul conținut în acest proiect sunt proprietatea exclusivă a lui Seph (10241024).
    // Acestea nu pot fi utilizate, copiate sau redistribuite sub nicio formă decât dacă sunt achiziționate direct de la Seph (10241024).
    // Utilizarea este strict limitată la xat.com și necesită aprobarea explicită a proprietarului.
    // Utilizarea neautorizată este interzisă și se supune acțiunilor legale.

    // Aviso de Direitos Autorais
    // Todas as imagens e códigos contidos neste projeto são propriedade exclusiva de Seph (10241024).
    // Eles não podem ser usados, copiados ou redistribuídos de nenhuma forma, a menos que sejam comprados diretamente de Seph (10241024).
    // O uso é estritamente limitado ao xat.com e requer a aprovação explícita do proprietário.
    // O uso não autorizado é proibido e está sujeito a ação legal.

    // Aviso de Derechos de Autor
    // Todas las imágenes y el código contenidos en este proyecto son propiedad exclusiva de Seph (10241024).
    // No pueden ser utilizados, copiados o redistribuidos de ninguna forma a menos que se compren directamente a Seph (10241024).
    // El uso está estrictamente limitado a xat.com y requiere la aprobación explícita del propietario.
    // El uso no autorizado está prohibido y está sujeto a acciones legales.

    // Avviso di Copyright
    // Tutte le immagini e il codice contenuti in questo progetto sono di proprietà esclusiva di Seph (10241024).
    // Non possono essere utilizzati, copiati o ridistribuiti in alcuna forma a meno che non siano acquistati direttamente da Seph (10241024).
    // L'uso è strettamente limitato a xat.com e richiede l'approvazione esplicita del proprietario.
    // L'uso non autorizzato è proibito ed è soggetto ad azioni legali.

    // Telif Hakkı Bildirimi
    // Bu projedeki tüm resimler ve kodlar Seph'e (10241024) aittir.
    // Seph'ten (10241024) doğrudan satın alınmadıkça hiçbir şekilde kullanılamaz, kopyalanamaz veya dağıtılamaz.
    // Kullanım, yalnızca xat.com ile sınırlıdır ve sahibin açık onayını gerektirir.
    // İzinsiz kullanım yasaktır ve yasal işlemlere tabidir. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Stiluri generale */
        body {
            margin: 0;
            padding: 0;
            background-color: #0c1575; /* Fundal albastru închis */
            background-size: cover;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
        }

        /* Stiluri pentru titlu */
        h1 {
            margin: 0;
            color: #1E90FF; /* Albastru deschis */
            text-shadow: 0 0 10px rgba(30, 144, 255, 0.7); /* Glow albastru */
            font-size: 3em;
            font-weight: bold;
            background: linear-gradient(135deg, #1E90FF, #00008B); /* Tonuri de albastru */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGlow 1.5s ease-in-out infinite;
        }

        @keyframes textGlow {
            0% { text-shadow: 0 0 5px rgba(30, 144, 255, 0.5); }
            50% { text-shadow: 0 0 15px rgba(30, 144, 255, 1); }
            100% { text-shadow: 0 0 5px rgba(30, 144, 255, 0.5); }
        }

        /* Container profil */
        .profile-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(0, 0, 139, 0.8); /* Fundal albastru transparent */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(30, 144, 255, 0.7); /* Glow albastru */
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .profile-cover {
            width: 100%;
            height: 250px;
            background: url('https://xatimg.com/image/xyzf6LAb5pDh.jpg') no-repeat center center;
            background-size: cover;
            position: relative;
            border-bottom: 5px solid #1E90FF; /* Albastru deschis */
        }

        .avatar-container {
            position: absolute;
            top: 150px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #00008B; /* Albastru închis */
            box-shadow: 0 0 15px rgba(30, 144, 255, 0.7); /* Glow albastru */
        }

        .avatar {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-details {
            text-align: center;
            margin-top: 100px;
        }

        .profile-details h1 {
            color: #1E90FF; /* Albastru deschis */
        }

        .profile-details p {
            margin: 10px 0;
            font-size: 1.1rem;
            color: #D3D3D3; /* Gri deschis */
            font-style: italic;
        }

        .profile-buttons {
            margin-top: 20px;
        }

        .profile-buttons a {
            display: inline-block;
            padding: 12px 25px;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #1E90FF; /* Albastru deschis */
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .profile-buttons a:hover {
            background-color: #00008B; /* Albastru închis */
            transform: scale(1.05);
        }

        /* Carduri informații */
        .info-cards {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 30px;
            gap: 20px;
        }

        .info-card {
            background-color: rgba(0, 0, 139, 0.9); /* Fundal albastru */
            border: 1px solid #00008B; /* Albastru închis */
            border-radius: 8px;
            padding: 20px;
            flex: 1 1 30%;
            box-shadow: 0 4px 8px rgba(30, 144, 255, 0.7); /* Glow albastru */
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            min-width: 280px;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(30, 144, 255, 1); /* Glow albastru intens */
        }

        .info-card h3 {
            margin-top: 0;
            color: #1E90FF; /* Albastru deschis */
            font-size: 1.5rem;
        }

        .info-card p {
            margin: 10px 0;
            color: #D3D3D3; /* Gri deschis */
        }

        .footer-text {
            text-align: center;
            margin-top: auto;
            color: #1E90FF; /* Albastru deschis */
            font-size: 1rem;
            font-weight: bold;
        }

        .footer-text p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-cover"></div>
        <div class="avatar-container">
            <img src="https://xatimg.com/image/r4fqtgSEaAyf.jpg" alt="Avatar" class="avatar">
        </div>
        <div class="profile-details">
            <h1>DeDo</h1>
            <p>ID: 1557730119</p>
            <p>Va astept in chat privat pentru design!</p>
            <div class="profile-buttons">
                <a href="indexp.html" target="_blank">Pachete</a>
                <a href="indexgifs.html" target="_blank">Gif</a>
                <a href="indexpcback.html" target="_blank">PcBack</a>
                <a href="indexpstyle.html" target="_blank">PstyleGif</a>
            </div>
        </div>
        <div class="info-cards">
    <div class="info-card">
        <h3>Despre mine</h3>
        <p>Ma numesc Dedo, am 31 de ani și sunt grafic designer. Îmi place muzica și mă specializez în crearea de GIF-uri avatar, PcBack și PstyleGif pe xat.com.</p>
    </div>
    <div class="info-card">
        <h3>Roluri curente</h3>
        <p>Sunt activ pe xat.com, oferindu-mi expertiza în design grafic. Sunt pasionat de personalizarea profilurilor utilizatorilor.</p>
    </div>
    <div class="info-card">
        <h3>Contact</h3>
        <p>Pentru orice colaborări, mă poți contacta în chat privat la ID-ul: Dedo (1557730119).</p>
    </div>
</div>
<div class="footer-text">
    <p>&copy; 2024 Dedo. Toate drepturile rezervate.</p>
</div>
</body>
</html>


