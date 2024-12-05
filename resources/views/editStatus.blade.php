<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            padding: 0 20px; /* Padding voor ruimte binnen de container */
        }

        .dot {
            width: 10px;
            height: 10px;
            background: #E4DFDF;
            border-radius: 50%;
            position: absolute;
            bottom: 3px;
            left: 25%;
            transform: translateX(-50%);
        }

        .zaken-text {
            font-size: 20px; 
            font-weight: bold; 
            color: #6C6868; 
            margin-right: 25px;
            margin-left: 25px;
            cursor: pointer; /* Maakt de tekst aanklikbaar */
        }   

        /* Verwijder de onderstreping van links */
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
        
        /* Status stijlen */
        .status {
            font-weight: bold;
            color: #28a745; /* Groen voor geaccepteerd */
        }

        .status-in-progress {
            font-weight: bold;
            color: #ffc107; /* Geel voor in behandeling */
        }

        .status-completed {
            font-weight: bold;
            color: #1d8348; /* Donkerder groen voor afgerond */
        }

        .status-rejected {
            font-weight: bold;
            color: #dc3545; /* Rood voor afgekeurd */
        }

        .file-item-header {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
        }

        /* Bedrijfsnaam en logo */
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
            color: #1d8348; 
            margin-right: 8px; 
        }

        .status-button-container {
            display: flex;
            justify-content: space-around;
        }

        .status-button {
            font-size: 24px;
            padding: 10px;
            border: none;
            background-color: transparent;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        .status-button:hover {
            transform: scale(1.1);
        }

        .status-button.selected {
            color: #28a745;
        }

        .status-button.in-progress {
            color: #ffc107;
        }

        .status-button.completed {
            color: #1d8348;
        }

        .status-button.rejected {
            color: #dc3545;
        }

    </style>
</head>
<body>

<!-- Header Sectie -->
<div class="header">
    <div class="stadium">
        <div class="dot"></div>
        <span class="zaken-text">Zaken</span>
        <a href="{{ route('docentzaken') }}" class="zaken-text">Studenten</a>
    </div>
</div>

<!-- Bestandsbeheer Sectie -->
<div class="container">
    <div class="file-manager-header">
    </div>

    <!-- Bestandslijst -->
    <div class="file-list">
        <!-- Header Rij -->
        <div class="file-item-header">
            <div>Naam</div>
            <div>Bedrijf</div>
            <div>Status</div>
            <div>Looptijd</div>
            <div>Opleverdatum</div>
        </div>

        <!-- Informatie stages voor student -->
        <div class="file-item">
            <div><a href="#editStatus1" data-bs-toggle="modal" data-bs-target="#editStatusModal1">Stage 1</a></div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf A</span></div>
            <div><span class="status-in-progress"><i class="fas fa-clock status-icon"></i>In Behandeling</span></div>
            <div>2024-12-01</div>
            <div>2025-01-01</div>
        </div>
        <div class="file-item">
            <div><a href="#editStatus2" data-bs-toggle="modal" data-bs-target="#editStatusModal2">Stage 2</a></div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf B</span></div>
            <div><span class="status-completed"><i class="fas fa-check-circle status-icon"></i>Afgerond</span></div>
            <div>2024-11-15</div>
            <div>2025-01-10</div>
        </div>
        <div class="file-item">
            <div><a href="#editStatus3" data-bs-toggle="modal" data-bs-target="#editStatusModal3">Stage 3</a></div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf C</span></div>
            <div><span class="status-rejected"><i class="fas fa-times-circle status-icon"></i>Afgekeurd</span></div>
            <div>2024-09-20</div>
            <div>2025-03-01</div>
        </div>
        <div class="file-item">
            <div><a href="#editStatus4" data-bs-toggle="modal" data-bs-target="#editStatusModal4">Stage 4</a></div>
            <div class="company-name"><img src="https://via.placeholder.com/30" alt="Profile Image"><span>Bedrijf D</span></div>
            <div><span class="status-in-progress"><i class="fas fa-clock status-icon"></i>In Behandeling</span></div>
            <div>2024-12-05</div>
            <div>2025-01-15</div>
        </div>
    </div>
</div>

<!-- Modals voor status bewerken -->
<div class="modal fade" id="editStatusModal1" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Status bewerken voor Student 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateStatus', ['student' => 1]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="status-button-container">
                            <button type="button" class="status-button in-progress" data-status="In Behandeling">
                                <i class="fas fa-clock"></i>
                            </button>
                            <button type="button" class="status-button completed" data-status="Afgerond">
                                <i class="fas fa-check-circle"></i>
                            </button>
                            <button type="button" class="status-button rejected" data-status="Afgekeurd">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="hidden" name="status" id="status1" value="In Behandeling" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editStatusModal2" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Status bewerken voor Student 2</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateStatus', ['student' => 2]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="status-button-container">
                            <button type="button" class="status-button in-progress" data-status="In Behandeling">
                                <i class="fas fa-clock"></i>
                            </button>
                            <button type="button" class="status-button completed" data-status="Afgerond">
                                <i class="fas fa-check-circle"></i>
                            </button>
                            <button type="button" class="status-button rejected" data-status="Afgekeurd">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="hidden" name="status" id="status2" value="In Behandeling" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Status</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editStatusModal3" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel">Status bewerken voor Student 3</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateStatus', ['student' => 3]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="status-button-container">
                            <button type="button" class="status-button in-progress" data-status="In Behandeling">
                                <i class="fas fa-clock"></i>
                            </button>
                            <button type="button" class="status-button completed" data-status="Afgerond">
                                <i class="fas fa-check-circle"></i>
                            </button>
                            <button type="button" class="status-button rejected" data-status="Afgekeurd">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="hidden" name="status" id="status3" value="In Behandeling" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Status</button>
                </form>
            </div>  
        </div>
    </div>
</div>

<div class="modal fade" id="editStatusModal4" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStatusModalLabel4">Status bewerken voor Student 4</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateStatus', ['student' => 4]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <div class="status-button-container">
                            <button type="button" class="status-button in-progress" data-status="In Behandeling">
                                <i class="fas fa-clock"></i>
                            </button>
                            <button type="button" class="status-button completed" data-status="Afgerond">
                                <i class="fas fa-check-circle"></i>
                            </button>
                            <button type="button" class="status-button rejected" data-status="Afgekeurd">
                                <i class="fas fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="hidden" name="status" id="status4" value="In Behandeling" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update Status</button>
                </form>
            </div>  
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>