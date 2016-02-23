	<script type="text/javascript">
		(function (){
			var burger = document.getElementById('burger'),
			header = document.querySelector('body > header'),
			nav = document.getElementById('nav'),
			top,
			focus = false;

			burger.addEventListener('click', function(){
				var intervalId = window.setInterval(animateTo, .1),
				headHeight = parseInt(header.style.height || header.offsetHeight || window.getComputedStyle(header, null).getPropertyValue('height'));
				console.log(headHeight)
				nav.style.opacity += 0; 


				function animateTo(){
					top = (parseInt(nav.style.top)) || parseInt(window.getComputedStyle(nav, null).top);
					nav.style.top = (top + 1) + 'px';
					nav.style.opacity = (parseInt(nav.style.opacity) + 0.5); 
					if (parseInt(top) >=  headHeight)
						window.clearInterval(intervalId);
					
					console.log(parseInt(top) +' <= '+ headHeight );
				}
			});
		})(document.readyState || window.onload)


	</script>
	</body>
</html>