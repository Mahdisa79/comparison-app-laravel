@extends('admin.layouts.master')
@section('head-tag')
<title>برند جدید</title>
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
								<h1 class="page-title">برند  ها</h1>
							</div>
							<div class="ms-auto pageheader-btn">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0);">برندها ها</a></li>
									<li class="breadcrumb-item active" aria-current="page">صفحات</li>
								</ol>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

            <div class="row">
               
              <div class="col-md-12">
          
              <div class="card ">
                  {{-- <div class="card-header">
                    <h3 class="card-title">صفحه ارتباط با ما </h3>
                  </div> --}}
                  <div class="card-header border-bottom">
                    <h3 class="card-title">ساخت برند جدید</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form    method="post" action="{{ route('admin.brands.store') }}" enctype="multipart/form-data">
                      @csrf
                      @method('post')
                    <div class="card-body">
                      <div class="row">
          
                      <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="">نام برند (فارسی)</label>
                        <input type="text" name="persian_name" class="form-control mb-2" value="{{ old('persian_name') }}"  placeholder="">
                      
                        @error('persian_name')
                        <span class="alert_required bg-danger text-white p-1 mt-2 " role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                      </div>
            
                     </div>

                     <div class="col-md-6">
                      
                      <div class="form-group">
                        <label for="">نام برند (اینگلیسی)</label>
                        <input type="text" name="original_name" class="form-control mb-2" value="{{ old('original_name') }}"  placeholder="">
                      
                        @error('original_name')
                        <span class="alert_required bg-danger text-white p-1 mt-2 " role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                      </div>
            
                     </div>

                     <div class="col-md-6">
                      
                      <div class="form-group">
                            <div class="form-group">
                                <label for="logo">تصویر</label>
                                <input type="file" class="form-control file-input mb-2" name="logo" id="logo">
                            </div>
                        @error('logo')
                        <span class="alert_required bg-danger text-white p-1 mt-2 " role="alert">
                            <strong>
                                {{ $message }}
                            </strong>
                        </span>
                        @enderror
                      </div>
            
                     </div>


                     <section class="col-md-6 ">
                      <div class="form-group">
                          <label for="status">وضعیت</label>
                          <select name="status" id="" class="form-control mb-2" id="status">
                              <option value="0" @if(old('status') == 0) selected @endif>غیرفعال</option>
                              <option value="1" @if(old('status') == 1) selected @endif>فعال</option>
                          </select>
                      </div>
                      @error('status')
                      <span class="alert_required bg-danger text-white p-1 " role="alert">
                          <strong>
                              {{ $message }}
                          </strong>
                      </span>
                  @enderror
                  </section>
                               
          
                    </div>
          
                    <div class="d-flex justify-content-center ">
                      <button type="submit" class="btn btn-primary col-md-4 edit" >ساخت برند</button>
                    </div>
          
          
                    </div>
          
          
                  </form>
                </div>
              </div>
          </div>

					</div>
				</div>
			</div>
			<!-- CONTAINER END -->

@endsection


