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
                    		<h1>change password</h1>
                    	</div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="password-field">
                                <form method="POST" action="{{ route('password.update') }}">
                        @csrf                                        <input type="password" name="old-password" placeholder="Old password">
                                        <input type="password" name="new-password" placeholder="New password">
                                        <button type="submit">save</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
      <!-- page-content" -->
@endsection