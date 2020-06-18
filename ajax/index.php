<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="public/app.css">
  </head>
  <body>
    <header>
      <div class="container">
        <img src="img/logo.png" alt="">
      </div>
    </header>
    <main>
      <div class="container">
        <div id="box-dischi">

        </div>
      </div>
    </main>
    <script id="cd-template" type="text/x-handlebars-template">
      <div class="box-cd">
        <img src="{{copertina}}" alt="">
        <h3>{{titolo}}</h3>
        <p>{{artista}}</p>
        <p>{{genere}}</p>
        <p>{{anno}}</p>
      </div>
    </script>
    <script src="public/app.js" charset="utf-8"></script>
  </body>
</html>
