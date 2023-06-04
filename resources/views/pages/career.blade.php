@extends('layouts.user.app')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-2" data-bg-img="/logos/simple3.jpeg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="font-28 text-white"
                                style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                CAREERS</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>Careers</li>
            </ul>
        </div>




        <!-- Section: Planyts -->
        <section id="plans" class="benefits">
            <div class="container pt-70 pb-40">
                {{-- <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="mt-0 line-height-1 text-center text-capitalize mb-10 text-black-333">NiDCC CAREER
                                <span class="text-theme-color-2"> OPPORTUNITIES</span></h2>
                        </div>
                    </div>
                </div> --}}

               
                <div>
                    <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 22px;  margin-top: 10px;  margin-bottom: 100px;">If you're ready to embark on a fulfilling career journey, we invite you to explore our current job openings. Start making a difference and be part of a team that is shaping the future.</p>
                </div>


                <div class="row" style="margin-bottom: 120px;">
                    <div class="col-md-6">
                    <img src="logos/career1.jpg" alt="">
                    </div>

                    <div class="col-md-6">
                        <div>
                     <h3>HAVING THE RIGHT<span class="text-theme-color-2"> FOUNDATION</span></h3>
                     <p>Having a fulfilling career is an important part of your well-being. A crucial and fundamental step
                        towards your career path is to identify and choose the right opportunities. Choosing a career
                        opportunity becomes easier when you know what options you have, which is what we at
                        Nigerians in Diaspora Chamber of Commerce can offer.</p>
                        <p>Career opportunities are available across industries in different state and country. Here are a
                            few career opportunities, you can take advantage of.</p>

                            <div>
                                <a class="btn btn-large" href="{{ route('normal-jobs') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; background-color: #4D7902; color: whitesmoke; margin-top: 10px;">See All Open Roles</a>
                            </div>
                    </div>

                </div>
                </div>



                <div class="row" style="margin-bottom: 120px;">
                    <div class="col-md-6">
                        <div>
                     <h3>BUILD A CAREER AS<span class="text-theme-color-2"> AN INTERN</span></h3>
                     <p>Make bold steps to apply for an internship opportunity or a training programme that helps you to
                        excel in your career. You may have opportunities to advance your career within an organization
                        or you may take a job in a different company for career advancement. </p>

                            <div>
                                <a class="btn btn-large" href="{{ route('intern-jobs') }}" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 17px; font-weight:bold; background-color: #4D7902; color: whitesmoke; margin-top: 10px; margin-bottom: 20px;">View All Internships</a>
                            </div>
                    </div>

                </div>
                    <div class="col-md-6">
                        <img src="logos/career2.jpeg" alt="">
                    </div>

    
                </div>
               
                </div>
            </div>
        </section>
    @endsection
