"SPORTS"
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRGY 360</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #141326;
            color: white;
            margin: 0;
            display: flex;
        }
        #sidebar {
            width: 250px;
            background-color: #141326;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            position: relative;
        }
        #sidebar::before {
            content: '';
            position: absolute;
            top: 20px; 
            right: -10px;
            height: calc(100% - 40px); 
            width: 1px; 
            background-color: #E3B53C; 
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.5); 
        }
        #sidebar h1 {
            font-family: 'Vast Shadow';
            font-size: 24px;
            margin-bottom: 30px;
            color: #E3B53C;
        }
        #sidebar a {
            color: #E3B53C;
            text-decoration: none;
            display: flex;
            align-items: center;
            margin: 0px 0;
            font-size: 16px;
            padding: 10px 0; 
            border-bottom: 1px solid rgba(227, 181, 60, 0.5); 
        }
        #sidebar a:last-child {
            border-bottom: none; 
        }
        #sidebar a i {
            margin-right: 10px;
        }
        #main {
            flex-grow: 1;
            padding: 20px;
            background-color: #141326;
        }
        #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        #header h2 {
            font-size: 28px;
            text-align: center;
            color: #E3B53C;
            margin: 0;
        }
        #card {
            background-color: #141326;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center; 
        }
        #card img {
            width: 40%; 
            max-height: 450px; 
            object-fit: cover;  
        }
        .profile-card {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .profile-card img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            border: 2px solid #E3B53C;
            margin-right: 10px;
        }
        .profile-name {
            color: #E3B53C;
            font-size: 18px;
        }
        .event-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px; 
        }
        .event-header img {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div id="sidebar">
    <h1>BRGY 360</h1>
    <div class="profile-card">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABvklEQVR42mJ8/wcAAwVRZBQpDSTrr8F3WQGVDgtDTNABDQxDLBYKUBMpECrADS6CINAkQKIoUJEgYGBiFBwwxAfIYNAFIFgAwkEKhIAJSwVFkACZTy/ywMMAABqAMGJAIAuMTAQAwAYBUBDhepw8fT6AXCJYgBNgD2MgxEgAAAAASUVORK5CYII=" alt="Profile Image" class="profile-image">
        <div class="profile-name">Juan Dela Cruz</div>
    </div>
    <a href="#"><i class="fas fa-home"></i>Dashboard</a>
    <a href="#"><i class="fas fa-chart-bar"></i>Records</a>
    <a href="#"><i class="fas fa-calendar"></i>Calendar</a>
    <a href="#"><i class="fas fa-wallet"></i>Budgets</a>
    <a href="#"><i class="fas fa-futbol"></i>Sports/Events</a>
    <a href="#"><i class="fas fa-inbox"></i>Concern Box</a>
    <a href="#"><i class="fas fa-piggy-bank"></i>Financial Statistics</a>
    <a href="#"><i class="fas fa-cogs"></i>Settings</a>
</div>

<div id="main">
    <div id="header">
        <h2>Sports/Events</h2>   
    </div>

    <div id="card">
        <div class="event-header">
            <i class="fas fa-user-circle" style="font-size: 30px; margin-right: 5px;"></i>
        </div>
        <img src="https://marketplace.canva.com/EAFg0WQverY/2/0/566w/canva-orange%2C-black-and-white-modern-basketball-tournament-flyer-KP5kD9Y6HYM.jpg" alt="Event Image">
    </div>

    <div id="card">
        <div class="event-header">
            <i class="fas fa-user-circle" style="font-size: 30px; margin-right: 5px;"></i>
        </div>
        <img src="https://c8.alamy.com/comp/2EHY41Y/volleyball-sport-match-tournament-poster-vector-volleyball-championship-or-sport-league-cup-competition-and-victory-cup-on-halftone-background-2EHY41Y.jpg" alt="Event Image">
    </div>
</div>

</body>
</html>
