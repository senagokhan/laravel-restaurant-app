<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LARAVEL & MYSQL DB CONNECTION</title>
</head>
<body>
<div>
    @php
        try {
            if (DB::connection()->getPdo()) {
                echo "Successfully connected to DB and DB Name is: " . DB::connection()->getDatabaseName();
            }
        } catch (\Exception $e) {
            echo "Could not connect to the database. Please check your configuration. Error: " . $e->getMessage();
        }
    @endphp
</div>
</body>
</html>
