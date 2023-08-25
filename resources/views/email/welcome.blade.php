<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2>Welcome to the site {{$user['name']}}</h2>
<br/>

Your registered email-id is <h3 class="text-dark">{{$user['email']}}</h3> 


<br>
your Password will be  <h4 class="text-success"> {{$request['password']}}</h4> 
<br>

Plz Verifty Your Account <button class="btn btn-primary"> <a href="{{url('/')}}"> Visit Site</a></button>
    </div>
 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>