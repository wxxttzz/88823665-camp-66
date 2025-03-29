<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1 class="text-center">Multiplication Table</h1>
    <form method="post" action="{{ url('/multiplication') }}" class="mb-4">
        @csrf
        <div class="mb-3">
            <label for="number" class="form-label">Enter a number:</label>
            <input type="number" id="number" name="number" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate</button>
    </form>

    @if(isset($number))
        <h2 class="text-center">Multiplication Table for {{ $number }}</h2>
        <table class="table table-bordered">
            <thead class="table-dark">
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>