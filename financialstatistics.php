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
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            padding: 10px; 
            box-sizing: border-box; 
        }
        #container {
            display: flex;
            flex-direction: column; 
            align-items: center; 
            width: 100%; 
            max-width: 600px; 
            overflow-y: auto; 
            overflow-x: hidden; 
            height: 80vh; 
        }
        #header {
            margin-bottom: 15px; 
            text-align: center; 
        }
        #header h2 {
            font-size: 24px; 
            color: #E3B53C;
            margin: 0;
        }
        .slides {
            display: flex; 
            flex-direction: column; 
            width: 100%;
        }
        .card {
            background-color: #1e1e2f; 
            padding: 15px; 
            border-radius: 8px;
            margin-bottom: 15px; 
            text-align: center; 
            min-width: 100%; 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2); 
        }
        .card img {
            width: 100%; 
            height: auto;
            max-height: 200px; 
            object-fit: fill; 
            border-radius: 8px; 
        }
        .event-header {
            display: flex; 
            align-items: center;
            margin-bottom: 8px; 
        }
        .event-header i {
            font-size: 20px;
            margin-right: 5px; 
        }
    </style>
</head>
<body>

<div id="container">
    <div id="header">
        <h2>Financial Statistics</h2>   
    </div>

    <div class="slides">
        <div class="card">
            <div class="event-header">
                <i class="fas fa-user-circle"></i>
                <span>Juan Dela Cruz</span>
            </div>
            <p>BRGY financial track.</p>
            <img src="1.png" alt="Financial Track Image">
        </div>

        <div class="card">
            <div class="event-header">
                <i class="fas fa-user-circle"></i>
                <span>Juan Dela Cruz</span>
            </div>
            <p>Budgets of BRGY overtime.</p>
            <img src="2.png" alt="Budgets Image">
        </div>

        <div class="card">
            <div class="event-header">
                <i class="fas fa-user-circle"></i>
                <span>Juan Dela Cruz</span>
            </div>
            <p>Remaining Budget.</p>
            <img src="3.png" alt="Financial Track Image">
        </div>
    </div>
</div>

</body>
</html>