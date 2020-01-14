 <div class="user-box">
                        <div class="user-img">
                            <img src="{{asset('assets/images/users/user.png')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail img-responsive">
                            <div class="user-status offline"><i class="mdi mdi-adjust"></i></div>
                        </div>

                        @auth
                        <h5><a href="#">{{Auth::user()->name}}</a> </h5>
                        @else
                        <h5><a href="#">User Name</a> </h5>
                        @endauth
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" >
                                    <i class="mdi mdi-settings"></i>
                                </a>
                            </li>

                            <li class="list-inline-item" title="Logout">
                                <a href="{{ route('logout') }}" class="text-custom" 
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="mdi mdi-power"></i>
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </div>

                    