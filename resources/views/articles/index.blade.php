@extends('layouts.admin')

@section('title', 'Articles')

@section('breadcrumbs', 'Overview Articles')

@section('css')
    <style>
        .underline:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- Button Create --}}
                    <div class="mb-5 text-right">
                        <a href="{{ route('articles.create') }}" class="btn btn-sm btn-success"> <i class="fa fa-plus"></i> Create</a>
                    </div>

                    {{-- Display Filter --}}
                    <div class="row mb-3">
                        <div class="col-sm-7">
                            <ul class="nav nav-tabs ">
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == NULL ? 'active' : '' }}" href="{{ route('articles.index') }}">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == 'publish' ? 'active' : '' }}" href="{{ route('articles.index', ['status' => 'publish']) }}">Publish</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link p-2 px-3 {{ Request::get('status') == 'draft' ? 'active' : '' }}" href="{{ route('articles.index', ['status' => 'draft']) }}">Draft</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5">
                            <form action="{{ route('articles.index') }}">
                                <div class="input-group">
                                    <input name="keyword" type="text" value="{{ Request::get('keyword') }}" class="form-control" placeholder="Filter by title">
                                    <div class="input-group-append">
                                        <input type="submit" value="Filter" class="btn btn-info">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    {{-- Alert --}}
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    @endif

                    {{-- Table --}}
                    <table class="table">
                        <thead class="text-light" style="background-color:#33b751 !important">
                            <tr>
                                <th width="12px">No</th>
                                <th class="text-center">Article Title</th>
                                <th width="150px"></th>
                                <th width="88px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $index => $article)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        <a href="{{ route('articles.edit', [$article['id']]) }}" style="color:#00838f;" class="underline">
                                            <span class="d-block">{{ $article->title }}</span>
                                        </a>
                                    </td>
                                    <td class="text-right pr-4">
                                        @if ($article->status == 'DRAFT')
                                            <span class="font-italic text-danger">Draft</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('articles.edit', [$article['id']]) }}" class="btn btn-sm btn-warning text-light" title="Edit"><i class="fa fa-pencil"></i></a>
                                        <form class="d-inline" method="POST" action="{{ route('articles.destroy', [$article->id]) }}" onsubmit="return confirm('Are you sure you want to delete this article?');">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            {{$articles->appends(Request::all())->links()}}
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
