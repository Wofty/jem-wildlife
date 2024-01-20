<nav>
  <ul class="p-0 m-0 flex bg-orange-700 flex-row flex-wrap">
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/jem-center-php/" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/jem-center-php/') ? 'aria-current="page"': '' ?>>Home</a>
    </li>
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/jem-center-php/animals" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/jem-center-php/animals') ? 'aria-current="page"': '' ?>>Animals</a>
    </li>
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/jem-center-php/events" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/jem-center-php/events') ? 'aria-current="page"': '' ?>>Events</a>
    </li>
    <li class="grow p-0 w-1/5 border border-black border-solid box-border">
      <a href="/jem-center-php/search" class="leading-[3] min-h-[45px] block text-slate-50 text-center" <?= urlIs('/jem-center-php/search') ? 'aria-current="page"': '' ?>>Search</a>
    </li>
  </ul>
</nav>