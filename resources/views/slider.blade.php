<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="dashboard"> <img alt="image" src="assets2/img/logo.png" class="header-logo" /> <span
            class="logo-name">{{ config('app.name') }}</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown active">
          <a href="dashboard" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i
              data-feather="briefcase"></i><span>Subject</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('addSubject')}}">Add</a></li>
            <li><a class="nav-link" href="{{route('viewsubject')}}">View</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="command"></i><span>Questions</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('addquestions')}}">Add</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="mail"></i><span>Preview</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{route('preview.question')}}">Qestion</a></li>
           
          </ul>
        </li>
     
      
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-outline-success ">Logout</button>
                </form>

           
          </ul>
        </li>
       
      </ul>
    </aside>
  </div>