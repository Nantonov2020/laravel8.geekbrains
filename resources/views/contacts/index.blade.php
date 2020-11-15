@extends('layouts.main')


@section('content')
    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title text-center">Наш офис</h2>
                    <div id="gmap" class="contact-map">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5224b871e6926f813ed8538824bda1b554cc3f55e502d9d1ac6915f596b0c0ca&amp;width=100%25&amp;height=439&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Обратная связь</h2>

                        @if (session('success'))
                            <div style="color:red">
                                {{ session('success') }}
                            </div>
                        @endif


                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="{{ route('reviews.store') }}">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" value="{{ old('name') }}" placeholder="Имя">
                                @error('name')
                                <div class="alert alert-danger">
                                    @foreach($errors->get('name') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                <div class="alert alert-danger">
                                    @foreach($errors->get('email') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" value="{{ old('subject') }}" placeholder="Тема">
                                @error('subject')
                                <div class="alert alert-danger">
                                    @foreach($errors->get('subject') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Введите Ваше сообщение">{!! old('subject') !!}</textarea>
                                @error('message')
                                <div class="alert alert-danger">
                                    @foreach($errors->get('message') as $error)
                                        {{ $error }}
                                    @endforeach
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Отправить">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Контактная информация</h2>
                        <address>
                            <p>E-Shopper Inc.</p>
                            <p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
                            <p>Newyork USA</p>
                            <p>Mobile: +2346 17 38 93</p>
                            <p>Email: info@e-shopper.com</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/#contact-page-->
@stop
