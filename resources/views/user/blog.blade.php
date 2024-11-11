    @extends('layouts.user')

    @section('header')
        <style>
            #hero{
                background: url('{{ asset('user/images/pwk.jpeg') }}') top center;
                background-repeat: no-repeat;
                width:100%;
                background-size:cover;
            }
            .form-control:focus {
            box-shadow: none;
            }

            .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
            }
            .article{
            line-height: 1.6;
            font-size: 15px;
            } 
        </style>    
    @endsection

    @section('hero')
        <h1>Blog Purwa-Travel</h1>
        <h2>Kumpulan artikel-artikel wisata Purwakarta, Tips travelling, dan kesehatan</h2>
    @endsection

        @section('content')  
        <!--========================== Article Section ============================-->
        <section id="about">
            <div class="container wow fadeIn">

            <div class="row">
                <div class="col-9">

                    @if (empty(request()->segment(2)))
                    @component('user.component.all_blog', ['articles' => $articles])
                    @endcomponent
                @else
                    @component('user.component.single_blog', ['article' => $article])
                    @endcomponent
                @endif

                </div>
            </div>
@endsection