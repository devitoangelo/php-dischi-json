<?php

// include("api.php");

?>


<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

  <link href='./assets/css/style.css' rel='stylesheet'>
</head>

<body>

  <div id='app'>



    <header class="d-flex">

      <div class="img">
        <img width="200px" src="./assets/img/spotify.png" alt="">
      </div>
    </header>

    <main>



      <div class="container">
        <div class="row">
          <div class="col col_">
            <div class="card card_" v-for='disc in discs'>
              <img :src="disc.poster" width="300px" alt="">
              <div class="card-title">
                <h4>{{disc.title}}</h4>

                <div class="card-body">
                  <p> Author : {{disc.author}}</p>
                  <p> Year : {{disc.year}}</p>
                  <p> Genere : {{disc.genre}}</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>




  </main>



  </div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js' integrity='sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>


  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

  <script src='./assets/js/app.js'></script>
</body>

</html>