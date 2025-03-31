
<!-- Copyright Notice
    // All images and code contained in this project are the sole property of xDesignx (1515147447).
    // They may not be used, copied, or redistributed in any form unless purchased directly from xDesignx (1515147447).
    // Usage is strictly limited to xat.com and requires the explicit approval of the owner.
    // Unauthorized use is prohibited and subject to legal action.

    // Notificare de Copyright
    // Toate imaginile și codul conținut în acest proiect sunt proprietatea exclusivă a lui xDesignx (1515147447).
    // Acestea nu pot fi utilizate, copiate sau redistribuite sub nicio formă decât dacă sunt achiziționate direct de la xDesignx (1515147447).
    // Utilizarea este strict limitată la xat.com și necesită aprobarea explicită a proprietarului.
    // Utilizarea neautorizată este interzisă și se supune acțiunilor legale.

    // Aviso de Direitos Autorais
    // Todas as imagens e códigos contidos neste projeto são propriedade exclusiva de xDesignx (1515147447).
    // Eles não podem ser usados, copiados ou redistribuídos de nenhuma forma, a menos que sejam comprados diretamente de xDesignx (1515147447).
    // O uso é estritamente limitado ao xat.com e requer a aprovação explícita do proprietário.
    // O uso não autorizado é proibido e está sujeito a ação legal.

    // Aviso de Derechos de Autor
    // Todas las imágenes y el código contenidos en este proyecto son propiedad exclusiva de xDesignx (1515147447).
    // No pueden ser utilizados, copiados o redistribuidos de ninguna forma a menos que se compren directamente a xDesignx (1515147447).
    // El uso está estrictamente limitado a xat.com y requiere la aprobación explícita del propietario.
    // El uso no autorizado está prohibido y está sujeto a acciones legales.

    // Avviso di Copyright
    // Tutte le immagini e il codice contenuti in questo progetto sono di proprietà esclusiva di xDesignx (1515147447).
    // Non possono essere utilizzati, copiati o ridistribuiti in alcuna forma a meno che non siano acquistati direttamente da xDesignx (1515147447).
    // L'uso è strettamente limitato a xat.com e richiede l'approvazione esplicita del proprietario.
    // L'uso non autorizzato è proibito ed è soggetto ad azioni legali.

    // Telif Hakkı Bildirimi
    // Bu projedeki tüm resimler ve kodlar xDesignx (1515147447) aittir.
    // xDesignx (1515147447) doğrudan satın alınmadıkça hiçbir şekilde kullanılamaz, kopyalanamaz veya dağıtılamaz.
    // Kullanım, yalnızca xat.com ile sınırlıdır ve sahibin açık onayını gerektirir.
    // İzinsiz kullanım yasaktır ve yasal işlemlere tabidir. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile ByDesign</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Stiluri generale */
        body {
            margin: 0;
            padding: 0;
            background-color: #000001; /* Fundal Negru */
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
            color: #b1b1b1; /* Albastru deschis */
            text-shadow: 0 0 10px rgba(177, 177, 177, 0.7); /* Glow albastru */
            font-size: 3em;
            font-weight: bold;
            background: linear-gradient(#383838, #b1b1b1, #ffffff); /* Tonuri de albastru */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textGlow 1.5s ease-in-out infinite;
        }

        @keyframes textGlow {
            0% { text-shadow: 0 0 5px rgba(177, 177, 177, 0.5); }
            50% { text-shadow: 0 0 15px rgba(177, 177, 177, 1); }
            100% { text-shadow: 0 0 5px rgba(177, 177, 177, 0.5); }
        }

        /* Container profil */
        .profile-container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(25, 25, 25, 0.8); /* Fundal albastru transparent */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(168, 168, 168, 0.7); /* Glow albastru */
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .profile-cover {
            width: 100%;
            height: 150px;
            background: url('') no-repeat center center;
            background-size: cover;
            position: relative;
            border-bottom: 5px solid #141414; /* negru */
        }

        .avatar-container {
            position: absolute;
            top: 50px;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid #000001; /* negru */
            box-shadow: 0 0 15px rgba(168, 168, 168, 0.7); /* Glow albastru */
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
            color: #b1b1b1; /* Albastru deschis */
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
            background-color: #606060; /* grey inchis */
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        .profile-buttons a:hover {
            background-color: #000001; /* Negru închis */
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
            background-color: rgba(96, 96, 96, 0.9); /* Fundal gry */
            border: 1px solid #000001; /* Albastru închis */
            border-radius: 8px;
            padding: 20px;
            flex: 1 1 30%;
            box-shadow: 0 4px 8px rgba(168, 168, 168, 0.7); /* Glow alb */
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            min-width: 280px;
        }

        .info-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(229, 229, 229, 1); /* Glow albastru intens */
        }

        .info-card h3 {
            margin-top: 0;
            color: #191919; /* Albastru deschis */
            font-size: 1.5rem;
        }

        .info-card p {
            margin: 10px 0;
            color: #ffffff; /* Gri deschis */
        }

        .footer-text {
            text-align: center;
            margin-top: auto;
            color: #ffffff; /* Albastru deschis */
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
            <img src="https://i0.xat.com/web_gear/chat/GetImage9.php?s&W=240&H=240&U=https://xatimg.com/image/TTCxdIfiBlcl.png" alt="Avatar" class="avatar">
        </div>
        <div class="profile-details">
            <h1>๖ۣۜBʏDᴇsɪɢɴۣۜ</h1>
            <p>ID: 1515147447</p>
            <p>I'm waiting for you on xat.com/fondos</p>
            <div class="profile-buttons">
                <a href="gif.html" target="_blank">Gifs</a>
                <a href="https://www.flickr.com/groups/pcback-by-xdesignx-id-1515147447/pool/" target="_blank">PcBack</a>
                <a href="https://www.flickr.com/groups/background-by-xdesignx-id-1515147447/pool/" target="_blank">Backgrounds</a>
            </div>
        </div>
        <div class="info-cards">
    <div class="info-card">
        <h3>About me</h3>
        <p>My name is ๖ۣۜBʏDᴇsɪɢɴۣۜ - I specialize in creating avatar GIFs, Pcback, Backgrounds for xat.com.</p>
    </div>
    <div class="info-card">
        <h3>Xat.com</h3>
        <p>I am active on xat.com/fondos</p>
    </div>
    <div class="info-card">
        <h3>Contact</h3>
        <p>You can contact me via private chat at the ID: xDesignx (1515147447).</p>
    </div>
</div>
<div class="footer-text">
    <p>&copy; 2024 xDesignx. All rights reserved.</p>
</div>
</body>
</html>


 
		<script>

    var message = "Stop Copyright ByDesign";

    function clickIE4() {
        if (event.button == 2) {
            alert(message);
            return false;
        }
    }

    function clickNS4(e) {
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3) {
                alert(message);
                return false;
            }
        }
    }

    if (document.layers) {
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
    } else if (document.all && !document.getElementById) {
        document.onmousedown = clickIE4;
    }

    document.oncontextmenu = new Function("alert(message);return false")
</script>
<script>

    function disableselect(e) {
        return false
    }
    function reEnable() {
        return true
    }
    document.onselectstart = new Function("return false")
    if (window.sidebar) {
        document.onmousedown = disableselect
        document.onclick = reEnable
    }
</script>
<script>
        window.oncontextmenu = function () {
            console.log("Right Click Disabled");
            return false;
        }
    </script> 

 
 
 
 
 
 
 
 
 
</script></head><body> </div> </div> <style> </div> </div> <style> <!-- body { background:url() repeat-x, url('') }*{ cursor:url(https://xatimg.com/image/qcge7iRhO3IU.png),auto} --> <!-- ByDesign, Stop Copyright --> 




