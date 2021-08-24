@if($model->parent)
    <a href="{{ route('parentcategory.show', [app()->getlocale(), $model->parent->id ]) }}">{{ $model->parent->{'name_'.app()->getlocale()} }}</a>
@endif
