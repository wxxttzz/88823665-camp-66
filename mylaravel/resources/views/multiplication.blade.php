<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="{{ url('/multiplication') }}">
        @csrf
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Generate</button>
    </form>

    @if(isset($number))
        <h2>Multiplication Table for {{ $number }}</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Multiplier</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                @for($i = 1; $i <= 12; $i++)
                    <tr>
                        <td>{{ $number }} x {{ $i }}</td>
                        <td>{{ $number * $i }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
    @endif
</body>
</html>