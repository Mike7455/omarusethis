@extends('includes.user_app')

@section('banner')
<section class="bg-blue align-items-center d-flex" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<!-- Title -->
				<h1 class="text-white">Courses</h1>
				<!-- Breadcrumb -->
				{{-- <div class="d-flex justify-content-center">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Courses</li>
						</ol>
					</nav>
				</div> --}}
			</div>
		</div>
	</div>
</section>
@endsection


@section('section')
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Main content START -->
            <div class="col-lg-1"></div>
            <div class="col">
    
                <!-- Search option START -->
                <div class="row mb-4 align-items-center">
                    <!-- Search bar -->
                    <div class="col-xl-6">
                        <form class="border rounded p-2">
                            <div class="input-group input-borderless">
                                <input class="form-control me-1" type="search" placeholder="Find your course">
                                <button type="button" class="btn btn-primary mb-0 rounded z-index-1"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
    
                    <!-- Select option -->
                    {{-- <div class="col-xl-3 mt-3 mt-xl-0">
                        <form class="border rounded p-2 input-borderless">
                            <select class="form-select form-select-sm js-choice border-0" aria-label=".form-select-sm">
                                <option value="">Most Viewed</option>
                                <option>Recently search</option>
                                <option>Most popular</option>
                                <option>Top rated</option>
                            </select>
                        </form>
                    </div> --}}
    
                    <!-- Content -->
                    <div class="col-12 col-xl-3 d-flex justify-content-between align-items-center mt-3 mt-xl-0">
                        <!-- Advanced filter responsive toggler START -->
                        <button class="btn btn-primary mb-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
                            <i class="fas fa-sliders-h me-1"></i> Show filter
                        </button>
                        <!-- Advanced filter responsive toggler END -->
                        <p class="mb-0 text-end">Showing 1-7 of 32 result</p>
                    </div>
    
                </div>
                <!-- Search option END -->
    
                <!-- Course Grid START -->
                <div class="row g-4">


                    @foreach ($courses as $course)
                        <!-- Card item 1 START -->
                        <div class="col-sm-6 col-xl-4">
                            <div class="card shadow h-100">
                                <!-- Image -->
                                <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                                <!-- Card body -->
                                <div class="card-body pb-0">
                                    <!-- Badge and favorite -->
                                    <div class="d-flex flex-row-reverse mb-2">
                                        {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                        <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                    </div>
                                    <!-- Title -->
                                    <h5 class="card-title"><a href="/course-detail/{{ $course->id }}">{{ $course->course_name }}</a></h5>
                                    <p class="mb-2 text-truncate-2">{{ $course->course_description }}</p>
                                    
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer pt-0 pb-3">
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                        <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END --> 
                    @endforeach

    
                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                    <!-- Card item 1 START -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card shadow h-100">
                            <!-- Image -->
                            <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                            <!-- Card body -->
                            <div class="card-body pb-0">
                                <!-- Badge and favorite -->
                                <div class="d-flex flex-row-reverse mb-2">
                                    {{-- <a href="#" class="badge bg-purple bg-opacity-10 text-purple">All level</a> --}}
                                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                </div>
                                <!-- Title -->
                                <h5 class="card-title"><a href="/course-detail">Sketch from A to Z: for app designer</a></h5>
                                <p class="mb-2 text-truncate-2">Proposal indulged no do sociable he throwing settling.</p>
                                
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer pt-0 pb-3">
                                <hr>
                                <div class="d-flex justify-content-between">
                                    {{-- <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12h 56m</span> --}}
                                    <span class="h6 fw-light mb-0"><i class="fas fa-solid fa-user-graduate text-orange me-2"></i>15 lecturers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
    
                    
    
                </div>
                <!-- Course Grid END -->

                

                <!-- Pagination START -->
                <div class="col-12">
                    <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                        {{-- <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                            <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                            <li class="page-item mb-0 active" aria-current="page"><a class="page-link" href="#">2</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                            <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                        </ul> --}}
                        {{ $courses->links() }}
                    </nav>
                </div>
                <!-- Pagination END -->
            </div>
            <div class="col-lg-1"></div>
            <!-- Main content END -->
    
            
        </div><!-- Row END -->
    </div>
</section>
@endsection