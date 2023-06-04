    <!-- Section: Teachers -->
    <section>
        <div class="container pb-50">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1 text-uppercase">Our <span class="text-theme-color-2">Leaders</span>
                        </h2>
                        <p>Meet our dedicated Chamber of Commerce Leaders...</p>
                    </div>
                </div>
            </div>
            <div class="row" style="align-content: left">


                {{-- <div class="col-md-3">
              <div>
                   <div class="item">
                  <div class="hover-effect mb-30">
                    <div class="thumb">
                      <img class="img-fullwidth" alt="" src="/logos/profile1.jpg">
                    </div>
                    <div class="details p-15 pt-10 pb-10">
                      <h4 class="title mb-5" style="text-transform: uppercase; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Patience Ndidi Key</h4>
                      <h5 class="sub-title mt-0 mb-15" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">President</h5>
                      <a class="btn btn-theme-colored btn-sm" href="{{ route('leaders-details', 6) }}" style="font-weight: bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">View Profile</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}


                @foreach ($leaders as $leader)
                    <div class="col-md-3">
                        <div>
                            <div class="item">
                                <div class="hover-effect mb-30">
                                    <div class="thumb">
                                        <img class="img-fullwidth" alt="" src="/leaders/{{ $leader->image }}">
                                    </div>
                                    <div class="details p-15 pt-10 pb-10">
                                        <h4 class="title mb-5"
                                            style="text-transform: uppercase; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                                            {{ Str::limit($leader->name, 16) }}</h4>
                                        <h5 class="mt-0 mb-15"
                                            style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-transform: capitalize;">
                                            {{ Str::limit($leader->position, 27) }}</h5>
                                        <a type="button" class="btn btn-theme-colored btn-sm" data-toggle="modal"
                                            data-target="#leader{{ $leader->id }}"
                                            style="font-weight: bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">View
                                            Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- profile 1 modal --}}
                    <div class="modal fade " id="leader{{ $leader->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog  modal-dialog-centered modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="thumb">
                                                <img src="/leaders/{{ $leader->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <h4 class="name font-24 mt-0 mb-0">{{ $leader->name }}</h4>
                                            <h5 class="mt-5">{{ $leader->position }}</h5>

                                            {!! $leader->description !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- profile 1 modal --}}
                @endforeach



            </div>
        </div>
    </section>
