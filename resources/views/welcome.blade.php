<x-layout>
  <div class="container mx-auto py-12">
      <div class="flex flex-col lg:flex-row items-center">
        <div class="lg:w-7/12 py-6 lg:py-12">
          <h1 class="text-4xl lg:text-6xl font-bold mb-4">Remember Writing?</h1>
          <p class="text-lg text-gray-600">Are you sick of short tweets and impersonal &ldquo;shared&rdquo; posts that are reminiscent of the late 90&rsquo;s email forwards? We believe getting back to actually writing is the key to enjoying the internet again.</p>
        </div>
        <div class="lg:w-5/12 lg:pl-12 py-6 lg:py-12">
          <form action="#" method="POST" id="registration-form" class="space-y-4">
            <div>
              <label for="username-register" class="block text-gray-600 text-sm mb-1">Username</label>
              <input name="username" id="username-register" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="Pick a username" autocomplete="off" />
            </div>

            <div>
              <label for="email-register" class="block text-gray-600 text-sm mb-1">Email</label>
              <input name="email" id="email-register" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="text" placeholder="you@example.com" autocomplete="off" />
            </div>

            <div>
              <label for="password-register" class="block text-gray-600 text-sm mb-1">Password</label>
              <input name="password" id="password-register" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" placeholder="Create a password" />
            </div>

            <div>
              <label for="password-register-confirm" class="block text-gray-600 text-sm mb-1">Confirm Password</label>
              <input name="password" id="password-register-confirm" class="w-full border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" placeholder="Confirm password" />
            </div>

            <button type="submit" class="w-full py-3 mt-4 bg-green-500 text-white text-lg font-semibold rounded-lg hover:bg-green-600">Sign up for OurApp</button>
          </form>
        </div>
      </div>
    </div>
</x-layout>
