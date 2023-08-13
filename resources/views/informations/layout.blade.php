<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <title>My first project in Laravel</title>
</head>
<body>
    <div id="header">
        <div id="headerContainer">
            <div>
                <a href='/information'  id="logo">LaravelBlade</a>
            </div>
            <div id="search">
                <span id="searchText"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/> </svg>
                  Search</span>
            </div>
        </div>
    </div>
    <div class="container">
        @yield("content")
    </div>
</body>
<footer class="footer">
    <p>Fernandez 2023</p>
</footer>
</html>