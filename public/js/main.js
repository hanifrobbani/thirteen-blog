document.querySelectorAll(".ripple-container").forEach((button) => {
    button.addEventListener("click", function (e) {
        const ripple = document.createElement("span");
        const rect = button.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const x = e.clientX - rect.left - size / 2;
        const y = e.clientY - rect.top - size / 2;

        ripple.style.width = ripple.style.height = `${size}px`;
        ripple.style.left = `${x}px`;
        ripple.style.top = `${y}px`;
        ripple.classList.add("ripple-effect");

        const rippleEffect = button.querySelector(".ripple-effect");
        if (rippleEffect) {
            rippleEffect.remove();
        }

        button.appendChild(ripple);
    });
});

const navItem = document.querySelectorAll(".nav-item");
const navbar = document.querySelector("#navbar");

function handleScroll() {
    navItem.forEach((navItem) => {
        if (window.scrollY === 0) {
            navItem.classList.remove("text-slate-800");
            navItem.classList.add("text-white");
        } else {
            navItem.classList.remove("text-white");
            navItem.classList.add("text-slate-800");
        }
    });

    if (window.scrollY === 0) {
        navbar.classList.remove("bg-gray-100");
        navbar.classList.add("bg-transparent");
        navbar.classList.remove("shadow-md");
        navbar.classList.add("shadow-none");
    } else {
        navbar.classList.add("shadow-md");
        navbar.classList.remove("shadow-none");
        navbar.classList.remove("bg-transparent");
        navbar.classList.add("bg-gray-100");
    }
}

window.addEventListener("scroll", handleScroll);

// Check the scroll position when the page is first loaded
document.addEventListener("DOMContentLoaded", handleScroll);

//dropdown sidebar
function toggleDropdown(dropdownId) {
    const dropdown = document.getElementById(dropdownId);
    dropdown.classList.toggle("hidden");
    if (!dropdown.classList.contains("hidden")) {
        dropdown.style.maxHeight = dropdown.scrollHeight + "px";
    } else {
        dropdown.style.maxHeight = "0px";
    }
}
document.addEventListener("DOMContentLoaded", toggleDropdown);

//menu profile picture
function userDropdown() {
  const dropdown = document.getElementById('dropdown-user');
  dropdown.classList.toggle('hidden');
}


window.onclick = function(event) {
  const dropdown = document.getElementById('dropdown-user');
  const button = dropdown.previousElementSibling;
  if (!button.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add('hidden');
  }
}

//navbar2

const navbar2 = document.querySelector("#navbar2");

function handleScroll2() {

    if (window.scrollY === 0) {
        navbar2.classList.remove("shadow-lg");
        navbar2.classList.add("shadow-none");
    } else {
        navbar2.classList.add("shadow-lg");
        navbar2.classList.remove("shadow-none");
    }
}

window.addEventListener("scroll", handleScroll2);

// Check the scroll position when the page is first loaded
document.addEventListener("DOMContentLoaded", handleScroll2);


// home auth user
const menuButton = document.getElementById('menu-button');
const dropdownMenu = document.getElementById('dropdown-menu');

// Tambahkan event listener untuk klik pada tombol Options
menuButton.addEventListener('click', function() {
  // Toggle visibility dropdown menu
  const expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
  menuButton.setAttribute('aria-expanded', !expanded);
  dropdownMenu.classList.toggle('hidden');
});

// Tutup dropdown menu jika user mengklik di luar dropdown
document.addEventListener('click', function(event) {
  const isClickInside = menuButton.contains(event.target) || dropdownMenu.contains(event.target);
  if (!isClickInside) {
    menuButton.setAttribute('aria-expanded', 'false');
    dropdownMenu.classList.add('hidden');
  }
});