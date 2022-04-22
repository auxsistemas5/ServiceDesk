@extends ('adminlte::page')
@section('title', 'ADMIN DASHBOARD')
@section("content_header")

    <div class="d-flex justify-content-center">
        <div class="col-md-9">
            <div id="carouselExampleInterval" class="mt-2 carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://siproweb.blob.core.windows.net/contenido/2020/565c3dff-de5d-42e1-91ac-9bffbc8255d4/LOGO%20HMFS.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://www.hmfs.gov.co/wp-content/uploads/2021/08/SLIDER1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>-->
            </div>
        </div>
    </div>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
  <script> console.log('Hi!'); </script>
@stop