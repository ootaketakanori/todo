@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @endsection
</head>

<body>
    <main>
        @section('content')
        <div class="todo__alert">
            <div class="todo__alert--success">
                Todoを作成しました
            </div>
        </div>

        <div class="todo__content">
            <form class="create-form" action="/todos" method="post">
                @csrf
                <div class="create-form__item">
                    <input class="create-form__item-input" type="text" name="content">
                </div>
                <div class="create-form__button">
                    <button class="create-form__button-submit" type="submit">作成</button>
                </div>
            </form>
            <div class="todo-table">
                <table class="todo-table__inner">
                    <tr class="todo-table__row">
                        <th class="todo-table__header">Todo</th>
                    </tr>
                    @foreach ($todos as $todo)
                    <tr class="todo-table__row">
                        <td class="todo-table__item">
                            <form class="update-form">
                                <div class="update-form__item">
                                    <p class="update-form__item-input">{{ $todo['content'] }}</p>
                                    <input class="update-form__item-input" type="text" name="content" value="test">
                                </div>
                                <div class="update-form__button">
                                    <button class="update-form__button-submit" type="submit">更新</button>
                                </div>
                            </form>
                        </td>
                        <td class="todo-table__item">
                            <form class="delete-form">
                                <div class="delete-form__button">
                                    <button class="delete-form__button-submit" type="submit">削除</button>
                                </div>
                            </form>
                        </td>
                    </tr>

                </table>
            </div>
        </div>
        @endsection
    </main>

</html>