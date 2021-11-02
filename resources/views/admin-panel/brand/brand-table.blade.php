<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Img') }}</th>
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($brands as $brand)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $brand->name }}</td>
                <td><img src="{{ asset($brand->image) }}" alt="{{ $brand->image }}" width="50px"></td>
                <td>
                    <a href="{{ route('category.show', [ app()->getlocale(), 'all', $brand->category_id ] ) }}" class="text-primary">
                        {{ $brand->category->{ 'name_' . app()->getlocale() } }}
                    </a>
                </td>
                <td>@include('admin-panel.brand.brand-action', [ $brand ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $brands->links('layouts.pagination') }}
        </div>
    </div>                                
</div>
