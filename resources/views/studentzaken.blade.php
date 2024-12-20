<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestanden Beheer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
            color: #ffffff;
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
            left: 78%;
            transform: translateX(-50%);
        }

        .zaken-text {
            font-size: 20px; 
            font-weight: bold; 
            color: #6C6868; 
            margin-right: 15px;
            cursor: pointer; /* Makes the text clickable */
        }

        /* Remove the underline from links */
        a {
            text-decoration: none;
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

        .file-manager-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .file-manager-header h3 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .file-list {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .file-item {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
            background-color: #f9f9f9;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            grid-gap: 10px;
        }

        .file-item .item-label {
            font-weight: bold;
        }

        .status {
            font-weight: bold;
            color: #28a745; /* Green for accepted */
        }

        .status-in-progress {
            font-weight: bold;
            color: #ffc107; /* Yellow for in progress */
        }

        .status-completed {
            font-weight: bold;
            color: #1d8348; /* Darker green for completed */
        }

        .status-rejected {
            font-weight: bold;
            color: #dc3545; /* Red for rejected */
        }

        .file-upload-btn {
            background: linear-gradient(to right, #62AFB8, #7AB361);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 16px;
            width: 200px;
            margin-top: 20px;
        }

        .file-item-header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
        }

        .company-name {
            display: flex;
            align-items: center;
        }

        .company-name img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .status-icon {
            margin-right: 10px;
        }

        .status-completed-icon {
            color: #1d8348; /* Darker green for the icon */
            margin-right: 8px; /* Space between icon and text */
        }
    </style>
</head>
<body>

<!-- Header Section -->
<div class="header">
    <div class="stadium">
        <!-- BPV Gegevens text is now clickable without underline -->
        <a href="bpv-gegevensblad.blade.php" class="zaken-text">BPV Gegevens</a>
        <div class="dot"></div>
        <span class="zaken-text">Zaken</span>
    </div>
</div>

<!-- File Manager Section -->
<div class="container">
    <div class="file-manager-header">   
    </div>

    <!-- File List -->
    <div class="file-list">
        <!-- Header Row -->
        <div class="file-item-header">
            <div>Naam</div>
            <div>Bedrijf</div>
            <div>Status</div>
            <div>Looptijd</div>
            <div>Opleverdatum</div>
        </div>

        <!-- File Item 1 -->
        <div class="file-item">
            <div>Stage 1</div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf A</span></div>
            <div><span class="status-in-progress"><i class="fas fa-clock status-icon"></i>In Behandeling</span></div>
            <div>2024-12-01</div>
            <div>2025-01-01</div>
        </div>

        <!-- File Item 2 -->
        <div class="file-item">
            <div>Stage 2</div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf B</span></div>
            <div><span class="status"><i class="fas fa-check-circle status-icon"></i>Geaccepteerd</span></div>
            <div>2024-11-15</div>
            <div>2024-12-15</div>
        </div>

        <!-- File Item 3 -->
        <div class="file-item">
            <div>Stage 3</div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf C</span></div>
            <div><span class="status-completed"><i class="fas fa-check-circle status-completed-icon"></i>Afgerond</span></div>
            <div>2024-10-01</div>
            <div>2024-11-01</div>
        </div>

        <!-- File Item 4 -->
        <div class="file-item">
            <div>Stage 4</div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf D</span></div>
            <div><span class="status-rejected"><i class="fas fa-times-circle status-icon"></i>Afgekeurd</span></div>
            <div>2024-09-15</div>
            <div>2024-10-15</div>
        </div>
    </div>
</div>

<script>
    // Optional JavaScript for additional interactions can be added here (e.g., uploading files)
</script>

</body>
</html>
