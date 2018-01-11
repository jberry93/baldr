import '../scss/app.scss';

class BaldrApp {
  constructor() {
    document.addEventListener('DOMContentLoaded', this.initNavbar);
  }

  initNavbar() {
    const $burgers = Array.prototype.slice.call(
      document.querySelectorAll('.navbar-burger'),
      0
    );
    if ($burgers.length > 0) {
      $burgers.forEach($el => {
        $el.addEventListener('click', () => {
          let target = $el.dataset.target;
          let $target = document.getElementById(target);

          $el.classList.toggle('is-active');
          $target.classList.toggle('is-active');
        });
      });
    }
  }
}

new BaldrApp();
