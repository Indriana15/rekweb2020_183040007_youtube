<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);


  return json_decode($result, true);
}


$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCkXmLjEr95LVtGuIm3l2dPg&key=AIzaSyClnQphv35iEkH6H0SA8n6sVj8GeVRooGM');


$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];


// Latest Video
// $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBbyM5CTdTub_rByAMj_4kL08s54pTq0c0&channelId=UC_kNMOaCEokMHk--HMzpYoQ&maxResults=1&order=date&part=snippet';
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyClnQphv35iEkH6H0SA8n6sVj8GeVRooGM&channelId=UCkXmLjEr95LVtGuIm3l2dPg&maxResult=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

?>

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>My Portfolio</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">Sandhika Galih</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Portfolio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="jumbotron" id="home">
    <div class="container">
      <div class="text-center">
        <img src="img/sandhika.png" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Sandhika Galih</h1>
        <h3 class="lead">Lecturer | Programmer | Youtuber</h3>
      </div>
    </div>
  </div>


  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
        </div>
        <div class="col-md-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Social Media -->
  <section class="social bg-light" id="social">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Sosial Media</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $youtubeProfilePic; ?>" alt="" width="200" class="rounded-circle img-thumbnail">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subscriber; ?> Subscribers.</p>
              <div class="g-ytsubscribe" data-channelid="UCkXmLjEr95LVtGuIm3l2dPg" data-layout="default" data-count="default"></div>
            </div>
          </div>
          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $latestVideoId; ?>?rel=0" allowfullscreen></iframe>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </section>




  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Portfolio</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/1.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/2.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/3.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/4.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/5.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/portfolio/6.png" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir portfolio -->


  <!-- Contact -->
  <section class="contact bg-light" id="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card bg-primary text-white mb-4 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Me</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <ul class="list-group mb-4">
            <li class="list-group-item">
              <h3>Location</h3>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
            <li class="list-group-item">West Java, Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-6">

          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="phone">No Telepon</label>
              <input type="text" class="form-control" id="phone">
            </div> <select class="form-control">
              <option>-- Pilih Kategori --</option>
              <option>Web Design</option>
              <option>Web Development</option>
            </select>
            <div class="form-group">
              <label for="message">Pesan</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>


  <!-- footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2017 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="http://instagram.com/sandhikagalih">Sandhika Galih</a>.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <a href="http://youtube.com/webprogrammingunpas" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to YouTube</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>