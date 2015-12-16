<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    {{ HTML::style('css/stylesheet.css') }}
</head>
<body>

<section class="header"><h1>GRADE 1 SCHOOL ADMISSION</h1><br>
    <h2><em>Ministry of Education.Sri Lanka</em></h2>
</section>
<section class="login">

    <div class="box">Log In</div>

    <form action="#" method="post" enctype="application/x-www-form-urlencoded">
        <input type="text" required title="Username required" placeholder="Username" data-icon="U">
        <input type="password" required title="Password required" placeholder="Password" data-icon="x">
        <div class="olvido">
            <div class="col"><a href="#" title="Ver Carásteres">Register</a></div>
            <div class="col"><a href="#" title="Recuperar Password">Fotgot Password?</a></div>
        </div>
        <a href="#" class="enviar">Submit</a>
    </form>
</section>

</body>
</html>