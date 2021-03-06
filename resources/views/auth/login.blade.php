@extends('layouts.app')

@section('content')
<div class="signinPage">
  <div class="titleArea text-center">
    <h2 class="title text-center">kanbanにログイン</h2>
    <div class="m-3">or</div>
    <p class="acountPage_link"><a href="{{ route('register') }}">アカウントを作成</a></p>
  </div>
  <div class="container">
    <form class="new_user" id="new_user" action="{{ route('login') }}" accept-charset="UTF-8" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="user_email">メールアドレス</label><br>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-group">
        <label for="user_password">パスワード</label><br>
        <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </div>
      <div class="form-group text-center">
        <input type="submit" name="commit" value="ログインする" class="loginBtn" data-disable-with="ログインする">
      </div>
    </form>
  </div>
</div>
@endsection