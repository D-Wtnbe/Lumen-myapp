@extends('app')

@section('content')
  <h1>ユーザー一覧</h1>
  <div class="container">
    <form class="form-inline">
      <div class="form-group">

        <div class="profile_list">
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered">
                <theader>
                  <tr>
                    <th>ID</th>
                    <th>名前</th>
                    <th>ユーザーID</th>
                    <th>メールアドレス</th>
                  </tr>
                </theader>
                <tbody>
                @foreach($users as $user)
                    <tr>
                      <td>
                        <a href="{{ url('/auth/login') }}> {{ Auth::user()->name }} </a>
                      </td>
                      <td> {{ Auth::user()->id }} </td>
                      <td> {{ Auth::user()->userid }} </td>
                      <td> {{ Auth::user()->email }} </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
@endsection
