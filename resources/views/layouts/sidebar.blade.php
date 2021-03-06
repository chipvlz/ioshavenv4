<sidebar color="#F44336" nav-color="{{ Session::get('color') }}" is-admin="{{Auth::check() && Auth::user()->isAdmin}}"
          title="{{ Request::is('/') ? config('app.name', 'Laravel') : 'Back' }}">
  <a href="/profile" slot="links" class="mr-5">
    @if(Auth::check())
    <square-button icon="fas fa-user" class="fill--white dark"/>
    @else
    <square-button icon="fas fa-sign-in" class="fill--white dark"/>
    @endif

  </a>
  <!-- <a href="/auth" slot="links"><i class="fas fa-user"></i></a> -->
  <div slot="content" class="hide-on-server-render">
    <a href="/" class="item"><i class="fas fa-home"></i>Home</a>
    <a href="/apps" class="item"><i class="fab fa-app-store"></i>Apps</a>
    <a href="/jailbreak" class="item"><i class="fas fa-user-secret"></i>Jailbreaks</a>
    <a href="/betas" class="item"><i class="fas fa-flask"></i>Betas</a>
    <a href="/cydia" class="item"><i class="fas fa-wrench"></i>Cydia Impactor</a>
    <a href="/faq" class="item"><i class="fas fa-question"></i>FAQ</a>
    <a href="#footer" class="item" @click="toggleSidebar"><i class="fas fa-link"></i>More links</a>
  </div>
</sidebar>
