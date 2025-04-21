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
            margin: 20px 0;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Planet Temperatures</h2>
<p>Converted to: {{ $unit ?? 'Celsius' }}</p>

<table>
    <tr>
        <th>Planet</th>
        <th>Average Temperature ({{ $unit == 'fahrenheit' ? '°F' : '°C' }})</th>
    </tr>
    @foreach($planets as $planet)
        <tr>
            <td>{{ $planet['name'] }}</td>
            <td>{{ $planet['temperature'] }}°</td>
        </tr>
    @endforeach
</table>

<p>Convert Temperatures To:</p>
<a href="{{ url('/planet-temperatures/celsius') }}">Celsius (°C)</a> |
<a href="{{ url('/planet-temperatures/fahrenheit') }}">Fahrenheit (°F)</a>

</body>
</html>