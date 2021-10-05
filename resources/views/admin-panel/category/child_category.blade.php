<option value="Category {{ $key }}" data-current-label="Category {{ $key }}">{{ $childCategory->name_tm }}</option>
@if ($child_category->categories)
<option value="Category 1" data-current-label="Category 1">
    @foreach ($child_category->categories as $childCategory)
        @include('admin-panel.category.child_category', ['child_category' => $childCategory])
    @endforeach
</option>
@endif
