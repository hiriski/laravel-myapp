<div id="sidebar" class="left">
    <div class="sidebar-inner">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="material-icons">web</i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('sentence.index') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    <i class="material-icons">class</i> <span>Learn</span>
                </a>
                <div class="dropdown-menu">
                    <a href="{{ route('sentence.index') }}" class="dropdown-item">Learn Sentence</a>
                    <a href="" class="dropdown-item">Learn Phrase</a>
                </div>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="material-icons">help</i> <span>About</span>
                </a>
            </li>
        </ul>
    </div>
</div>