<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Eigen CSS -->
    <style>
        body {
            background: linear-gradient(to bottom, #62AFB8, #7AB361);
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            margin: 0;
        }
        .header {
            margin-top: 20px; /* Space from the top of the page */
            text-align: center;
        }
        .stadium {
            background: #F5F5F5;
            width: 200px;
            height: 60px;
            border-radius: 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: #6C6868; 
            font-weight: bold;
            position: relative;
            padding-bottom: 10px; /* Ensure enough space for the dot */
        }
        .dot {
            width: 10px;
            height: 10px;
            background: #E4DFDF;
            border-radius: 50%;
            position: absolute;
            bottom: 8px; /* Dot inside and under the text */
        }
        .container {
            background: #F5F5F5;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin-top: 80px; /* Space from the header */
        }
        .content {
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .text-content {
            flex: 1;
        }
        .home-btn {
            background: linear-gradient(to right, #62AFB8, #7AB361);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
            text-decoration: none; /* Remove underline */
        }
        .home-btn:hover {
            opacity: 0.9;
        }
        .image-container {
            flex: 0 0 auto;
            margin-left: 20px;
        }
        .image-container img {
            max-width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header">
        <div class="stadium">
            Home
            <div class="dot"></div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div class="content">
            <!-- Text -->
            <div class="text-content">
                <h2>Goedemorgen, student</h2>
                <p>
                    Deze pagina is speciaal ontworpen om je te helpen je BPV-gegevens te beheren. Vanuit dit startscherm kun je eenvoudig je stage starten en alle benodigde informatie en documenten vinden. Begin nu met het verkennen van je BPV-gegevens en maak een vliegende start met je stage!
                </p>
                <p>
                    Wanneer je op de knop hieronder klikt, word je doorgestuurd naar de pagina waar je het document kunt invullen en je zaken kunt bekijken.
                </p>
                <!-- Button (Link) -->
                <a href="/bpv-gegevensblad.blade.php" class="home-btn">BPV-gegevensblad</a>
            </div>
            <!-- Image -->
            <div class="image-container">
                <img src="/images/homepaginalogo.png" alt="Homepagina Logo">
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
