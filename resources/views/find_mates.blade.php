@extends('includes.user_app')



@section('banner')
<section class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-light p-4 rounded-3 position-relative overflow-hidden">

                    <!-- Svg decoration -->
                    <figure class="position-absolute top-0 end-0 mt-5">
                        <svg width="566.3px" height="353.7px" viewBox="0 0 566.3 353.7"	>
                            <path stroke="#17a2b8" fill="none" d="M525.1,4c8.1,0.7,14.9,7.2,17.9,14.8c3,7.6,3,16,2.1,24.1c-4.7,44.3-32.1,84.7-69.4,108.9 c-37.4,24.2-83.7,32.8-127.9,27.6c-32.3-3.8-63.5-14.5-95.9-16.6c-21.6-1.4-45.6,2.1-60.1,18.3c-7.7,8.5-11.8,19.6-14.8,30.7 c-7.9,29.5-9,60.8-19.7,89.5c-5.5,14.8-14,29.1-27.1,38c-15.6,10.5-35.6,12-54.2,9.5c-18.6-2.5-36.5-8.6-55-12.1"/>
                            <path stroke="#F99D2B" fill="none" d="M560.7,0.2c10,18.3,3.7,41.1-5,60.1c-11.8,25.9-28,50.3-50.2,68.2c-29,23.3-66.3,34-103.2,38.6 c-36.9,4.6-74.3,3.8-111.3,7.2c-22.3,2-45.3,5.9-63.5,19c-26.8,19.2-39,55.3-68.3,70.4c-38.2,19.6-89.7-4.9-125.6,18.8 c-22.6,15-30.7,44.2-33.3,71.2"/>
                        </svg>
                    </figure>

                    <div class="row position-relative align-items-center">

                        <!-- Content -->
                        <div class="col-md-6 px-md-5">
                            <!-- Title -->
                            <h1 class="mb-3">Welcome, Find a Study Mate</h1>
                            <p class="mb-3">Find a friend and lets connect, learn and build each other up. </p>

                            <!-- Search -->
                            <form class="bg-body rounded p-2">
                                <div class="input-group">
                                    <input class="form-control border-0 me-1" type="search" placeholder="Search a mate">
                                    <button type="button" class="btn btn-primary mb-0 rounded">Search</button>
                                </div>
                            </form>
                        </div>

                        <!-- Image -->
                        <div class="col-md-6 text-center">
                            <img src="assets/images/book/book-bg.svg" alt="">
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </div> <!-- Row END -->
    </div>
</section>
@endsection




@section('section')
<!--Page content START -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Main content START -->
                <div class="col-12">

                    <!-- Search option START -->
                    <div class="row mb-4 align-items-center">

                        <!-- Title -->
                        <div class="col-md-4">
                            <h5 class="mb-0">Students</h5>
                        </div>

                        <!-- Select option -->


                        <!-- Select option -->
                        <div class="col-md-4 mt-3 mt-xl-0">
                            <form class="border-bottom p-2 input-borderless">
                                <select class="js-choice">
                                    <option value="">Select Course</option>
                                    <option>Software Engineering</option>
                                    <option>Java Programming</option>
                                    <option>Web develpoment</option>
                                    <option>A.I</option>
                                    <option>Information System</option>
                                    <option>Expert System</option>
                                    <option>C++ Programming </option>
                                    <option>Computer Secuirty</option>
                                    <option>E-Commerce</option>
                                    <option>Computer Networks</option>
                                    <option>Data Communication</option>
                                </select>
                            </form>
                        </div>


                            <div class="col-md-4 mt-3 mt-xl-0">
                                <a href="/chatify" class="btn btn-outline-primary mb-0">Chat</a>
                            </div>

                    </div>
                    <!-- Search option END -->

                    <!-- Book Grid START -->
                    <div class="bg-light row g-4">


                        @foreach ($users as $user)
                            <!-- Card item1  START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card card-body h-100">
                                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                        <!-- Avatar -->
                                        <div class="d-flex align-items-center mb-1 mb-sm-0">
                                            <!-- Avatar -->
                                            <div class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" src="{{('assets/images/avatar/03.jpg')}}" alt="avatar">
                                            </div>
                                            <!-- Info -->
                                            <div class="ms-2">
                                                <h6 class="mb-0">{{$user->fname." ".$user->lname}}</h6>
                                            </div>
                                        </div>

                                        {{-- <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 mb-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                        </ul> --}}
                                    </div>

                                    <!-- Content -->
                                    <div class="d-sm-flex justify-content-between mb-3">
                                        <!-- Avatar -->
                                        <div class="d-flex align-items-center mb-1 mb-sm-0">
                                            <!-- Avatar -->
                                            <h6 class="fw-normal mb-0">{{ $user->institution }}</h6>

                                        </div>
                                        @if($has_requested->contains('from_user_id', $user->id))

                                            <a href="/user-requests" class="btn btn-info btn-sm " type="submit">Request Received</a>

                                        @elseif($already_accepted->contains('user_id', $user->id) || $accepted_request->contains('from_user_id', $user->id))
                                           {{-- <form action="{{route('send_request')}}" method="POST"> --}}
                                                {{-- @csrf --}}
                                                {{-- <input name="user_id" type="hidden" value="{{$user->id}}"> --}}
                                                <button class="btn btn-success btn-sm " type="submit">Request Accepted</button>
                                            {{-- </form> --}}
                                        @elseif ($already_requested->contains('user_id', $user->id))
                                        {{-- <form action="{{route('send_request')}}" method="POST"> --}}
                                            {{-- @csrf --}}
                                            {{-- <input name="user_id" type="hidden" value="{{$user->id}}"> --}}
                                            <div class="btn btn-secondary btn-sm " type="submit">Request Sent</div>
                                        {{-- </form> --}}
                                        @else
                                            <form action="{{route('send_request')}}" method="POST">
                                                @csrf
                                                <input name="user_id" type="hidden" value="{{$user->id}}">
                                                <button class="btn btn-outline-primary btn-sm " type="submit">Send Request</button>
                                            </form>
                                        @endif



                                    </div>

                                </div>
                            </div>
                            <!-- Card item END -->
                        @endforeach
                        <!-- Card item1  START -->
                        <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->

								</div>

								<!-- Content -->
								<h6 class="fw-normal mb-0">UG</h6>
							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->


								</div>
                                {{-- </div> --}}
                                <div class="d-sm-flex justify-content-between mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
                                        <h6 class="fw-normal mb-0">UMAT</h6>

									</div>
                                    <a href="user/chat/" class="btn btn-outline-primary btn-sm ">Send Request</a>



								</div>
								<!-- Content -->

							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->

								</div>

								<!-- Content -->
								<h6 class="fw-normal mb-0">UG</h6>
							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->

								</div>

								<!-- Content -->
								<h6 class="fw-normal mb-0">UMAT</h6>
							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->

								</div>

								<!-- Content -->
								<h6 class="fw-normal mb-0">UMAT</h6>
							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
							<div class="card card-body h-100">
								<div class="d-sm-flex justify-content-between align-items-center mb-3">
									<!-- Avatar -->
									<div class="d-flex align-items-center mb-1 mb-sm-0">
										<!-- Avatar -->
										<div class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
										</div>
										<!-- Info -->
										<div class="ms-2">
											<h6 class="mb-0">Dennis Barrett</h6>
										</div>
									</div>

									<!-- Rating star -->

								</div>

								<!-- Content -->
								<h6 class="fw-normal mb-0">UMAT</h6>
							</div>
						</div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card card-body h-100">
                                <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                    <!-- Avatar -->
                                    <div class="d-flex align-items-center mb-1 mb-sm-0">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="{{('assets/images/avatar/03.jpg')}}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0">{{$user->fname." ".$user->lname}}</h6>
                                        </div>
                                    </div>

                                    {{-- <!-- Rating star -->
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                    </ul> --}}
                                </div>

                                <!-- Content -->
                                <h6 class="fw-normal mb-0">{{ $user->institution }}</h6>
                            </div>
                        </div>
                        <!-- Card item END -->

                         <!-- Card item1  START -->
                         <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="card card-body h-100">
                                <div class="d-sm-flex justify-content-between align-items-center mb-3">
                                    <!-- Avatar -->
                                    <div class="d-flex align-items-center mb-1 mb-sm-0">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-sm">
                                            <img class="avatar-img rounded-circle" src="{{('assets/images/avatar/03.jpg')}}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0">{{$user->fname." ".$user->lname}}</h6>
                                        </div>
                                    </div>

                                    {{-- <!-- Rating star -->
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star text-warning"></i></li>
                                        <li class="list-inline-item me-0 mb-0"><i class="fas fa-star-half-alt text-warning"></i></li>
                                    </ul> --}}
                                </div>

                                <!-- Content -->
                                <h6 class="fw-normal mb-0">{{ $user->institution }}</h6>
                            </div>
                        </div>
                        <!-- Card item END -->


                        <!-- Pagination START -->
                    <div class="col-12">
                        <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                            {{ $users->links() }}
                        </nav>
                    </div>


                    </div>
                    <!-- Book Grid END -->


                    <br>
                    <br>
                    <!-- Pagination END -->
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->


@endsection


@section('body_dependencies')

@endsection


@section('dependencies')

@endsection










