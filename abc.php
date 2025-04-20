<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ParkSavvy - Smart Parking</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @keyframes floatUpDown {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
    #float-animation {
      animation: floatUpDown 3s ease-in-out infinite;
    }
    </style>
</head>
<body class="bg-gradient-to-b from-white to-blue-50 min-h-screen font-sans relative ">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 lg:px-20 py-6 bg-white shadow fixed w-full top-0 z-50">
    <h1 class="text-3xl font-bold text-sky-800">ParkSavvy</h1>
    <ul class="hidden md:flex space-x-10 text-gray-800 font-medium text-xl">
      <li><a href="#feature" class="hover:text-sky-600">Features</a></li>
      <li><a href="#work" class="hover:text-sky-600">How It Works</a></li>
      <li><a href="#app" class="hover:text-sky-600">App</a></li>
      <li><a href="#pricing" class="hover:text-sky-600">Pricing</a></li>
      <li><a href="#contact" class="hover:text-sky-600">Contact</a></li>
    </ul>
    <div class="space-x-6">
      <a href="looogin.php"><button class="border border-sky-700 text-sky-700 px-6 py-3 rounded text-lg hover:bg-sky-100">Log in</button></a>
      <a href ="sssign.php"><button class="bg-sky-700 text-white px-6 py-3 rounded text-lg hover:bg-sky-800">Sign Up</button></a>
    </div>
  </nav>

  <section class="flex flex-col lg:flex-row items-center justify-between pt-40 pb-20 gap-16 w-full min-h-screen relative z-10">

    <div class="absolute inset-0 w-full h-full -z-10 overflow-hidden">
      <video autoplay muted loop playsinline class="w-full h-full object-cover">
        <source src="bbb.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    </div>

    <!-- left  -->
    <div class="w-full lg:w-1/2 px-10 lg:px-20 space-y-8 text-white">
      <h2 class="text-6xl md:text-7xl font-extrabold leading-tight">
        Smart Parking for <span class="text-sky-200">Smarter Cities</span>
      </h2>
      <p class="text-xl md:text-2xl text-gray-200">
        Find, reserve, and pay for parking spots in real-time. Save time, reduce traffic, and make parking stress-free.
      </p>
      <div class="flex flex-wrap gap-6">
        <a href="looogin.php" class="inline-block">
          <button class="border border-white text-white px-10 py-4 rounded-xl hover:bg-white hover:text-sky-700 text-xl font-semibold flex items-center gap-3">
              Get Started
              <span class="text-2xl">&rarr;</span>
          </button>
      </a>
      </div>
      <div class="flex items-center space-x-4 pt-6">
        <div class="flex space-x-2">
          <div class="w-7 h-7 rounded-full bg-sky-200"></div>
          <div class="w-7 h-7 rounded-full bg-sky-200"></div>
          <div class="w-7 h-7 rounded-full bg-sky-200"></div>
          <div class="w-7 h-7 rounded-full bg-sky-200"></div>
        </div>
        <div>
          <p class="text-lg font-semibold text-white">2000+ Happy Users</p>
          <p class="text-sm text-gray-300">Join our community</p>
        </div>
      </div>
    </div>

    <!-- rgt -->
    <div id="float-animation" class="w-1/3 lg:w-1/3 flex justify-center px-10 lg:px-20">
      <div class="w-full max-w-xl shadow-2xl rounded-3xl bg-white p-8">
        <div class="bg-blue-50 rounded-2xl p-6 space-y-6">
          <div class="flex justify-between items-center">
            <h3 class="text-sky-900 font-bold text-2xl">Current Location</h3>
            <span class="text-sm text-white bg-sky-600 rounded-full px-3 py-1">Live</span>
          </div>
          <div class="flex items-center bg-white rounded-xl shadow px-5 py-3 space-x-4">
            <div class="w-5 h-5 rounded-full bg-sky-600"></div>
            <p class="text-gray-700 text-lg">Downtown Parking Garage</p>
          </div>
          <div class="h-32 bg-gray-200 rounded-xl relative">
            <div class="absolute bottom-3 right-3 bg-white p-3 rounded-full shadow">
              <div class="w-6 h-6 rounded-full bg-sky-500"></div>
            </div>
          </div>
          <div class="flex space-x-4 pt-4">
            <button class="bg-sky-700 text-white flex-1 py-3 rounded-xl hover:bg-sky-800 text-lg">Reserve Spot</button>
            <button class="border border-sky-700 text-sky-700 flex-1 py-3 rounded-xl hover:bg-sky-100 text-lg">See Details</button>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- next section -->
  <section id="feature" class="px-6 py-16 bg-gray-200 text-center">
    <br><br><br>
    <h2 class="text-4xl font-bold text-gray-900 mb-4">Smart Features for a Seamless Experience</h2>
    <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">
      Our innovative parking solution makes finding and paying for parking spots effortless and efficient.
    </p>
  
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-blue-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-black text-xl">🎯</span>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Real-time Availability</h3>
        <p class="text-gray-600 mt-2">
          Find available parking spots in real-time with accurate occupancy data.
        </p>
      </div>
  
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-green-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-green-600 text-xl">🕒</span>
        </div>
        <h3 class="text-xl font-semibold text-blue-600">Advance Booking</h3>
        <p class="text-gray-600 mt-2">
          Reserve parking spots in advance to guarantee availability.
        </p>
      </div>
  
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-yellow-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-yellow-600 text-xl">💳</span>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Contactless Payment</h3>
        <p class="text-gray-600 mt-2">
          Pay for parking digitally through the app without physical tickets.
        </p>
      </div>
  
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-indigo-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-indigo-600 text-xl">🔍</span>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Intelligent Search</h3>
        <p class="text-gray-600 mt-2">
          Quickly find parking based on your location, preferences, and past behavior.
        </p>
      </div>
  
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-green-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-green-700 text-xl">🌱</span>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Emissions Reduction</h3>
        <p class="text-gray-600 mt-2">
          Reduce traffic and emissions by optimizing your parking route.
        </p>
      </div>
  
      <div class="p-6 bg-white rounded-xl shadow hover:shadow-md transition duration-300 ease-in-out transform hover:scale-105">
        <div class="bg-red-100 w-12 h-12 flex items-center justify-center rounded-md mb-4 mx-auto">
          <span class="text-red-600 text-xl">🔔</span>
        </div>
        <h3 class="text-xl font-semibold text-gray-900">Alerts & Notifications</h3>
        <p class="text-gray-600 mt-2">
          Get notified about available spots, bookings, and expiry reminders.
        </p>
      </div>
    </div>
  </section>
  <section id="work" id="#W" class="px-6 py-16 bg-white text-center"><br><br><br>
    <h1 class="text-3xl font-bold text-gray-900 mt-10">How ParkSavvy Works</h1>
    <p class="text-gray-500 text-lg mb-12">Our simple 4-step process makes parking easy and efficient</p>
  
    <div class="flex flex-wrap justify-center gap-10 px-4">
      <div class="max-w-xs bg-white rounded-xl shadow-md p-6 transition duration-300 ease-in-out transform hover:scale-105">
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-blue-500 flex items-center justify-center shadow text-white text-2xl">
          🔍
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Find a Spot</h2>
        <p class="text-gray-600">Search for available parking spots near your destination in real-time.</p>
      </div>
  
      <div class="max-w-xs bg-white rounded-xl shadow-md p-6 transition duration-300 ease-in-out transform hover:scale-105">
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-teal-500 flex items-center justify-center shadow text-white text-2xl">
          📍
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Reserve</h2>
        <p class="text-gray-600">Select and reserve your preferred parking spot in advance.</p>
      </div>
  
      <div class="max-w-xs bg-white rounded-xl shadow-md p-6 transition duration-300 ease-in-out transform hover:scale-105">
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-yellow-500 flex items-center justify-center shadow text-white text-2xl">
          ⏰
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Park</h2>
        <p class="text-gray-600">Arrive at the parking spot during your reserved time slot.</p>
      </div>
  
      <div class="max-w-xs bg-white rounded-xl shadow-md p-6 transition duration-300 ease-in-out transform hover:scale-105">
        <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-indigo-500 flex items-center justify-center shadow text-white text-2xl">
          💳
        </div>
        <h2 class="text-xl font-semibold text-gray-900 mb-2">Pay</h2>
        <p class="text-gray-600">Make contactless payment through the app with various payment methods.</p>
      </div>
    </div>
  
    <div class="bg-white rounded-xl shadow-md max-w-3xl mx-auto mt-16 p-6 flex items-center gap-6 transition duration-300 ease-in-out transform hover:scale-105">
      <div class="bg-blue-100 text-blue-700 text-2xl rounded-full w-14 h-14 flex items-center justify-center">
        %
      </div>
      <div class="text-left">
        <h3 class="text-lg font-semibold text-gray-900">Special Introductory Offer</h3>
        <p class="text-gray-700">Sign up now and get 20% off your first month of premium subscription!</p>
        <a href="#" class="text-blue-600 font-semibold hover:underline">Learn more →</a>
      </div>
    </div>
  </section>
  <!-- next sec -->
<section id="app"><br>
<section class="flex flex-col lg:flex-row items-center justify-center gap-16 px-20 py-20  mx-auto bg-gray-200">
  <!-- phone -->
  <div class="relative w-[360px] h-[650px] bg-white rounded-3xl shadow-xl border-[6px] border-slate-900 overflow-hidden ">
    
    <div class="bg-sky-700 p-6 text-white flex flex-col">
      <span class="text-sm text-blue-200">Current Location</span>
      <div class="flex justify-between items-center">
        <h2 class="font-bold text-lg">Downtown Area</h2>
        <div class="w-6 h-6 bg-white rounded-full border-2 border-solid border-black"></div>
      </div>
      <input
        type="text"
        placeholder="Find parking near..."
        class="mt-3 w-full p-2 rounded-md bg-sky-700 text-white "
      />
    </div>
   
<div class="bg-[#f1f6fd] flex-1 flex items-center justify-center relative">
  <div class="relative w-full h-full"><br>
  
    <div class="absolute top-1/2 left-1/2 w-16 h-16 bg-sky-700/20 rounded-full -translate-x-1/2 -translate-y-1/2"></div><br>
    <div class="absolute top-1/2 left-1/2 w-8 h-8 border-[6px] border-sky-700 rounded-full -translate-x-1/2 -translate-y-1/2"></div>

    <div class="absolute top-[38%] left-[60%] w-5 h-5 border-[3px] border-teal-500 rounded-full"></div><br>

    <div class="absolute bottom-[30%] left-[40%] w-6 h-6 border-[4px] border-gray-400 rounded-full"></div><br><br>

    <div class="absolute top-[30%] right-[35%] w-6 h-6 border-[4px] border-blue-500 rounded-full"></div>
  </div>
</div>
<br>
    <div class="bg-white p-4">
      <p class="text-sm text-gray-500 mb-1">Nearby Parking (3)</p><br>
      <div class="bg-white p-3 rounded-xl border">
        <div class="flex justify-between items-center mb-1">
          <h3 class="font-semibold text-gray-900">City Center Garage</h3>
          <span class="text-sky-700 font-medium">$4/hr</span>
        </div>
        <p class="text-gray-500 text-sm">0.3 miles away</p>
        <p class="text-green-600 text-sm font-medium mb-2">12 spots available</p>
        <button class="w-full bg-sky-700 text-white py-2 rounded-md">Reserve</button>
      </div>
      <br>
      <div class="mt-4 grid grid-cols-2 gap-2 text-sm text-gray-700">
        <div class="bg-gray-100 p-2 rounded-md">West Street Lot<br><span class="text-xs text-gray-500">0.5 miles</span></div>
        <div class="bg-gray-100 p-2 rounded-md">Main St Parking<br><span class="text-xs text-gray-500">0.7 miles</span></div>
      </div>
    </div>
  </div>

  <!-- rgt -->
  <div class="max-w-xl text-left">
    <span class="bg-blue-100 text-blue-700 text-sm font-medium px-3 py-1 rounded-full">Mobile App</span>
    <h2 class="text-4xl font-bold text-gray-900 mt-4">Parking Made Simple with Our Mobile App</h2>
    <p class="text-gray-600 text-lg mt-4">Download our user-friendly app and transform your parking experience with just a few taps.</p>

    <ul class="mt-6 space-y-3">
      <li class="flex items-center gap-3">
        <span class="text-green-500 text-xl">✔</span>
        <span>Real-time parking availability</span>
      </li>
      <li class="flex items-center gap-3">
        <span class="text-green-500 text-xl">✔</span>
        <span>Secure in-app payments</span>
      </li>
      <li class="flex items-center gap-3">
        <span class="text-green-500 text-xl">✔</span>
        <span>Reservation management</span>
      </li>
      <li class="flex items-center gap-3">
        <span class="text-green-500 text-xl">✔</span>
        <span>Parking history and receipts</span>
      </li>
      <li class="flex items-center gap-3">
        <span class="text-green-500 text-xl">✔</span>
        <span>Navigation to your parking spot</span>
      </li>
    </ul>

    <div class="flex gap-4 mt-8">
      <a href="#" class="bg-black text-white px-5 py-3 rounded-lg font-medium text-sm flex items-center gap-2">
        <svg class="w-5 h-5 fill-white" viewBox="0 0 384 512"><path d="M318.7 268.4c-4.3-4.9-8.8-10-13.4-15.2-20.8-23.4-42.5-47.7-42.5-78.3 0-30.9 18.7-45.2 29-53.4-15.7-23.1-40.1-26.2-48.8-26.6-20.8-2.1-40.5 12.3-51 12.3-10.6 0-27-12.1-44.4-11.7-22.8.3-44 13.2-55.8 33.8-24.2 41.9-6.2 103.8 17.3 137.8 11.4 16.7 25 35.4 42.7 34.7 17.1-.7 23.6-11.2 44.3-11.2 20.6 0 26.6 11.2 44.4 11 18.3-.3 29.9-17 40.9-33.2 13-19 18.4-37.4 18.7-38.4-1.2-.5-35.6-13.7-35.9-54.2-.3-33.9 27.6-49.5 28.9-50.3zM256 32c-14.7 1.1-31.4 10-41.6 22.1-9 10.7-16.8 28.5-13.8 45.1h.9c15.5 0 31.4-8.9 41.5-21.8 9.3-11.7 15.9-28.3 13-45.4z"/></svg>
        App Store
      </a>
      <a href="#" class="bg-black text-white px-5 py-3 rounded-lg font-medium text-sm flex items-center gap-2">
        <svg class="w-5 h-5 fill-white" viewBox="30 336.7 120.9 129.2"><path d="M153.8 421.2c-1.2-9-9.5-12.3-18.1-12.8-4.8-.3-9.5-.1-14.3-.2-4.5 0-7.2-2.3-7.3-7 0-9.4.1-18.7-.1-28.1 0-4.6 1.6-7 6.2-7 5.1 0 10.3.2 15.4-.1 7.5-.4 12.4-4.3 13.1-11.3.7-6.5-3.3-12-10-13.5-4.5-1.1-9.3-1.4-14-1.4H65.3c-6.8 0-13.6.1-20.4.1-1.2 0-2.4.1-3.5.4-5.2 1.5-8.3 5.3-8.3 10.6v114.1c0 4.6 2.5 7.9 6.5 9.8 1.6.8 3.4 1.1 5.2 1.1 22.1.1 44.2.1 66.3.1 6.3 0 12.5-.2 18.8-.2 1.4 0 2.8-.1 4.2-.2 7.3-.6 11.8-5.1 11.9-12.5-.1-6.5-.2-13-.3-19.6z"/></svg>
        Google Play
      </a>
    </div>
  </div>
</section>
</section>
<!-- lekalu -->
<section id="pricing" class="flex justify-center items-center min-h-screen bg-white pt-[100px]">
  <div class="text-center">
      <h1 class="text-3xl font-bold text-gray-900">Simple, Transparent <span class="text-sky-700">Pricing</span></h1>
      <p class="text-gray-600 mt-2">Choose the plan that fits your parking needs. No hidden fees, cancel anytime.</p>
      <div class="flex flex-wrap justify-center mt-8 gap-6">
          
          <div class="w-72 p-6 bg-white rounded-lg shadow-sm shadow-black">
              <h2 class="text-xl font-semibold text-gray-700">Basic</h2>
              <p class="text-3xl font-bold text-sky-700 mt-2">Free</p>
              <p class="text-gray-600 mt-2">Perfect for occasional parking needs</p>
              <button class="w-full mt-4 bg-gray-200 text-gray-700 py-2 rounded-lg font-medium">Get Started</button>
              
              <h3 class="mt-6 text-gray-800 font-semibold">WHAT'S INCLUDED</h3>
              <ul class="text-gray-600 mt-2 space-y-2">
                  <li>✅ Find parking spots near you</li>
                  <li>✅ Compare prices across locations</li>
                  <li>✅ Book parking in advance</li>
                  <li>✅ Mobile parking pass</li>
              </ul>
            </div>

          <div class="w-72 p-6 bg-white rounded-lg shadow-md border-2 border-sky-700 relative">
              <span class="absolute -top-3 right-3 bg-sky-700 text-white text-sm px-2 py-1 rounded-lg">Most Popular</span>
              <h2 class="text-xl font-semibold text-gray-700">Premium</h2>
              <p class="text-3xl font-bold text-sky-700 mt-2">$5.99<span class="text-sm font-normal">/mo</span></p>
              <p class="text-gray-600 mt-2">For frequent parkers seeking better deals</p>
              <button class="w-full mt-4 bg-sky-700 text-white py-2 rounded-lg font-medium">Try Premium</button>
              
              <h3 class="mt-6 text-gray-800 font-semibold">WHAT'S INCLUDED</h3>
              <ul class="text-gray-600 mt-2 space-y-2">
                  <li>✅ All Basic features</li>
                  <li>✅ Save up to 50% on parking fees</li>
                  <li>✅ Exclusive discounts</li>
                  <li>✅ Priority customer support</li>
                  <li>✅ Free cancellations up to 2 hours before</li>
              </ul>
          </div>

          <div class="w-72 p-6 bg-white rounded-lg shadow-sm shadow-black">
              <h2 class="text-xl font-semibold text-gray-700">Business</h2>
              <p class="text-3xl font-bold text-sky-700 mt-2">$12.99<span class="text-sm font-normal">/mo</span></p>
              <p class="text-gray-600 mt-2">For teams and companies with multiple vehicles</p>
              <button class="w-full mt-4 bg-gray-200 text-gray-700 py-2 rounded-lg font-medium">Contact Sales</button>
              
              <h3 class="mt-6 text-gray-800 font-semibold">WHAT'S INCLUDED</h3>
              <ul class="text-gray-600 mt-2 space-y-2">
                  <li>✅ All Premium features</li>
                  <li>✅ Multiple vehicle management</li>
                  <li>✅ Team billing & reporting</li>
                  <li>✅ Dedicated account manager</li>
                  <li>✅ API access for integration</li>
              </ul>
          </div>

      </div>
  </div>
</section>

<!-- contact sec -->
<!-- index.html -->
<section id="contact" class="bg-gray-100">
  <section class="py-20 px-4 max-w-6xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-900">Get in Touch</h2>
      <p class="text-gray-600 mt-2 text-lg">Have questions or need assistance? We're here to help!</p>
    </div>

    <div class="bg-white shadow-xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-3">
      <!-- Contact Info (left side) -->
      <div class="bg-sky-700 text-white p-8 md:col-span-1">
        <h3 class="text-3xl font-semibold mb-2">Contact Information</h3>
        <p class="mb-6">Fill out the form and our team will get back to you within 24 hours.</p>

        <div class="space-y-5 text-sm">
          <div class="flex gap-3">
            <span>📍</span>
            <div>
              <div class="font-semibold text-xl">Address</div>
              <div>123 Parking Street, City, 10001</div>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <span>📞</span>
            <div>
              <div class="font-semibold text-xl">Phone</div>
              <div>+1 (555) 123-4567</div>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <span>📧</span>
            <div>
              <div class="font-semibold text-xl">Email</div>
              <div>info@parksavvy.com</div>
            </div>
          </div>
          <div class="flex items-start gap-3">
            <span>⏰</span>
            <div>
              <div class="font-semibold text-xl">Office Hours</div>
              <div>Mon–Fri: 9AM – 5PM</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Contact Form (right side) -->
      <div class="md:col-span-2 p-8">
        <form class="space-y-6" method="POST" action="contact.php">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
              <label class="block mb-1 font-medium" for="fullName">Full Name</label>
              <input type="text" id="fullName" name="fullName" required placeholder="John Doe" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
              <label class="block mb-1 font-medium" for="emailAddress">Email Address</label>
              <input type="email" id="emailAddress" name="emailAddress" required placeholder="john@example.com" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
          </div>

          <div>
            <label class="block mb-1 font-medium" for="subjectText">Subject</label>
            <input type="text" id="subjectText" name="subjectText" required placeholder="How can we help you?" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <div>
            <label class="block mb-1 font-medium" for="messageArea">Message</label>
            <textarea rows="4" id="messageArea" name="messageArea" required placeholder="Your message here..." class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>

          <button type="submit" class="bg-sky-700 text-white px-6 py-3 rounded-md font-semibold hover:bg-sky-800 transition">Send Message</button>
        </form>
      </div>
    </div>
  </section>
</section>

      
<!-- footer sec -->
<footer class="bg-gray-900 text-gray-300 px-6 py-12">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
    
    <div>
      <h2 class="text-white text-xl font-semibold mb-2">ParkSavvy</h2>
      <p class="text-xl mb-4">Smart parking solutions for modern cities, making parking hassle-free and efficient.</p>
      <div class="flex space-x-3">

        <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-blue-600" aria-label="Facebook">
          <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 1 0-11.5 9.87v-7H8v-3h2.5V9.5A3.5 3.5 0 0 1 14 6h2v3h-2a1 1 0 0 0-1 1V12h3l-.5 3h-2.5v7A10 10 0 0 0 22 12z"/>
          </svg>
        </a>

        <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-blue-400" aria-label="Twitter">
          <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
            <path d="M22.46 6c-.77.35-1.6.59-2.46.7a4.27 4.27 0 0 0 1.88-2.36c-.83.5-1.75.86-2.72 1.05A4.24 4.24 0 0 0 11 8.04a12.06 12.06 0 0 1-8.77-4.45A4.23 4.23 0 0 0 3.2 9.7a4.25 4.25 0 0 1-1.92-.53v.05a4.25 4.25 0 0 0 3.4 4.17c-.45.12-.92.15-1.38.06a4.25 4.25 0 0 0 3.96 2.94 8.5 8.5 0 0 1-6.26 1.75A12 12 0 0 0 8.29 21c7.55 0 11.68-6.25 11.68-11.68v-.53A8.18 8.18 0 0 0 22.46 6z"/>
          </svg>
        </a>

        <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-pink-500" aria-label="Instagram">
          <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
            <path d="M7.75 2C4.58 2 2 4.58 2 7.75v8.5C2 19.42 4.58 22 7.75 22h8.5C19.42 22 22 19.42 22 16.25v-8.5C22 4.58 19.42 2 16.25 2h-8.5zm0 1.5h8.5c2.27 0 4.25 1.98 4.25 4.25v8.5c0 2.27-1.98 4.25-4.25 4.25h-8.5C5.48 20.5 3.5 18.52 3.5 16.25v-8.5C3.5 5.48 5.48 3.5 7.75 3.5zm9.25 2.75a.75.75 0 1 0 0 1.5.75.75 0 0 0 0-1.5zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 1.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7z"/>
          </svg>
        </a>

        <a href="#" class="bg-gray-800 p-2 rounded-full hover:bg-red-600" aria-label="YouTube">
          <svg class="w-5 h-5 fill-current text-white" viewBox="0 0 24 24">
            <path d="M10 15l5.19-3L10 9v6zm12-3c0-2.2-.2-3.5-.56-4.41a2.61 2.61 0 0 0-1.53-1.53C18.96 6.7 12 6.7 12 6.7s-6.96 0-7.91.36A2.61 2.61 0 0 0 2.56 8.59C2.2 9.5 2 10.8 2 13s.2 3.5.56 4.41a2.61 2.61 0 0 0 1.53 1.53c.95.36 7.91.36 7.91.36s6.96 0 7.91-.36a2.61 2.61 0 0 0 1.53-1.53c.36-.95.56-2.2.56-4.41z"/>
          </svg>
        </a>
      </div>
    </div>

    <div>
      <h3 class="text-white font-semibold mb-4">Quick Links</h3>
      <ul class="space-y-2 text-xl">
        <li><a href="#" class="hover:text-white">› Home</a></li>
        <li><a href="#" class="hover:text-white">› Features</a></li>
        <li><a href="#" class="hover:text-white">› How It Works</a></li>
        <li><a href="#" class="hover:text-white">› Pricing</a></li>
        <li><a href="#" class="hover:text-white">› Contact</a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-white font-semibold mb-4">Resources</h3>
      <ul class="space-y-2 text-xl">
        <li><a href="#" class="hover:text-white">› Blog</a></li>
        <li><a href="#" class="hover:text-white">› Help Center</a></li>
        <li><a href="#" class="hover:text-white">› API Documentation</a></li>
        <li><a href="#" class="hover:text-white">› Partner Program</a></li>
        <li><a href="#" class="hover:text-white">› Press Kit</a></li>
      </ul>
    </div>

    <div>
      <h3 class="text-white font-semibold mb-4">Newsletter</h3>
      <p class="text-xl mb-4">Subscribe to our newsletter for updates and news about our services.</p>
      <form class="flex">
        <input type="email" placeholder="Your email address" class="w-full p-2 rounded-l-md bg-gray-800 text-white focus:outline-none" />
        <button
        class="bg-sky-700 hover:bg-blue-700 px-4 rounded-r-md text-white font-semibold"
        onclick="alert('Thank you for subscribing!'); window.location.href='#';">
        Subscribe
      </button>
      </form>
    </div>
  </div>


  <div class="border-t border-gray-800 mt-12 pt-6 text-xl text-gray-500 flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto px-4">
    <p>© 2025 ParkSavvy. All rights reserved.</p>
    <div class="flex space-x-6 mt-4 md:mt-0">
      <a href="#" class="hover:text-white">Privacy Policy</a>
      <a href="#" class="hover:text-white">Terms of Service</a>
      <a href="#" class="hover:text-white">Cookie Policy</a>
    </div>
  </div>
</footer>
</body>
</html>
