<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Multiplication Table</h2>
    <form method="POST" action="/multiplication" style="text-align:center;">
        @csrf
        <label for="num">Enter a number: </label>
        <input type="number" name="num" required>
        <button type="submit">Generate Table</button>
    </form>

    @if(isset($num))
        <h3 style="text-align:center;">Multiplication Table for {{ $num }}</h3>
        <table>
            <tr>
                <th>Multiplier</th>
                <th>Result</th>
            </tr>
            @for($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $num }} x {{ $i }}</td>
                    <td>{{ $num * $i }}</td>
                </tr>
            @endfor
        </table>
    @endif
</body>

</html>