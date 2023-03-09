<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <li class="nav-item">
                <a href="{{route('personal.profile.show')}}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Profile
                    </p>
                </a>
            </li>
            @if((auth()->user()->role == 0 )OR(auth()->user()->role == 2 ))
                <li class="nav-item">
                    <a href="{{route('personal.post.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>
            @endif

            <li class="nav-item">
                <a href="{{route('personal.liked.index')}}" class="nav-link">
                    <i class="nav-icon far fa-heart"></i>
                    <p>
                        Likes
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.comment.index')}}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        Comments
                    </p>
                </a>
            </li>


        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
