@extends('app')

@section('content')

            <div class="container">
                <div class="content">
                   @if (Auth::guest())
                    <div class="title">Lumen</div>
                </div>
            </div>
            @else
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
                        @foreach ($users as $user)
                            <tr>
                              <td> {{ $user->id }} </td>
                              <td>
                                <a href="{{ url('/auth/login') }}> {{ $user->name }} </a>
                              </td>
                              <td> {{ $user->userid }} </td>
                              <td> {{ $user->email }} </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                @endif
        @endsection
