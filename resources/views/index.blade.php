<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Temperatures</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Planet Temperatures</h2>
        <h3>Converted to: {{ ucfirst($unit) }}</h3>
        <table>
            <tr>
                <th>Planet</th>
                <th>Average Temperature ({{ $unit === 'celsius' ? '°C' : '°F' }})</th>
            </tr>
            @foreach($planets as $planet)
                <tr>
                    <td>{{ $planet['name'] }}</td>
                    <td>{{ $planet['temperature'] }}°</td>
                </tr>
            @endforeach
        </table>
        <div>
            <h3>Convert Temperatures To:</h3>
            <a href="{{ route('planet.index', ['unit' => 'celsius']) }}">Celsius (°C)</a> |
            <a href="{{ route('planet.index', ['unit' => 'fahrenheit']) }}">Fahrenheit (°F)</a>
        </div>
    </div>
</body>
</html>