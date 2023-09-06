<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Reservation</title>
    <style>
        body {
            background-image: url('https://i.pinimg.com/736x/f5/5d/91/f55d91513b2aa3df6b2575f1ae0add88.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-image: url('https://i.pinimg.com/564x/bd/cb/6b/bdcb6b15dae7019a33ab852931a9d8b0.jpg');
            background-size: cover;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }
        .header {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #da77cc; /* Dusky Pink Color */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Cursive', cursive; /* Use a modern font */
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .message {
            color: #786376;
            margin-top: 5px;
        }
        .submit-button {
            background-color: #ff6beb;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin: 0 auto; 
            font-weight: bold;
            font-size: 18px;
        }
        .submit-button:hover {
            background-color: #da89cfc8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Be Your Own Kind of Beautiful, <br>Secure Your Appointment Today!</div>
        <form method="POST" action="{{ route('reservations.store.res.form') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" value="{{ $reservation->first_name ?? '' }}" required>
                @error('first_name')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" value="{{ $reservation->last_name ?? '' }}" required>
                @error('last_name')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ $reservation->email ?? '' }}" required>
                @error('email')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tel_number">Phone Number</label>
                <input type="text" id="tel_number" name="tel_number" value="{{ $reservation->tel_number ?? '' }}" required>
                @error('tel_number')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="res_date">Reservation Date</label>
                <input type="datetime-local" id="res_date" name="res_date" min="{{ $min_date->format('Y-m-d\TH:i:s') }}" max="{{ $max_date->format('Y-m-d\TH:i:s') }}" value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}" required style="height: 40px; width: 400px;">
                <span class="message">Please choose the time between 09:00-17:00.</span>
                @error('res_date')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="service_id">Service Selection</label>
                <select id="service_id" name="service_id" required>
                    @foreach ($services as $service)
                        <option value="{{ $service->id }}" @if ($reservation && $service->id == $reservation->service_id) selected @endif>
                            {{ $service->name }}
                        </option>
                    @endforeach
                </select>
                @error('service_id')
                    <div class="message">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="submit-button">Make Reservation</button>
            </div>
        </form>
    </div>
</body>
</html>