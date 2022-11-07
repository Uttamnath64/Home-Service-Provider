<?php
	session_start();
	$nav=1;
	require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home | Home Service Provider</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=5.0, user-scalable=0">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body style="padding: 0px 100px 0px 100px;">
<?php
include 'header.php';
?>
	<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Introducing 
        <br class="hidden lg:inline-block">Home Service Provider
      </h1>
      <p class="mb-8 leading-relaxed">Home Service Provider, The platform helps customers book reliable home services like beauty services, plumbing, carpentry, appliance repair, painting etc.</p>
      <div class="flex justify-center">
      	<?php
      		if (isset($_SESSION["provider_id"])) { ?>
      			<a href="service.php" class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Get started</a>
      		<?php }else{
      	?>
        <a href="signup.php" class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Sign Up</a>
        <a href="signin.php" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Sign In</a>
    <?php } ?>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://www.odtap.com/wp-content/uploads/2019/03/home-services.png">
    </div>
  </div>
</section>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
          <circle xmlns="http://www.w3.org/2000/svg" cx="12" cy="7" r="4"/>
        </svg>
      </div>
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Customer WebApp</h2>
        <p class="leading-relaxed text-base">User-friendly customer WebApp help in easy on-demand service booking with only a few taps.</p>
        <a href="http://localhost/hsp_web/home.php" class="mt-3 text-yellow-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
    <div class="flex items-center lg:w-3/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Service Provider</h2>
        <p class="leading-relaxed text-base">Service providers can easily manage customer requests to deliver an immaculate experience.</p>
        <a href="service.php" class="mt-3 text-yellow-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
      <div class="sm:w-32 sm:order-none order-first sm:h-32 h-20 w-20 sm:ml-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
          <circle xmlns="http://www.w3.org/2000/svg" cx="12" cy="7" r="4"/>
        </svg>
      </div>
    </div>
    <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
      <div class="sm:w-32 sm:h-32 h-20 w-20 sm:mr-10 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 flex-shrink-0">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="sm:w-16 sm:h-16 w-10 h-10" viewBox="0 0 24 24">
          <path d="M11.19,0.36 L4.19,3.47 C3.47,3.79 3,4.51 3,5.3 L3,10 C3,15.55 6.84,20.74 12,22 C17.16,20.74 21,15.55 21,10 L21,5.3 C21,4.51 20.53,3.79 19.81,3.47 L12.81,0.36 C12.3,0.13 11.7,0.13 11.19,0.36 Z M12,10.99 L19,10.99 C18.47,15.11 15.72,18.78 12,19.93 L12,11 L5,11 L5,5.3 L12,2.19 L12,10.99 Z" id="🔹-Icon-Color" fill="#1D1D1D"></path>
                
          <circle cx="12" cy="7" r="4"></circle>
        </svg>
      </div>
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Security</h2>
        <p class="leading-relaxed text-base"> “Personal information” identify or contact you such as: name, address, email address, phone number etc. are security</p>
        <a href="about_us.php" class="mt-3 text-yellow-500 inline-flex items-center">Learn More
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
            <path d="M5 12h14M12 5l7 7-7 7"></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>
<?php
include 'bottom.php';
?>
</body>
</html>
