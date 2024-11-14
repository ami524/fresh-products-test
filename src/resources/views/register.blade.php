@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>商品登録</h2>
    </div>
    <form action="/products" class="form" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">値段</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}" />
                </div>
                <div class="form__error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="file" name="image">
                </div>
                <div class="form__error">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">季節</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <div class="form__input--radio">
                        <input type="radio" name="season" value="1" />
                        <label for="spring" name="season1" value="春">春</label>
                        <input type="radio" name="season" value="2" />
                        <label for="summer" name="season2" value="夏">夏</label>
                        <input type="radio" name="season" value="3" />
                        <label for="autumn" name="season3" value="秋">秋</label>
                        <input type="radio" name="season" value="4" />
                        <label for="winter" name="season4" value="冬">冬</label>
                    </div>
                </div>
                <div class="form__error">
                    @error('season')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品説明</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="explanation" placeholder="商品の説明を入力" value="{{ old('explanation') }}" />
                </div>
                <div class="form__error">
                    @error('explanation')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>


        <div class="form__button">
            <a class="form__button-back" href="">戻る</a>
            <button class="form__button-submit" type="submit">登録</button>
        </div>

    </form>
</div>
@endsection