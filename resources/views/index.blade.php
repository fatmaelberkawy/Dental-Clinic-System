<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  
   <style>
    p{
        font-size: 15px;
    }
    a{
        font-size:15px;
    }
   </style>
 
   
   <style>
        table {
            border-collapse: collapse;
        }
        table, td, th {
            border: 1.5px solid black;
            padding: 15px;
            font-size: 15px;
            margin-left: 250px;
            margin-bottom: 4px;
        }
    </style>


<style>
    form{
    
    background: #fff;
    border: var(--border);
    box-shadow: var(--box-shadow);
    text-align: center;
    padding: 2rem;
    border-radius: .5rem;
    margin:1rem 40rem ;
}
form label {
    display: flex;
    margin-bottom: 5px;
    font-size: 10px;
   }
   form input, form textarea {
    display: block;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #16a085;
    border-radius: 5px;
    width: 100%;
   }
   
     form input[type="submit"] {
    background-color: #16a085;
    color: #fff;
    border: none;
    padding: 20px 20px;
    border-radius: 5px;
    cursor: pointer;
   }
   
    form input[type="submit"]:hover {
    background-color: #16a085;
   }
</style>

    


</head>
<body>
    <h1 class="heading"> <span>search</span> </h1>
    
    <form method="get" action="{{route('search')}}">
        <!-- name -->
        <label for="name">name:</label> <br>
        <input type="text" name="name" id="name" value="{{request('name')}}"> <br>
        <!-- date -->
        <label for="date">date:</label> <br>
        <input type="date" name="date" id="date" value="{{request('date')}}"><br>
        <!-- Doctor_Name-->
        <label for="Doctor_Name">Doctor_Name:</label> <br>
        <input type="Doctor_Name" name="Doctor_Name" id="Doctor_Name"  value="{{request('Doctor_Name')}}"><br>
        <!-- Submit button -->
        <input type="submit" value="Search" >
        
    </form>
    
    <a href={{ route('index')}}>clear search</a>


    <h1 class="heading"> <span>patients </span> data </h1>
    <table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Doctor_Name</th>
        <th>Date</th>
        <th>Profile</th>
    </tr>
    
    @foreach ($patients as $patient)
    <tr>
        <td>{{ $patient->id }}</td>
        <td> {{$patient->name}}</td>
        <td> {{$patient->phone}}</td>
         <td> {{$patient->email}}</td>
         <td> {{$patient->Doctor_Name}}</td>
         <td> {{$patient->date}}</td>
         <td><a href="{{route('person',['id'=>$patient->id])}}">go to profile ya koko</a></td>
   

    </tr>
       
        
    @endforeach
</table>
<p><a href="{{route('showAddPatient')}}">Add new patient</a></p>
</body>
</html>