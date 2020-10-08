<!-- Footer -->   
@if(Request::path() === 'home')
	<footer class="py-4 bg-dark">

@elseif(request()->segment(1) === 'car')
	<footer class="py-4 bg-dark" style="position: static; width: 100%; bottom: 0;">

@elseif(request()->segment(1) === 'checkout')
	<footer class="py-4 bg-dark" style="position: absolute; width: 100%; bottom: 0;">	

@endif

		<div class="container">
        	<p class="m-0 text-center text-white">Copyright &copy; SuperCars 2020</p>
      	</div>
    </footer>