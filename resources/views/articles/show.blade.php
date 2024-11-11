@extends('layouts.admin')

@section('title', 'Article Details')

@section('breadcrumbs', 'Articles')

@section('second-breadcrumb')
    <li>Show</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold">{{ $article->title }}</h2>
                    <hr>

                    <div class="mb-4">
                        <label class="font-weight-bold">Content</label>
                        <div>{!! $article->content !!}</div>
                    </div>

                    <div class="mb-3">
                        <label class="font-weight-bold">Status</label>
                        <span class="badge 
                            @if($article->status == 'DRAFT') 
                                badge-warning 
                            @else 
                                badge-success 
                            @endif">
                            {{ $article->status }}
                        </span>
                    </div>

                    <div class="mb-4">
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">
                            <i class="fa fa-pencil"></i> Edit
                        </a>
                        <form class="d-inline" method="POST" action="{{ route('articles.destroy', $article->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to Articles</a>
                </div>
            </div>
        </div>
    </div>
@endsection
