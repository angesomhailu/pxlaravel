<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>student</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    table,th, td {
        border: 1px solid black;
    }
    th,td {
        padding: 10px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        color:rgb(255, 255, 255);
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>
</head>
<body>
<section>
    <h2>Student List</h2>
     <h1>Welcome to the Student Portal</h1>
    <p>This is a simple Laravel Blade template.</p>
    <div class="search">
        <input type="text" placeholder="Search students...">
        <button>Search</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Enrollment Date</th>
            </tr>
        </thead>
    </table>
    </section>
    </body>
