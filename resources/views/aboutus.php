<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Exo+2:700&display=swap" rel="stylesheet">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('https://i.pinimg.com/originals/6f/b3/6a/6fb36addfe3e5bbad9b91036c3b1f811.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        padding: 40px;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 20px;
        font-family: 'Exo 2', sans-serif;
        color: #333;
    }

    p {
        font-size: 18px;
        line-height: 1.6;
        margin-top: 10px;
        color: #333;
        font-family: 'Exo 2', sans-serif;
    }

    .images {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .images img {
        max-width: 45%;
        height: auto;
        border-radius: 50%; /* Slike postaju okrugle */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    }

    .button-container {
        margin-top: 30px;
    }

    .button {
        display: inline-block;
        padding: 15px 30px;
        background-color: palevioletred;
        color: #fff;
        text-decoration: none;
        border-radius: 8px;
        font-weight: bold;
        transition: background-color 0.3s;
        font-family: 'Exo 2', sans-serif;
        margin: 10px;
    }

    .button:hover {
        background-color: gray;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Motivacija za projekt</h1>
    <p>I mi smo korisnice beauty usluga pojedinih salona ljepote i ponekad zakazivanje termina iziskiva 'male brige'.<br />
    Inspirirani time, odlučile smo da će tema našeg projekta biti baš ta, jer bi i u stvarnom životu ova usluga <br />
    olakšala zakazivanje termina za brojne usluge.</p>
    <div class="images">
    <img src='ANA.jpg' alt="Ana" width="300" height="250"/>
    <img src='IVA.jpg' alt="Iva" width="300" height="250"/>
    
        
    </div>
    <div class="button-container">
        <a href="https://github.com/anaakordic" class="button" target="_blank">GitHub profil (Ana)</a>
        <a href="https://github.com/IvaPetrovicc" class="button" target="_blank">GitHub profil (Iva)</a><br>
        <a href="https://drive.google.com/file/d/11C3SbHdiEuP5MnXibNYjccBbwA_hp3ta/view?usp=drivesdk" target="_blank" class="button">Vizija</a>
    </div>
</div>
</body>
</html>
