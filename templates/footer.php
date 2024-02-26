<div class="text-center"><em>&copy; 2015</em> @MAPHBECO</div>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script>
	function toggleMenu(act) {
		var menuHolder = document.getElementById('menuHolder')
		if (act === 'showMenu') {
			menuHolder.classList.add('menuToggle')
		} else {
			menuHolder.classList.remove('menuToggle')
		}
	}

	var scrollNav = document.getElementById('scrollNav')
	var scrollNavActive = false
	window.addEventListener('scroll', function() {
		if (window.scrollY > 200) {
			if (!scrollNavActive) {
				scrollNavActive = true
				console.log('enabled')
				scrollNav.classList.add('showScrollNav')
				// Show scrollNav
			}
		} else {
			if (scrollNavActive) {
				// Hide scrollNav
				scrollNavActive = false
				console.log('disabled')
				scrollNav.classList.remove('showScrollNav')
			}
		}
	})
</script>

</html>
