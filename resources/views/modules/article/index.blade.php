@extends("layouts.app")

@section("title", "Lexenter")

@section("content")

    @include("partials.sidebar")
    @include("partials.header")
    <main class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    	<div class="page-title">
                    		<h1>articles</h1>
                    	</div>
                    	<div class="main-content article-list">
                            <a href="{{route('article.create')}}" class="new-article-btn"><span class="material-icons">post_add</span>Create New Article</a>
                    		<table id="article-list" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Article ID & Title</th>
                                        <th>English</th>
                                        <th>Chinese</th>
                                        <th>Source</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                             @foreach($articles as $article)
                                    <tr>
                                        <td>
                                            <a href="full-article.php">{{$article->article_code}}</a><br>
                                            <a href="full-article.php">{{$article->title_en}}</a>
                                        </td>
                                        <td>{{$article->title_en}}</td>
                                        <td>{{$article->title_cn}}</td>
                                        <td>
                                        	<a href="#">{{$article->source_en}}</a></br>
                                        	<a href="#">{{$article->source_cn}}</a>
                                        </td>
                                        <td>
                                        	<a href="#"><i class="material-icons">close</i></a>
                                            <a href="#"><span class="material-icons">create</span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                    	</div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->
      
@endsection