const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


// Function to enable hover behavior on desktop screens
function enableHoverOnDesktop() {
  const navbarItems = document.querySelectorAll('.navbar .has-megamenu');
  navbarItems.forEach(item => {
    item.addEventListener('mouseenter', function () {
      const dropdownMenu = this.querySelector('.dropdown-menu');
      dropdownMenu.style.display = 'block';
    });
    item.addEventListener('mouseleave', function () {
      const dropdownMenu = this.querySelector('.dropdown-menu');
      dropdownMenu.style.display = 'none';
    });
  });
}

// Function to enable click behavior on smaller screens
function enableClickOnMobile() {
  const navbarItems = document.querySelectorAll('.navbar .has-megamenu');
  navbarItems.forEach(item => {
    const dropdownMenu = item.querySelector('.dropdown-menu');
    item.addEventListener('click', function (event) {
      // Prevent the default behavior of the link (if it's a link)
      event.preventDefault();
      // Toggle the display of the dropdown menu
      if (dropdownMenu.style.display === 'block') {
        dropdownMenu.style.display = 'none';
      } else {
        dropdownMenu.style.display = 'block';
      }
    });
  });
}

// Check and update behavior based on screen size
function checkScreenSize() {
  if (window.innerWidth >= 992) {
    enableHoverOnDesktop();
  } else {
    enableClickOnMobile();
  }
}

// Call the function initially and on window resize
checkScreenSize();
window.addEventListener('resize', checkScreenSize);


// const triggerEl = document.querySelector('#myTab button[data-bs-target="#profile"]')
// bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name

// const triggerFirstTabEl = document.querySelector('#myTab li:first-child button')
// bootstrap.Tab.getInstance(triggerFirstTabEl).show() // Select first tab


// Cookies Consent Modal
const cookieBox = document.querySelector(".wrapper"),
  buttons = document.querySelectorAll(".button");

const executeCodes = () => {
  //if cookie contains codinglab it will be returned and below of this code will not run
  if (document.cookie.includes("codinglab")) return;
  cookieBox.classList.add("show");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookieBox.classList.remove("show");

      //if button has acceptBtn id
      if (button.id == "acceptBtn") {
        //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
        document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
      }
    });
  });
};

//executeCodes function will be called on webpage load
window.addEventListener("load", executeCodes);



