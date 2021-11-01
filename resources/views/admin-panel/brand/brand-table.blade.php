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
                <td>
                    @if($brand->images)
                        @foreach($brand->images as $image)
                            <img src="{{ asset($image) }}" alt="{{ $image }}" width="50px">
                            @break
                        @endforeach
                    @endif
                </td>
                <td>
                    <a href="{{ route(Request::segment(3) . '.show', [ app()->getlocale(), $brand->parent ? $brand->parent->id : $brand->id ] ) }}" class="{{ $brand->parent ? 'text-warning' : 'text-primary' }}">
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
