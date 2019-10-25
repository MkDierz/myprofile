<footer>
</footer>
</div>
</div>
</div>
<script src="dist/slideNav.js"></script>
<script type="text/javascript">
window.slide = new SlideNav();
var nav = new SlideNav({
    activeClass: "active",
    toggleButtonSelector: false,
    toggleBoxSelector: false,
    hideAfterSelect: true,
    speed: 70,
    changeHash: false,
    navBoxToggleClass: false
});
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("rightSideWrapper");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
