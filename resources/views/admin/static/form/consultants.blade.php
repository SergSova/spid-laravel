<?php

/**
 * @var $model \App\StaticPage
 */
?>
<div class="form-group">
    {{ Form::label("title",'Заголвок') }}
    {{ Form::text("title", NULL, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label("longtitle",'Полный заголовок') }}
    {{ Form::text("longtitle", NULL, ['class'=>'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label("description",'Описание') }}
    {{ Form::textarea("description", NULL, ['class'=>'form-control','rows'=>3]) }}
</div>
<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingDays">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseDays" role="button"
                   aria-expanded="false" aria-controls="collapseDays">
                    Заголовки дней
                </a>
            </h5>
        </div>
        <div id="collapseDays" class="collapse" aria-labelledby="headingDays" data-parent="#accordion">
            <div class="card-body">
                <div class="form-row">
                    @for($i=1;$i<=7;$i++)
                        <div class="col form-group">
                            {{ Form::label("consHeader_{$i}",'День '.$i) }}
                            {{ Form::text("consHeader_{$i}",$model->consHeader_{$i}??NULL, ['class'=>'form-control']) }}
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accordion1">
    <div class="card">
        <div class="card-header" id="headingConsultants">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseConsultants" role="button"
                   aria-expanded="false" aria-controls="collapseConsultants">
                    Консультанты
                </a>
            </h5>
        </div>
        <div id="collapseConsultants" class="collapse" aria-labelledby="headingConsultants" data-parent="#accordion1">
            <div class="card-body">
                <div class="form-row">
                    @forelse($model->consultants as $key=>$consultant)
                        <div class="row consultant-wrap">
                            <div class="col">
                                <div class="form-group ">
                                    {{ Form::label("Consultant[$key][title]",'Консультант') }}
                                    {{ Form::text("Consultant[$key][title]", $consultant->title,['class'=>'form-control']) }}
                                </div>
                                <div class="form-row">
                                    @foreach($consultant->days??[] as $inx=>$day)
                                        <div class="col form-group">
                                            {{ Form::label("Consultant[$key][days][$inx]",'День '.$i) }}
                                            {{ Form::text("Consultant[$key][days][$inx]", $day , ['class'=>'form-control']) }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="index-change col-lg-1">
                                <span class="btn btn-sm btn-info btn-upp">&uarr;</span>
                                <span class="btn btn-sm btn-info btn-down">&darr;</span>
                            </div>
                        </div>
                    @empty
                        <div class="row consultant-wrap">
                            <div class="col">
                                <div class="form-group ">
                                    {{ Form::label("Consultant[0][title]",'Консультант') }}
                                    {{ Form::text("Consultant[0][title]", NULL,['class'=>'form-control']) }}
                                </div>
                                <div class="form-row">
                                    @for($i=1;$i<=7;$i++)
                                        <div class="col form-group">
                                            {{ Form::label("Consultant[0][days][$i]",'День '.$i) }}
                                            {{ Form::text("Consultant[0][days][$i]",NULL, ['class'=>'form-control']) }}
                                        </div>
                                    @endfor
                                </div>
                            </div>
                            <div class="index-change col-lg-1">
                                <span class="btn btn-sm btn-info btn-upp">&uarr;</span>
                                <span class="btn btn-sm btn-info btn-down">&darr;</span>
                            </div>
                        </div>
                    @endforelse
                    <div class="form-group add-consultant btn btn-success">Добавить консультанта</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="accordion2">
    <div class="card">
        <div class="card-header" id="headingList">
            <h5 class="mb-0">
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseList" role="button"
                   aria-expanded="false" aria-controls="collapseList">
                    Список подсказок
                </a>
            </h5>
        </div>
        <div id="collapseList" class="collapse" aria-labelledby="headingList" data-parent="#accordion2">
            <div class="card-body">
                <div class="form-row">
                    @for($i=1;$i<=4;$i++)
                        <div class="col form-group">
                            {{ Form::label("list[$i]",'Текст '.$i) }}
                            {{ Form::textarea("list[$i]",$model->{'list'.$i}??NULL, ['class'=>'form-control','rows'=>8]) }}
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $(function () {
            $('.add-consultant').on('click', function () {
                var consultant = $('.consultant-wrap').first().clone();
                var count = $('.consultant-wrap').length;
                consultant.find('input,textarea').each(function () {
                    var name = $(this).attr('name').replace(/\d+/, count);
                    $(this).attr('name', name);
                    $(this).val(null);
                });
                consultant.insertBefore($(this));
                checkConsult();
            });

            checkConsult();

            function downConsult() {
                var quest = $(this).parents('.row');
                quest.insertAfter(quest.next('.consultant-wrap'));
            }

            function upConsult() {
                var quest = $(this).parents('.row');
                quest.insertBefore(quest.prev('.consultant-wrap'));
            }

            function checkConsult() {
                $('.btn-upp').on('click', downConsult);
                $('.btn-down').on('click', upConsult);
                var count = $('.consultant-wrap').length;
                if (count <= 1) {
                    $('.index-change').each(function (inx) {
                        $(this).fadeOut();
                    });
                } else {
                    $('.index-change').each(function (inx) {
                        $(this).fadeIn();
                    });
                }
            }
        });
    </script>
@endsection