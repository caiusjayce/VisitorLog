<nav class="navbar navbar-expand-lg navbar-dark"  style="background: rgb(84, 62, 28);
background: linear-gradient(90deg, rgba(84, 62, 28, 1) 3%, rgba(177, 89, 123, 1) 100%);">
    <div class="container">

        <a class="navbar-brand" href="index.php">
            Visitor Log
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/visitorlog')}}">Visitor Log</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
