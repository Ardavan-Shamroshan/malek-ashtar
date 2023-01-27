@extends('admin::layouts.master')
@section('title')
    بنر | داشبورد مدیریت
@endsection
@section('content')
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('admin') }}">مدیریت</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('admin.banner') }}">فروشگاه</a>
            </li>
            <li class="breadcrumb-item">بنر
            </li>
        </ol>
    </nav>
    <!-- breadcrumb -->

    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-12">
            <div class="pb-0 mb-2">
                <div class="d-flex justify-content-between">
                    <div class="d-flex gap-2">
                        <h4 class="card-title mg-b-0"> بنر</h4>
                        <p class="tx-12 tx-gray-500 mb-2">نمایش {{ $banners->currentPage() }} از {{ $banners->lastPage() }} صفحه از همه {{ $bannersCount }} مورد .
                            <a href="{{ route('admin.banner') }}" id="m-l-c-05">تازه سازی </a>
                        </p>
                    </div>
                </div>
                <a href="{{ route('admin.banner.create') }}" class="btn p-2 btn-primary"><i class="fe fe-plus"></i> ساخت بنر
                </a>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive d-inline">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row">

                            </div>
                            <div class="row">
                                <div class="col-sm-12">

                                    <table class="table text-md-nowrap dataTable no-footer" id="example1" role="grid" aria-describedby="example1_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="wd-15p border-bottom-0 sorting sorting_asc w-25" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="نام کوچک: activate to sort column descending" style="width: 101.667px;">تصویر</th>
                                            <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="اسلاگ: activate to sort column ascending" style="width: 101.667px;">عنوان</th>
                                            <th class="wd-15p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="برچسب: activate to sort column ascending" style="width: 101.667px;">موقعیت</th>
                                            <th class="wd-10p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="وضعیت: activate to sort column ascending" style="width: 54.4375px;">وضعیت</th>
                                            <th class="wd-25p border-bottom-0 sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="عملیات: activate to sort column ascending" style="width: 196.135px;">عملیات</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($banners as $banner)
                                            <tr>
                                                <td><img src="{{ asset($banner->image) }}" alt="{{ $banner->title }}"></td>
                                                <td><a href="#">{{ $banner->title ?? '-' }}</a></td>
{{--                                                <td><a href="#">{{ $banner->url ?? '-' }}</a></td>--}}
                                                <td>{{ $positions[$banner->position] ?? '-' }}</td>
                                                <td>
                                                    <label for="{{ $banner->id }}">
                                                        <input type="checkbox" id="{{ $banner->id }}" onchange="changeStatus({{ $banner->id }})" data-url="{{ route('admin.banner.status', $banner) }}" data-value="{{ $banner->status }}" @checked($banner->status == 1)>
                                                    </label>
                                                </td>
                                                <td class="d-flex justify-content-start">
                                                    <a href="{{ route('admin.banner.edit', $banner) }}" class="btn-sm"><i class="fe fe-edit"></i> ویرایش</a>
                                                    <form action="{{ route('admin.banner.destroy', $banner) }}" method="post">
                                                        @csrf @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-link delete">
                                                            <i class="fe fe-trash-2"></i> پاک کردن
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>

                                    <div class="col-12 mt-4 text-left">
                                        {{ $banners->links('vendor.pagination.bootstrap-5', ['elements' => $banners]) }}
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/div-->

    </div>
    <!-- /row -->

@endsection

@section('script')
    @include('sweetalert::toast')
    @include('sweetalert::confirmation', ['className' => 'delete'])
@endsection
