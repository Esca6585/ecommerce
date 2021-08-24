@if($model->parent_id)
    <span class="alert alert-warning">{{  __("Sub Category") }}</span>
@else
    <span class="alert alert-primary">{{  __("Parent Category") }}</span>
@endif