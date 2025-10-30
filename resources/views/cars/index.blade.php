@extends('layouts.app')
@section('head')
    <title>Cars Page</title>
@endsection
@section('styles')
<style>
.search-box{
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}
.search-box input[type="text"]{
    width: 300px;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px 0 0 4px;
    outline: none;
}
.search-box button{
    padding: 10px 15px;
    border: 1px solid #ccc;
    background-color: #5cb85c;
    color: white;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
}
.search-box button:hover{
    background-color: #4cae4c;
}
table {
    width: 100%;
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 10px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
button {
    margin-right: 5px;
    padding: 5px 10px;
    border: none;
    background-color: #007bff;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}
button:hover {
    background-color: #0056b3;
}

</style>

@endsection
@section('content')
<section>
    <div>
        <h3>This is the Cars Page</h3>
    </div>
    <form>
        <div class="search-box">
             <input type="text" placeholder="search here for cars.... " name="search" id="search"/>
             <button>Search</button>
        </div>
    </form>
    <div>
        <table>
            
            <thead>
                <h2>Cars List</h2>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach($cars as $car)
                <tr>
                    <td>{{$car->id}}</td>
                    <td>{{$car->name}}</td>
                    <td>{{$car->model}}</td>
                    <td>{{$car->year}}</td>
                    <td>{{$car->color}}</td>
                    <td>
                        <button>View</button>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection