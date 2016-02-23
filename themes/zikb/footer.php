	<script type="text/javascript">
		(function (){
			var burger = document.getElementById('burger'),
			header = document.querySelector('body > header'),
			nav = document.getElementById('nav'),
			top,
			focus = false;

			burger.addEventListener('click', function(){
				var defautlTop = (parseInt(nav.style.top)) || parseInt(window.getComputedStyle(nav, null).top),
				headHeight = parseInt(header.style.height || header.offsetHeight || window.getComputedStyle(header, null).getPropertyValue('height')),
				intervalId = window.setInterval(animateTo, .1);

				nav.style.opacity += 0; 
				console.log(defautlTop+' >= '+ top)

				function animateTo(){
					top = (parseInt(nav.style.top)) || parseInt(window.getComputedStyle(nav, null).top);
					if (!focus){
						if (parseInt(top) >=  headHeight){
							window.clearInterval(intervalId);
							focus = true;
							return;
						}
						nav.style.top = (top + 1) + 'px';
						nav.style.opacity = (parseInt(nav.style.opacity) + 0.5); 
					
					}else{
						if (defautlTop >= parseInt(top)){
							window.clearInterval(intervalId);
							focus = false;
							return;
						}
						nav.style.top = (top - 1) + 'px';
						// nav.style.opacity = (parseInt(nav.style.opacity) - 0.5); 
					}
				}
			});
		})(document.readyState || window.onload)


	</script>
	</body>
</html>