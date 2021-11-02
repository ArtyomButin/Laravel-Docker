@extends('layouts.app')

@section('title')
    Contact
@endsection
@section('content')
    <h1>Contact</h1>

    <form action="{{route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label class="form-label" for="name">Введите имя</label>
            <input class="form-control" type="text" name="name" placeholder="Введите имя" id="name">
        </div>

        <div class="form-group">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="text" name="email" placeholder="Введите Email" id="email">
        </div>

        <div class="form-group">
            <label class="form-label" for="subject">Тема сообщения</label>
            <input class="form-control" type="text" name="subject" placeholder="Тема сообщения" id="subject">
        </div>

        <div class="form-group">
            <label class="form-label" for="message">Сообщение</label>
            <textarea class="form-control" name="message" placeholder="Введите сообщение" id="message"></textarea>
        </div>
        <hr class="my-4">
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
