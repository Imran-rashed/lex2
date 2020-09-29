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
                    		<h1>terms</h1>
                    	</div>
                    	<div class="main-content article-list">
                            <a href="{{route('term.create')}}" class="new-article-btn"><span class="material-icons">post_add</span>Create New Term</a>
                    		<table id="article-list" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Term ID</th>
                                        <th>English Context</th>
                                        <th>Chinese Context</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="#">0000001</a></td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                        	<a href="#"><i class="material-icons">close</i></a>
                                            <a href="#"><span class="material-icons">create</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0000002</a></td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                            <a href="#"><i class="material-icons">close</i></a>
                                            <a href="#"><span class="material-icons">create</span></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">0000003</a></td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                            <a href="#">0000001</a>,
                                            <a href="#">0000002</a>,
                                            <a href="#">0000003</a>,
                                            <a href="#">0000004</a>,
                                            <a href="#">0000005</a>
                                        </td>
                                        <td>
                                            <a href="#"><i class="material-icons">close</i></a>
                                            <a href="#"><span class="material-icons">create</span></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    	</div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->
      
@endsection