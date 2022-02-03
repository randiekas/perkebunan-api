<?php
/*
<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view("components/head"); ?>
<body>
    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader" style="display:none">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->
		<?php $this->load->view("components/header") ?>
        
    <?php $this->load->view($page) ?>
    <?php $this->load->view("components/footer") ?>
    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->
</div><!-- page end -->
<?php $this->load->view("components/foot") ?>
</body>
</html>
*/
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
	<div class="max-w-7xl mx-auto">
	  <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
		<svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
		  <polygon points="50,0 100,0 50,100 0,100" />
		</svg>
  
		<div>
		  <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
			<nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
			  <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
				<div class="flex items-center justify-between w-full md:w-auto">
				  <a href="#">
					<img class="h-8 w-auto sm:h-10" src="/logo.png">
				  </a>
				  <div class="-mr-2 flex items-center md:hidden">
					<button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
					  <span class="sr-only">Open main menu</span>
					  <!-- Heroicon name: outline/menu -->
					  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					  </svg>
					</button>
				  </div>
				</div>
			  </div>
			  <div class="hidden md:block md:ml-10 md:pr-4 md:space-x-8">
				<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Home</a>
  
				<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Products</a>
  
				<a href="#" class="font-medium text-gray-500 hover:text-gray-900">Customers</a>
  
  
				
			  </div>
			</nav>
		  </div>
  
		  <!--
			Mobile menu, show/hide based on menu open state.
  
			Entering: "duration-150 ease-out"
			  From: "opacity-0 scale-95"
			  To: "opacity-100 scale-100"
			Leaving: "duration-100 ease-in"
			  From: "opacity-100 scale-100"
			  To: "opacity-0 scale-95"
		  -->
		 
		</div>
  
		<main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
		  <div class="sm:text-center lg:text-left">
			<h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
			  <span class="block xl:inline">Yours</span><br/>
			  <span class="block text-indigo-600 xl:inline">Partner Solution</span>
			</h1>
			<p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
				PT Adiwangsa Sukses Sejahtera was established on June 4th, 2018. Notarial Deed number 01 Merry Langoy, SH., M.Kn. <br/><br/>
				At the beginning of establishment PT Adiwangsa Sukses Sejahtera operates in the distribution of Natural Latex and trading of general chemicals for local industry<br/><br/>
				Along the increasing demand of Natural Latex from the international market, in January 2019 PT Adiwangsa Sukses Sejahtera disclose the new department for Export & Import. Including on Export & Import is Logistic Service.
				Which has the aim to improve the service and optimize the quality of products towards the customers.
			</p>
			<div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
			  <div class="rounded-md shadow">
				<a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
					Contact: +62 8129 517 715
				</a>
			  </div>
			  <div class="mt-3 sm:mt-0 sm:ml-3">
				<a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
					marketing@asschem.id
				</a>
			  </div>
			</div>
			
		  </div>
		</main>
	  </div>
	</div>
	<div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
	  <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="/banner.png" alt="">
	</div>
  </div>


  <!-- product -->

  <div class="bg-gray-100">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
	  <div class="max-w-2xl mx-auto py-16 sm:py-24 lg:py-32 lg:max-w-none">
		<h2 class="text-2xl font-extrabold text-gray-900">Our Products</h2>
  
		<div class="mt-6 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-x-6">
		  <div class="group relative">
			<div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
			  <img src="/product-1.jpg" alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug." class="w-full h-full object-center object-cover">
			</div>
			<h3 class="mt-6 text-sm text-gray-500">
			  <a href="#">
				<span class="absolute inset-0"></span>
				Available : 25% and 50%
			  </a>
			</h3>
			<p class="text-base font-semibold text-gray-900">Sulfuric Acid</p>
		  </div>
  
		  <div class="group relative">
			<div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
			  <img src="/product-2.jpg" alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant." class="w-full h-full object-center object-cover">
			</div>
			<h3 class="mt-6 text-sm text-gray-500">
			  <a href="#">
				<span class="absolute inset-0"></span>
				Available: 8%, 10% and 12% 
			  </a>
			</h3>
			<p class="text-base font-semibold text-gray-900">Polyaluminium Chloride</p>
		  </div>
  
		  <div class="group relative">
			<div class="relative w-full h-80 bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
			  <img src="/product-3.jpg" alt="Collection of four insulated travel bottles on wooden shelf." class="w-full h-full object-center object-cover">
			</div>
			<h3 class="mt-6 text-sm text-gray-500">
			  <a href="#">
				<span class="absolute inset-0"></span>
				-
			  </a>
			</h3>
			<p class="text-base font-semibold text-gray-900">Natural Latex</p>
		  </div>
		</div>
	  </div>
	</div>
  </div>


  <div class="bg-white">
	<div class="pt-6">
	
	  <nav aria-label="Breadcrumb">
		  
		<ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
		  <li>
			<h2 class="text-2xl font-extrabold text-gray-900">Our Happy Customers</h2>
		  </li>
  
		
		</ol>
	  </nav>
  
	  <!-- Image gallery -->
	  <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
		<div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
		  <img src="/images/pt-1.jpeg" alt="Two each of gray, white, and black shirts laying flat." class="w-full h-full object-center object-cover">
		</div>
		<div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
		  <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
			<img src="/images/pt-2.png" alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
		  </div>
		  <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
			<img src="/images/pt-3.png" alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
		  </div>
		</div>
		<div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
		  <img src="/images/pt-4.png" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
		</div>
		<div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
			<img src="/images/pt-5.png" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
		</div>
		<div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
			<img src="/images/pt-6.jpeg" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
		</div>
		<div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
			<img src="/images/pt-7.png" alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
		</div>
	  </div>
  
	  <!-- Product info -->
	  <div class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
		<div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
		  <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">
			Contact US
		  </h1>
		</div>
  
  
		<div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
		  <!-- Description and details -->
		  <div>
			<h3 class="sr-only">Description</h3>
  
			<div class="space-y-6">
			  <p class="text-base text-gray-900">
				Head Office - Jl. Bima Duta 6 No 28 <br/>
				Dukuh Bima Duta Kota Legenda <br/>
				Lambangsari Tambun Bekasi <br/>
				Jawa Barat
			  </p>
			</div>
		  </div>
  
		  <div class="mt-10">
  
			<div class="mt-4">
			  <ul role="list" class="pl-4 list-disc text-sm space-y-2">
				<li class="text-gray-400"><span class="text-gray-600">+62 8129 517 715</span></li>
  
				<li class="text-gray-400"><span class="text-gray-600">marketing@asschem.id</span></li>
  
				<li class="text-gray-400"><span class="text-gray-600">https://asschem.id/</span></li>
  
				<li class="text-gray-400"><span class="text-gray-600">Mon to Sat - 9:00am to 6:00pm
					(Sunday Closed)</span></li>
			  </ul>
			</div>
		  </div>
  
		
		</div>
	  </div>
	</div>
  </div>

</body>
</html>
