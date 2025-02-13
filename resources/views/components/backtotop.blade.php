<button
data-tooltip-target="tooltip-left" data-tooltip-placement="left"
id="back-to-top"
class="fixed bottom-4 right-8 p-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition-all duration-300 opacity-0 invisible"
aria-label="Back to Top"
>
<i class="fa-solid fa-chevron-up"></i>
</button>

<div id="tooltip-left" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-xs opacity-70 tooltip dark:bg-gray-700">
  Kembali ke Atas
  <div class="tooltip-arrow" data-popper-arrow></div>
</div>


<script>
  const backToTopButton = document.getElementById('back-to-top');

  // Show/hide the button based on scroll position
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      backToTopButton.classList.remove('opacity-0', 'invisible');
      backToTopButton.classList.add('opacity-100', 'visible');
    } else {
      backToTopButton.classList.remove('opacity-100', 'visible');
      backToTopButton.classList.add('opacity-0', 'invisible');
    }
  });

  // Smooth scroll to top
  backToTopButton.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  });
</script>