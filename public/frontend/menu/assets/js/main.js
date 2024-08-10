'use strict';

// Main function
(function () {
  // Initialize menu
  //-----------------
  let menu, animate;

  const layoutMenuEls = document.querySelectorAll('#layout-menu');
  layoutMenuEls.forEach(element => {
    menu = new Menu(element, {
      orientation: 'vertical',
      closeChildren: false
    });
    // Change parameter to true if you want scroll animation
    window.Helpers.scrollToActive(animate = false);
    window.Helpers.mainMenu = menu;
  });

  // Initialize menu togglers and bind click on each
  const menuTogglers = document.querySelectorAll('.layout-menu-toggle');
  menuTogglers.forEach(item => {
    item.addEventListener('click', event => {
      event.preventDefault();
      window.Helpers.toggleCollapsed();
    });
  });

  // Display menu toggle (layout-menu-toggle) on hover with delay
  const delay = (elem, callback) => {
    let timeout = null;
    elem.onmouseenter = () => {
      // Set timeout to be a timer which will invoke callback after 300ms (not for small screen)
      timeout = setTimeout(callback, Helpers.isSmallScreen() ? 0 : 300);
    };

    elem.onmouseleave = () => {
      // Clear any timers set to timeout
      document.querySelector('.layout-menu-toggle').classList.remove('d-block');
      clearTimeout(timeout);
    };
  };

  if (document.getElementById('layout-menu')) {
    delay(document.getElementById('layout-menu'), () => {
      if (!Helpers.isSmallScreen()) {
        document.querySelector('.layout-menu-toggle').classList.add('d-block');
      }
    });
  }

  // Display in main menu when menu scrolls
  const menuInnerContainer = document.getElementsByClassName('menu-inner');
  const menuInnerShadow = document.getElementsByClassName('menu-inner-shadow')[0];

  if (menuInnerContainer.length > 0 && menuInnerShadow) {
    menuInnerContainer[0].addEventListener('ps-scroll-y', function () {
      menuInnerShadow.style.display = this.querySelector('.ps__thumb-y').offsetTop ? 'block' : 'none';
    });
  }

  // Init helpers & misc
  // --------------------

  // Init BS Tooltip
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  tooltipTriggerList.forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

  // Accordion active class
  const accordionActiveFunction = e => {
    const accordionItem = e.target.closest('.accordion-item');
    if (e.type === 'show.bs.collapse') {
      accordionItem.classList.add('active');
    } else if (e.type === 'hide.bs.collapse') {
      accordionItem.classList.remove('active');
    }
  };

  const accordionTriggerList = [].slice.call(document.querySelectorAll('.accordion'));
  accordionTriggerList.forEach(accordionTriggerEl => {
    accordionTriggerEl.addEventListener('show.bs.collapse', accordionActiveFunction);
    accordionTriggerEl.addEventListener('hide.bs.collapse', accordionActiveFunction);
  });

  // Auto update layout based on screen size
  window.Helpers.setAutoUpdate(true);

  // Toggle Password Visibility
  window.Helpers.initPasswordToggle();

  // Speech To Text
  window.Helpers.initSpeechToText();

  // Manage menu expanded/collapsed with templateCustomizer & local storage
  //------------------------------------------------------------------
  if (window.Helpers.isSmallScreen()) {
    return;
  }

  window.Helpers.setCollapsed(true, false);
})();

// Modal functionality
const modal = document.getElementById("modal-hadir");
const btn = document.getElementById("hadir-button");
const span = document.getElementsByClassName("close-modal")[0];
const cancelButton = document.getElementsByClassName("cancel-button")[0];

// Open the modal
btn.onclick = () => {
  modal.classList.add("show");
};

// Close the modal
const closeModal = () => {
  modal.classList.remove("show");
};

span.onclick = closeModal;
cancelButton.onclick = closeModal;

// Close the modal when clicking outside of it
window.onclick = event => {
  if (event.target === modal) {
    closeModal();
  }
};

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.accordion-header').forEach(button => {
        button.addEventListener('click', () => {
            // Toggle the accordion content
            const content = button.nextElementSibling;
            const isVisible = content.style.display === 'block';

            // Hide all other accordion contents
            document.querySelectorAll('.accordion-content').forEach(item => {
                item.style.display = 'none';
            });

            // Toggle the clicked accordion content
            content.style.display = isVisible ? 'none' : 'block';
        });
    });
});



