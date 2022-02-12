const jQueryBridget = require('jquery-bridget');

const Isotope = require('isotope-layout');

jQueryBridget('isotope', Isotope);

const Filtration = () => {
  const activeClass = 'active';
  const dataFilter = 'filter';
  jQuery('.custom-filtration').each((i, hold) => {
    const holder = jQuery(hold);
    const isotopeWrap = holder.find('.isotope-f');
    const filterButtonsWrap = holder.find('.filter-buttons');
    const tabLinks = holder.find('.nav-tabs .nav-link');
    let activeFilter;
    const $isotopeGrid = isotopeWrap.isotope({
      itemSelector: '.filter-item',
      layoutMode: 'fitRows',
    });
    function toggleActiveClass(cur) {
      filterButtonsWrap.find(`li.${activeClass}`).removeClass(activeClass);
      if (cur) cur.closest('li').addClass(activeClass);
    }
    function filterItems(cur) {
      if (tabLinks.length) {
        setTimeout(() => {
          const curCategory = tabLinks.filter(`.${activeClass}`).data(dataFilter);
          const curTab = jQuery(tabLinks.filter(`.${activeClass}`).attr('href'));
          const curFilter = curTab.find(`li.${activeClass} > a`);
          activeFilter = curFilter.length ? curCategory + curFilter.data(dataFilter) : curCategory;
          $isotopeGrid.isotope({ filter: activeFilter });
        });
      } else {
        activeFilter = cur;
        $isotopeGrid.isotope({ filter: activeFilter });
      }
    }
    filterItems(filterButtonsWrap.find(`li.${activeClass} > a`).data(dataFilter));
    filterButtonsWrap.on('click', 'li > a', function (e) {
      e.preventDefault();
      const cur = jQuery(this);
      toggleActiveClass(cur);
      filterItems(cur.data(dataFilter));
    });
    tabLinks.on('click', function () {
      toggleActiveClass(false);
      filterItems();
    });
  });
};

export default Filtration;
