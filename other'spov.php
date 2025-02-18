"OTHER's POV" 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concern Box</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: black;
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #000000;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        .header {
            background-color: #000000;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .header .nav {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }
        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }
        .separator {
            height: 2px;
            background-color: #FFD700;
            margin: 10px 0;
        }
        .feedback {
            padding: 20px;
            border-bottom: 1px solid #E0E0E0;
            background-color: #D9D9D9; 
            margin: 10px 0;
            border-radius: 5px;
        }
        .feedback:last-child {
            border-bottom: none;
        }
        .username {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .see-more {
            color: #007BFF; 
            cursor: pointer;
        }
        
        .feedback span i {
            margin-right: 10px;
            font-size: 20px;
            color: #FFD700; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Concern Box</h1>
            <div class="nav">
                <a href="#">Compose</a>
                <a href="#">Feedbacks</a>
            </div>
            <div class="separator"></div>
        </div>
        <div class="feedback">
            <span><i class="fas fa-user-circle"></i> Juan Dela Cruz</span>
            <p>Many people are complaining about several issues. First, there are frequent interruptions in the water supply, which are causing inconvenience for families. Second, the number of stray dogs is increasing, posing safety risks to the community. Another complaint is the lack of streetlights at night, which raises safety concerns for residents. Lastly, there is a slow <span class="see-more">See more...</span></p>
        </div>
        <div class="feedback">
            <span><i class="fas fa-user-circle"></i></span>
            <p>Residents are raising concerns about several issues. There are frequent water supply interruptions, increasing stray dogs, and a lack of streetlights at night, which make it unsafe for residents. Additionally, garbage collection has been inconsistent. Improved communication between barangay officials and the community is essential to address these problems.</p>
        </div>
        <div class="feedback">
            <span><i class="fas fa-user-circle"></i></span>
            <p>Residents are concerned about frequent water outages, stray dogs, and insufficient streetlights at night. Garbage collection is also inconsistent. Better communication with barangay officials is needed to resolve these issues.</p>
        </div>
    </div>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
