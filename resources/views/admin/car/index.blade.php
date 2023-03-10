@extends('admin.layouts.master')
@section('head-tag')
<title>ماشین ها</title>
@endsection


@section('content')

			<!--app-content open-->
			<div class="app-content main-content mt-0">
				<div class="side-app">
					 <!-- CONTAINER -->
					 <div class="main-container container-fluid">
						<!-- PAGE-HEADER -->
						<div class="page-header">
							<div>
								<h1 class="page-title">ماشین ها</h1>
							</div>
							<div class="ms-auto pageheader-btn">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">ماشین ها</a></li>
									<li class="breadcrumb-item active" aria-current="page">صفحات</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->


            



                        <!-- Row -->
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card custom-card">
										<div class="card-header border-bottom">
                            

                                        
                                            <div class="d-flex justify-content-between" style="width: 100%">

                                                <div>   
                                                    <h3 class="card-title">ماشین ها</h3>   
                                                    </div>
                                                
                                                <div>
                                                <a href="{{route('admin.cars.create')}}" class="btn btn-primary fs-14 text-white edit-icn" style="width: 200px" title="">
                                                        اضافه کردن خودرو جدید
                                                </a>                            
                                                </div>
                                                                              
                                            </div>

										</div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table border text-nowrap text-md-nowrap table-hover">
													<thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>نام خودرو</th>
                                                            <th>دسته بندی</th>
                                                            <th>برند</th>
															<th style="width: 150px">تصویر</th>
															{{-- <th>وضعیت</th> --}}

                                                            <th>رنگ</th>
                                                            <th>قدرت</th>
                                                            <th>کشور سازنده</th>
                                                            <th>حداکثر سرعت</th>
                                                            <th>میزان امنیت</th>
                                                            <th>میزان مصرف سوخت</th>
                                                            <th>شتاب</th>
                                                            <th>تنظیمات</th>


                                                        </tr>
													</thead>
													<tbody>

                                                        @foreach ($cars as $car )

														{{-- @dd($car->brand->persian_name); --}}
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $car->name }}</td>

                                                            <td>{{ $car->category->persian_name ?? "" }}</td>
                                                            <td>{{ $car->brand->persian_name ?? "" }}</td>

															<td> <img src="{{ asset($car->image['indexArray']['small'] ) }}" alt="" width="100" height="50"> </td>
                                                            {{-- <td>{{ $car->status==1 ? "فعال" : "غیر فعال"}}</td> --}}
                                                            <td>{{ $car->color ?? " "}}</td>
                                                            <td>{{ $car->power ?? " "}}</td>
                                                            <td>{{ $car->country ?? " "}}</td>
                                                            <td>{{ $car->maxspeed ?? " "}}</td>
                                                            <td>{{ $car->safety_class ?? " "}}</td>
                                                            <td>{{ $car->fuel_consumption ?? " "}}</td>
                                                            <td>{{ $car->acceleration ?? " "}}</td>



                                                            <td style="width: 200px">

																<div class="d-flex justify-content-around">

																<div>	
                                                                <a href="{{route('admin.cars.edit',['car'=>$car->id])}}" class="btn btn-warning fs-14 text-white edit-icn" style="" title="ویرایش">
                                                                    <i class="fe fe-edit"></i>
                                                                </a>
															</div>
															<div>
																<form  action="{{route('admin.cars.destroy',['car'=>$car->id])}}" method="post">
																	@csrf
																	@method('delete')
																	<button class="btn btn-danger fs-14 text-white delete" title="حذف" type="submit"><i class="fa fa-trash"></i></button>
																
																</form>
															</div>

															  </div>

                                                            </td>
                                                        </tr>
                                                        @endforeach
	
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

						</div>

						</div>

						</div>


@endsection

@section('script')

@include('admin.alerts.sweetalert.delete-confirm', ['className' => 'delete'])


@endsection
