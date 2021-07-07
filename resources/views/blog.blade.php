@extends('layout')

@section('title')Блог@endsection

@section('main_content')
<h1>Добавить Новость</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/blog/add">
        @csrf
        <input type="title" name="title" id="title" placeholder="Введите название" class="form-control"></br>
        <textarea name="descriptions" id="descriptions" placeholder="Введите описание" class="form-control"></textarea></br>
        <button type="submit" class="btn btn-success">Добавить</button>
    </form>
<h1>Новости</h1>
    @foreach($news as $el)
    <div class="alert alert-warning">
        <h3> {{ $el->title }} </h3>
        <p>{{ $el->descriptions }}</p>

    </div>
    @endforeach
@endsection
