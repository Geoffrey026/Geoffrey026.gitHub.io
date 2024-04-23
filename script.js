document.addEventListener("DOMContentLoaded", function () {
    const imageContainers = document.querySelectorAll(".image-container");
  
    imageContainers.forEach(function (container) {
      container.addEventListener("click", function () {
        if (container.requestFullscreen) {
          container.requestFullscreen();
        } else if (container.mozRequestFullScreen) { /* for browser Firefox */
          container.mozRequestFullScreen();
        } else if (container.webkitRequestFullscreen) { /*for browser Chrome & Opera */
          container.webkitRequestFullscreen();
        } else if (container.msRequestFullscreen) { /* for broser Edge */
          container.msRequestFullscreen();
        }
      });
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.hamburger-menu').addEventListener('click', function() {
      this.classList.toggle('change');
      document.querySelector('.nav-links').classList.toggle('active');
    });
  });
  