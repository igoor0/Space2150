<nav>
  <div class="navbar">
    <a href="<?=config('app.url'); ?>/">Strona Główna</a>
    <div class="dropdown">
      <div class="dropdown-content">
        <a href="<?=config('app.url'); ?>/shipmodules/list">Lista modułów statku</a>
        <a href="<?=config('app.url'); ?>/shipmodules/add">Utwórz moduł statku</a>
      </div>
    </div>
    <div class="dropdown">
      <div class="dropdown-content">
        <a href="<?=config('app.url'); ?>/modulecrew/list">Lista modułów drużyny</a>
        <a href="<?=config('app.url'); ?>/modulecrew/add">Dodaj moduł drużyny</a>
      </div>
    </div>
    <div class="dropdown">
      <div class="dropdown-content">
        <a href="<?=config('app.url'); ?>/crewskills/list">Lista umiejętności załogi</a>
        <a href="<?=config('app.url'); ?>/crewskills/add">Dodaj umiejętność załogi</a>
      </div>
    </div>
    @if (Auth::check())
    <a href="<?=config('app.url'); ?>/logout">Wyloguj</a>
    @else
    <a href="<?=config('app.url'); ?>/login">Zaloguj</a>
    <a href="<?=config('app.url'); ?>/register">Zarejestruj</a>
    @endif
  </div>
</nav>