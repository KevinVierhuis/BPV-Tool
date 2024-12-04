<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BPV Gegevensblad</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #62AFB8, #7AB361);
            background-image: url('/images/OsirisAchtergrond.png'); 
            background-size: cover; 
            background-position: center center;
            background-attachment: fixed; 
            height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header {
            margin-top: 20px;
            text-align: center;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stadium {
            background: #F5F5F5;
            width: 300px; 
            height: 60px;
            border-radius: 30px;
            display: flex; 
            justify-content: space-between; 
            align-items: center; 
            font-size: 20px;
            color: white;
            font-weight: bold;
            position: relative;
            padding: 0 20px; /* Padding for spacing inside the container */
        }

        .dot {
            width: 10px;
            height: 10px;
            background: #E4DFDF;
            border-radius: 50%;
            position: absolute;
            bottom: 3px;
            left: 30%;
            transform: translateX(-50%);
        }

        .zaken-text {
            font-size: 20px; /* Same font size */
            font-weight: bold; /* Same weight */
            color: #6C6868; /* Same color */
            text-decoration: none; /* Remove underline */
            margin-right: 15px; /* Space between the texts */
            cursor: pointer;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            margin-top: 50px;
            z-index: 1;
        }

        .send-btn {
            background: linear-gradient(to right, #62AFB8, #7AB361);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
        }

        .send-btn:hover {
            opacity: 0.9;
        }

        .gender-buttons {
            display: flex;
            gap: 10px;
        }

        .gender-button {
            padding: 10px 188px;
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .gender-button.active {
            background-color: #62AFB8;
            color: white;
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="header">
    <div class="stadium">
        <div class="zaken-text">BPV Gegevens</div>
        <div class="dot"></div>
        <a href="{{ route('studentzaken') }}" class="zaken-text">Zaken</a> <!-- Only Zaken is wrapped in a link -->
    </div>
</div>

<!-- Form Section -->
<div class="container">
    <form action="/submit" method="POST">
        <!-- Bedrijfsgegevens -->
        <div class="form-section">
            <h3>Bedrijfsgegevens</h3>
            <div class="mb-3">
                <label for="bedrijfnaam" class="form-label">Bedrijfsnaam</label>
                <input type="text" class="form-control" id="bedrijfnaam" name="bedrijfnaam" required>
            </div>
            <div class="mb-3">
                <label for="adres" class="form-label">Adres</label>
                <input type="text" class="form-control" id="adres" name="adres" required>
            </div>
            <div class="mb-3">
                <label for="postcode" class="form-label">Postcode</label>
                <input type="text" class="form-control" id="postcode" name="postcode" required>
            </div>
            <div class="mb-3">
                <label for="plaats" class="form-label">Plaats</label>
                <input type="text" class="form-control" id="plaats" name="plaats" required>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="url" class="form-control" id="website" name="website">
            </div>
        </div>

        <!-- BPV Begeleider Gegevens -->
        <div class="form-section">
            <h3>BPV Begeleider Gegevens</h3>
            <div class="gender-buttons" id="bpv-gender-buttons">
                <button type="button" class="gender-button" id="bpv-man">Man</button>
                <button type="button" class="gender-button" id="bpv-vrouw">Vrouw</button>
            </div>
            <div class="mb-3">
                <label for="bpv-voornaam" class="form-label">Voornaam</label>
                <input type="text" class="form-control" id="bpv-voornaam" name="bpv-voornaam" required>
            </div>
            <div class="mb-3">
                <label for="bpv-achternaam" class="form-label">Achternaam</label>
                <input type="text" class="form-control" id="bpv-achternaam" name="bpv-achternaam" required>
            </div>
            <div class="mb-3">
                <label for="bpv-functie" class="form-label">Functie</label>
                <input type="text" class="form-control" id="bpv-functie" name="bpv-functie" required>
            </div>
            <div class="mb-3">
                <label for="bpv-telefoon" class="form-label">Telefoon</label>
                <input type="text" class="form-control" id="bpv-telefoon" name="bpv-telefoon" required>
            </div>
            <div class="mb-3">
                <label for="bpv-email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="bpv-email" name="bpv-email" required>
            </div>
        </div>

        <!-- Leerling Gegevens -->
        <div class="form-section">
            <h3>Student Gegevens</h3>
            <div class="gender-buttons" id="leerling-gender-buttons">
                <button type="button" class="gender-button" id="leerling-man">Man</button>
                <button type="button" class="gender-button" id="leerling-vrouw">Vrouw</button>
            </div>
            <div class="mb-3">
                <label for="leerling-voornaam" class="form-label">Voornaam</label>
                <input type="text" class="form-control" id="leerling-voornaam" name="leerling-voornaam" required>
            </div>
            <div class="mb-3">
                <label for="leerling-achternaam" class="form-label">Achternaam</label>
                <input type="text" class="form-control" id="leerling-achternaam" name="leerling-achternaam" required>
            </div>
            <div class="mb-3">
                <label for="leerling-functie" class="form-label">Functie</label>
                <input type="text" class="form-control" id="leerling-functie" name="leerling-functie" required>
            </div>
            <div class="mb-3">
                <label for="leerling-telefoon" class="form-label">Telefoon</label>
                <input type="text" class="form-control" id="leerling-telefoon" name="leerling-telefoon" required>
            </div>
            <div class="mb-3">
                <label for="leerling-email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="leerling-email" name="leerling-email" required>
            </div>
        </div>

        <!-- Submit Button (Centered) -->
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="send-btn">Versturen</button>
        </div>
    </form>
</div>

<script>
    function setupGenderButtons(groupId) {
        const buttons = document.querySelectorAll(`#${groupId} .gender-button`);
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                button.classList.add('active');
            });
        });
    }

    setupGenderButtons('bpv-gender-buttons');
    setupGenderButtons('leerling-gender-buttons');
</script>

</body>
</html>
