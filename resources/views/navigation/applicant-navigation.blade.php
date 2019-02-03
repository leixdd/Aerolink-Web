<nav class="navbar navbar-expand-lg navbar-dark bg-theme">
    <a class="navbar-brand nav-brand" href="/">AeroLink | Applicant's Portal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
        
            @if($exam != 0) 
                <li class="nav-item">
                    <a class="nav-link" href="/applicant/examination/{{$exam}}"><i class="fa fa-list">&nbsp;&nbsp;</i>Examination</a>
                </li>
            @endif
            
            <li class="nav-item">
                <a class="nav-link" href="/applicant/logout"><i class="fa fa-close">&nbsp;&nbsp;</i>Logout</a>
            </li>
            

        </ul>
    </div>
</nav>