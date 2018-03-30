<?php
/**
 * Created by PhpStorm.
 * User: Chepur
 * Date: 26.03.2018
 * Time: 14:49
 */

/**
 * @var \App\StaticPage $model
 */
?>

<div class="form-group">
    {{ Form::label('title', 'Заголовок') }}
    {{ Form::text('title', null ,['class'=>'form-control']) }}
</div>
<div id="accordionCity">
    <div class="card">
        <div class="card-header" id="headingCity">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseCity" role="button" aria-expanded="false" aria-controls="collapseCity">
                    Города
                </a>
            </h5>
        </div>
        <div id="collapseCity" class="collapse" aria-labelledby="headingCity" data-parent="#accordionCity">
            <div class="card-body">
                @forelse($model->City as $key=>$city)
                    <div class="city-wrap">
                        <div class="row">
                            <div class="form-group">
                                {{ Form::label("City[$key][title]", 'Город') }}
                                {{ Form::text("City[$key][title]", null ,['class'=>'form-control']) }}
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    {{ Form::label("City[$key][lat]", 'lat') }}
                                    {{ Form::text("City[$key][lat]", null ,['class'=>'form-control']) }}
                                </div>
                                <div class="col">
                                    {{ Form::label("City[$key][lng]", 'lng') }}
                                    {{ Form::text("City[$key][lng]", null ,['class'=>'form-control']) }}
                                </div>
                            </div>
                        </div>
                        <div id="accordionCenter{{$key}}">
                            <div class="card">
                                <div class="card-header" id="headingCenter{{$key}}">
                                    <h5 class="mb-0">
                                        <a class="btn btn-primary" data-toggle="collapse" href="#collapseCenter{{$key}}" role="button" aria-expanded="false" aria-controls="collapseCenter{{$key}}">
                                            Центры
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseCenter{{$key}}" class="collapse" aria-labelledby="headingCenter{{$key}}" data-parent="#accordionCenter{{$key}}">
                                    <div class="card-body">
                                        @if(isset($city->centers))
                                            @foreach($city->centers as $c_key=>$center)
                                                <div class="center-wrap">
                                                    <div class="form-row">
                                                        <div class="col form-group">
                                                            {{ Form::label("City[$key][centers][$c_key][title]", 'Название') }}
                                                            {{ Form::text("City[$key][centers][$c_key][title]", null ,['class'=>'form-control']) }}
                                                        </div>
                                                        <div class="col form-group">
                                                            {{ Form::label("City[$key][centers][$c_key][dopInfo]", 'Дополнительное инфо') }}
                                                            {{ Form::text("City[$key][centers][$c_key][dopInfo]", null ,['class'=>'form-control']) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        {{ Form::label("City[$key][centers][$c_key][info]", 'Инфо') }}
                                                        {{ Form::textarea("City[$key][centers][$c_key][info]", null ,['class'=>'form-control','rows'=>2]) }}
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col">
                                                            {{ Form::label("City[$key][centers][$c_key][lat]", 'lat') }}
                                                            {{ Form::text("City[$key][centers][$c_key][lat]", null ,['class'=>'form-control']) }}
                                                        </div>
                                                        <div class="col">
                                                            {{ Form::label("City[$key][centers][$c_key][lng]", 'lng') }}
                                                            {{ Form::text("City[$key][centers][$c_key][lng]", null ,['class'=>'form-control']) }}
                                                        </div>
                                                        <div class="col">
                                                            <a class="btn btn-danger btn-sm btn-remove">X</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            @endforeach
                                        @else
                                            <div class="center-wrap">
                                                <div class="row">
                                                    <div class="col form-group">
                                                        {{ Form::label("City[$key][centers][0][title]", 'Название') }}
                                                        {{ Form::text("City[$key][centers][0][title]", null ,['class'=>'form-control']) }}
                                                    </div>
                                                    <div class="col form-group">
                                                        {{ Form::label("City[$key][centers][0][dopInfo]", 'Дополнительное инфо') }}
                                                        {{ Form::text("City[$key][centers][0][dopInfo]", null ,['class'=>'form-control']) }}
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label("City[$key][centers][0][info]", 'Инфо') }}
                                                    {{ Form::textarea("City[$key][centers][0][info]", null ,['class'=>'form-control','rows'=>2]) }}
                                                </div>
                                                <div class="form-row">
                                                    <div class="col">
                                                        {{ Form::label("City[$key][centers][0][lat]", 'lat') }}
                                                        {{ Form::text("City[$key][centers][0][lat]", null ,['class'=>'form-control']) }}
                                                    </div>
                                                    <div class="col">
                                                        {{ Form::label("City[$key][centers][0][lng]", 'lng') }}
                                                        {{ Form::text("City[$key][centers][0][lng]", null ,['class'=>'form-control']) }}
                                                    </div>
                                                    <div class="col">
                                                        <a class="btn btn-danger btn-sm btn-remove">X</a>
                                                    </div>
                                                </div>

                                            </div>
                                        @endif
                                        <div class="form-group add-center btn btn-success">Добавить центр</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="row city-wrap">
                        <div class="form-group">
                            {{ Form::label("City[0][title]", 'Город') }}
                            {{ Form::text("City[0][title]", null ,['class'=>'form-control']) }}
                        </div>
                        <div class="form-row">
                            <div class="col">
                                {{ Form::label("City[0][lat]", 'lat') }}
                                {{ Form::text("City[0][lat]", null ,['class'=>'form-control']) }}
                            </div>
                            <div class="col">
                                {{ Form::label("City[0][lng]", 'lng') }}
                                {{ Form::text("City[0][lng]", null ,['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>
                    <div id="accordionCenter0">
                        <div class="card">
                            <div class="card-header" id="headingCenter0">
                                <h5 class="mb-0">
                                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseCenter0" role="button" aria-expanded="false" aria-controls="collapseCenter0">
                                        Центры
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseCenter0" class="collapse" aria-labelledby="headingCenter0" data-parent="#accordionCenter0">
                                <div class="card-body">
                                    <div class="center-wrap">
                                        <div class="row">
                                            <div class="col form-group">
                                                {{ Form::label("City[0][centers][0][title]", 'Название') }}
                                                {{ Form::text("City[0][centers][0][title]", null ,['class'=>'form-control']) }}
                                            </div>
                                            <div class="col form-group">
                                                {{ Form::label("City[0][centers][0][dopInfo]", 'Дополнительное инфо') }}
                                                {{ Form::text("City[0][centers][0][dopInfo]", null ,['class'=>'form-control']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label("City[0][centers][0][info]", 'Инфо') }}
                                            {{ Form::textarea("City[0][centers][0][info]", null ,['class'=>'form-control','rows'=>2]) }}
                                        </div>

                                        <div class="form-row">
                                            <div class="col">
                                                {{ Form::label("City[0][centers][0][lat]", 'lat') }}
                                                {{ Form::text("City[0][centers][0][lat]", null ,['class'=>'form-control']) }}
                                            </div>
                                            <div class="col">
                                                {{ Form::label("City[0][centers][0][lng]", 'lng') }}
                                                {{ Form::text("City[0][centers][0][lng]", null ,['class'=>'form-control']) }}
                                            </div>
                                            <div class="col">
                                                <a class="btn btn-danger btn-sm btn-remove">X</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group add-center btn btn-success">Добавить центр</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
                <div class="form-group add-city btn btn-success">Добавить город</div>
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script>
        $(function () {
            function changeAttr(_this, count, name, att, center) {
                if (center === undefined) {
                    center = false;
                }
                var reg = /(.+\[\d+\]\[centers\]\[)(\d+)(\])/;
                var change = "$1" + count + "$3";

                if (!center || name === 'a' || name === 'div') {
                    reg = /\d+/;
                    change = count;
                }
                att.forEach(function (item) {
                    if (_this.attr(item)) {
                        var name1 = _this.attr(item).replace(reg, change);
                        _this.attr(item, name1);
                    }
                });
            }
            function removeCenter() {
                if (confirm('Удалить центр?'))
                    $(this).parents('.center-wrap').remove();
            }
            $('.btn-remove').on('click', removeCenter);

            $('.add-city').on('click', function () {
                var city_wrappers = $('.city-wrap');
                var city = city_wrappers.first().clone();
                var count = city_wrappers.length;
                city.find('input,label,textarea,div,a').each(function () {
                    var _this = $(this);
                    changeAttr(_this, count, this.localName, [
                        'name',
                        'id',
                        'for',
                        'href',
                        'aria-labelledby',
                        'data-parent',
                        'aria-controls'
                    ]);
                    _this.val(null);
                });

                var center = city.find('.center-wrap').first().clone();
                clearCenter(center, 0);
                city.find('.card-body').html(center);
                var addCenter1 = $('.add-center').first().clone();
                addCenter1.appendTo(city.find('.card-body'));
                city.insertBefore($(this));

                city.find('.add-center').bind('click', addCenter);
            });

            function clearCenter(center, count) {
                center.find('input,label,textarea,a,div').each(function () {
                    var _this = $(this);
                    changeAttr(_this, count, this.localName, [
                        'name',
                        'id',
                        'for',
                        'href',
                        'aria-labelledby',
                        'data-parent',
                        'aria-controls'
                    ], true);
                    _this.val(null);
                });
                center.find('.btn-remove').on('click', removeCenter);
            }

            function addCenter() {
                var wrapper = $(this).parent().find('.center-wrap');
                var center = wrapper.first().clone();
                var count = wrapper.length;

                clearCenter(center, count);
                center.insertBefore($(this));
            }

            $('.add-center').on('click', addCenter);

        });
    </script>
@endsection