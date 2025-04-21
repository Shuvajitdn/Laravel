
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Result</title>
</head>
<body>
    <h1>Grade Result</h1>
    @if ($marks >= 90 && $marks <= 100)
        <p>Grade: O</p>
    @elseif ($marks >= 60 && $marks < 90)
        <p>Grade: A</p>
        @elseif ($marks >= 45 && $marks < 60)
        <p>Grade: B</p>
        @elseif ($marks >= 33 && $marks < 45)
        <p>Grade: C</p>
        @elseif ($marks >= 0 && $marks < 33)
        <p>Grade: F</p>
    @else
        <p>Invalid marks. Please enter a value between 0 and 100.</p>
    @endif
</body>
</html>