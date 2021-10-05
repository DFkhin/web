@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <link rel="stylesheet" href="sStyle.css">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <section class="service">
                        <div class="content-box">
                        <div clas="container">
                            <h1>Our Services</h1>
                            <div class="row service"> 
                            <div class="col-mid-3 text-center">
                                <div class="icon">
                                    <i class="fa fa-paint-brush"></i>  
                                </div>
                                <h3>Product <span> reviews</span></h3>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt delectus harum dolores amet debitis enim sed saepe, 
                                    quasi minus hic ad omnis perspiciatis. Magni pariatur vero velit dolorum, quia provident.</p>
                            </div>
                            <div class="col-mid-3 text-center">
                                <div class="icon">
                                    <i class="fa fa-cogs"></i>  
                                </div>
                                <h3>Web<span> Development</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nostrum unde praesentium dolorum, nemo a iure esse omnis soluta 
                                    sapiente blanditiis numquam asperiores voluptas nam ducimus, similique, fuga magni culpa.</p>
                            </div>
                            <div class="col-mid-3 text-center">
                                <div class="icon">
                                    <i class="fa fa-meetup"></i>  
                                </div>
                                <h3>Social<span> media</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestiae praesentium omnis facilis asperiores consequuntur quod illo. 
                                Libero sed optio architecto necessitatibus eum tenetur pariatur quae, praesentium, dolorem vero rem!</p>
                            </div>
                            <div class="col-mid-3 text-center">
                                <div class="icon">
                                    <i class="fa fa-video-camera"></i>  
                                </div>
                                <h3>Video <span> production</span></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, est incidunt reiciendis in fugit numquam doloribus tenetur officiis
                                    labore, aliquam soluta quod voluptas voluptatibus iusto accusamus, aspernatur deserunt quibusdam quo!</p>
                            </div>
                            </div>
                        </div>
                        </div>
                     </section>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('services.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

