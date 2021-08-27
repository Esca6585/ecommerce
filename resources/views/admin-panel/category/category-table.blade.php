<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>icon-{{ __('name') }}</th>
                <th>icon-{{ __('img') }}</th>
                <th>{{ __('Parent Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name_tm }}</td>
                <td>{{ $category->name_en }}</td>
                <td>{{ $category->name_ru }}</td>
                <td>{{ $category->icon_name }}</td>
                <td>{{ $category->icon_img }}</td>
                <td>
                    <a href="{{ $category->parent ? route( Request::segment(4) . '.show', [ app()->getlocale(), $category->parent_id ]) : route( Request::segment(4) . '.show', [ app()->getlocale(), $category->id ]) }}" class="{{ $category->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $category->parent ? $category->parent->{ 'name_' . app()->getlocale() } : __('Parent Category') }}
                    </a>
                </td>
                <td>@include('layouts.action')</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ dump($categories) }} --}}
    <div class="d-flex justify-content-end">
        <div>
            {{ $categories->links('layouts.pagination') }}
        </div>
    </div>                                
</div>
