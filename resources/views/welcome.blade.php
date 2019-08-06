<!doctype html>
  <html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="utf-8">
      <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- ←① -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}"> <!-- ←② -->
      <title>Laravel-Vue-todo</title>
    </head>
    <body>
      <div id="app"> <!-- ←③ -->
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <br>
            </div>
            <div class="col-xs-6">
              <table class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>タスク名</th>
                    <th>完了ボタン</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for='todo in todos' :key='todo.id'>
                    <td>@{{ todo.id }}</td>
                    <td>@{{ todo.title }}</td>
                    <td><button class="btn btn-primary" @click='del(todo.id)'>完了</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="col-xs-6">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="タスクを入力してください" v-model='todo'>
                <span class="input-group-btn">
                  <button class="btn btn-success" type="button" @click='addTodo'>タスクを登録
</button>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="{{ secure_asset('js/app.js') }}"></script> <!-- ←④ -->
    </body>
</html>