<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Privacy Policy Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('template/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('template/assets/css/pages/privacy/privacy.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body>
    

    <div id="headerWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-12 text-center mb-5">
                    <a href="index.html" class="navbar-brand-privacy">
                    <img alt="logo"  style="height: 100px; width: 200px;"  src="{{asset('template/assets/img/egouv.png')}}">
                    </a>
                </div>
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <h2 class="main-heading">Dossier <b> " @foreach($list as $row) {{$row->e_id}} @endforeach " </b></h2>
                </div>
            </div>
        </div>
    </div>

    <div id="privacyWrapper" class="">
        <div class="privacy-container">
            <div class="privacyContent">

                <div class="d-flex justify-content-between privacy-head">
                    <div class="privacyHeader">
                        <h1>Acte de naissance</h1>
                        <p>     @foreach($list as $row) {{$row->nom_user}} @endforeach </p>
                    </div>

                    <div class="get-privacy-terms align-self-center">
                <form action="/refuser" method="post">  @csrf      <input type="hidden" name="user" value="@foreach($list as $row) {{$row->e_id}} @endforeach">  <button class="btn btn-danger"> Refuser</button>
                </form>       
            </div>

                </div>

                <div class="privacy-content-container">

                  
                    <h5 class="policy-info-ques">@foreach($list as $row) {{$row->nom_user}} @endforeach</h5>
                    <div class="contact-form">
                <form class="" method="post" action="/cree">
                @csrf
                    <h4>à remplir </h4>
                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields mb-4 mb-sm-0">
                            <input type="text" name="nom_user"  class="form-control" value="@foreach($list as $row) {{$row->nom_user}} @endforeach" placeholder="Name" disabled>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                            <input type="text" class="form-control" name="kilo_enfant" value="@foreach($list as $row) {{$row->kilo_enfant}} @endforeach" placeholder="Email" disabled>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                            <input type="text" class="form-control" name="date_naissance" value="@foreach($list as $row) {{$row->date_naissance}} @endforeach" placeholder="Email" disabled>
                        </div>
                    </div>

                
                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                        <input type="text" class="form-control" name="genre" value="@foreach($list as $row) {{$row->genre}} @endforeach" placeholder="Email" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                            <input type="text" class="form-control" name="info_hop" value="@foreach($list as $row) {{$row->info_hop}} @endforeach" placeholder="Email" disabled >

                        </div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                            <input type="text" class="form-control" name="nom_bebe"  placeholder="Nom de l'enfant"  required>

                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12 col-12 input-fields">
                        <input type="text" class="form-control" name="nom_parent"  placeholder="Nom du parents"  required>

                        <input type="hidden" class="form-control" name="amin"   value="@foreach($list as $row) {{$row->e_id}} @endforeach" placeholder="Nom du parents"  >
                        <input type="hidden" class="form-control" name="nom_user"   value="@foreach($list as $row) {{$row->nom_user}} @endforeach" placeholder="Nom du parents"  >
                        <input type="hidden" class="form-control" name="kilo_enfant"   value="@foreach($list as $row) {{$row->kilo_enfant}} @endforeach" placeholder="Nom du parents"  >
                        <input type="hidden" class="form-control" name="date_naissance"   value="@foreach($list as $row) {{$row->date_naissance}} @endforeach" placeholder="Nom du parents"  >
                        <input type="hidden" class="form-control" name="genre"   value="@foreach($list as $row) {{$row->genre}} @endforeach" placeholder="Nom du parents"  >
                        <input type="hidden" class="form-control" name="info_hop"   value="@foreach($list as $row) {{$row->info_hop}} @endforeach" placeholder="Nom du parents"  >
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-sm-left text-center">
                            <button class="btn btn-primary mt-4">Creer</button>
                        </div>
                    </div>
                </form>
                
            </div>
                </div>

            </div>
        </div>
    </div>

    <div id="miniFooterWrapper" class="">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="position-relative">
                        <div class="arrow text-center">
                            <p class="">AFA</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-left text-center copyright align-self-center">
                            <p class="mt-md-0 mt-4 mb-0">2020 &copy; <a target="_blank" href="https://designreset.com/cork">MLGPI</a>.</p>
                        </div>
                        <div class="col-xl-5 mx-auto col-lg-6 col-md-6 site-content-inner text-md-right text-center align-self-center">
                            <p class="mb-0">cite maka al moukarama, commune de boulaos, lot 128</p>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('template/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('template/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script>
        // Scroll To Top
        $(document).on('click', '.arrow', function(event) {
          event.preventDefault();
          var body = $("html, body");
          body.stop().animate({scrollTop:0}, 500, 'swing');
        });
    </script>

</body>
</html>