@extends('master.master')

@section('content')

<div class="z-0 flex-1 w-full py-10 max-w-7xl mx-auto px-4">
	<div class="flex items-center justify-center min-h-full py-16 sm:py-24">
		<div class="max-w-md w-full space-y-8">
			<div>
				<h2 class="text-center text-3xl font-extrabold text-skin-inverted font-heading">Se connecter à son compte</h2>
			</div>


                 <div class="flex flex-col justify-center items-center py-8 px-6 mx-auto md:h-screen">
	<a class="flex justify-center items-center mb-8 text-3xl font-semibold lg:mb-10 dark:text-white" href="/">
		<span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
			<span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2740%27%20height=%2742%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span>
			<img alt="KGS" srcset="" src="#" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: contain;">
		</span>
		<span class="ml-3">KGS INFORMATIQUE</span>
	</a>


    <div class="flex items-start mb-6">
        <div class="flex items-center h-5">
            <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border-gray-300 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
        </div>
        <div class="ml-3 text-sm">
            <label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
        </div>
        <a class="ml-auto text-sm text-blue-700 dark:text-blue-500 hover:underline" href="/forgot-password/">Forgot Password?</a>
    </div>

	<div class="justify-center items-center w-full bg-white rounded-lg shadow lg:flex md:mt-0 lg:max-w-screen-sm xl:p-0 dark:bg-gray-800">




        <div class="p-6 w-full sm:p-8 lg:p-10">
			<h1 class="mb-3 text-2xl font-bold text-gray-900 lg:text-3xl dark:text-white">Sign in to your account</h1>
			<p class="mb-3 text-gray-500 dark:text-gray-400">
				Join our community of designers and developers to get access to hundreds of UI components, plugins, resources, and design systems.
			</p>
			<form class="mt-8">
				<div class="mb-6">
					<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
					<input required="" type="email" name="email" id="email" placeholder="name@company.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="">
				</div>
				<div class="mb-6">
					<label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
					<input required="" type="password" name="password" id="password" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="">
				</div>
				<div class="flex items-start mb-6">
					<div class="flex items-center h-5">
						<input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 bg-gray-50 rounded border-gray-300 focus:ring-3 focus:ring-blue-300 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
					</div>
					<div class="ml-3 text-sm">
						<label for="remember" class="font-medium text-gray-900 dark:text-white">Remember me</label>
					</div>
					<a class="ml-auto text-sm text-blue-700 dark:text-blue-500 hover:underline" href="/forgot-password/">Forgot Password?</a>
				</div>
				<div class="mb-6">
					<div>
						<div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;">
							<div class="grecaptcha-logo">
								<iframe title="reCAPTCHA" width="256" height="60" role="presentation" name="a-rohil3xdb39y" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcKn58eAAAAAFD-lFXQHCSkdJ9V76lq3KLyNygU&amp;co=aHR0cHM6Ly9mbG93Yml0ZS5jb206NDQz&amp;hl=fr&amp;type=image&amp;v=pxZcVU8Dk73FyvFvdCgp2MSG&amp;theme=light&amp;size=invisible&amp;badge=bottomright&amp;cb=y7t4otnkl4bp"></iframe>
							</div>
							<div class="grecaptcha-error"></div>
							<textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
						</div>
						<iframe style="display: none;"></iframe>
					</div>
				</div>
				<button class="text-white font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center mb-6 bg-blue-700" type="submit"><span class="flex justify-center items-center">Sign in to account</span></button>
				<div class="text-sm font-medium text-gray-500 dark:text-gray-400">
					pas encore inscrit ?
					<a class="ml-1 text-blue-700 hover:underline dark:text-blue-500" href="#">Créer votre compte </a>
				</div>
			</form>
		</div>
	</div>
</div>

			<div>
				<div class="relative">
					<div class="absolute inset-0 flex items-center">
						<div class="w-full border-t border-skin-base"></div>
					</div>
					<div class="relative flex justify-center text-sm">
						<span class="px-2 bg-skin-body text-skin-base font-normal">Ou continuer avec</span>
					</div>
				</div>
				<div class="mt-6">
					<div>
						<a href="auth/github/redirect" class="button inline-flex justify-center py-2 px-4 border border-skin-base rounded-md shadow-sm bg-skin-button text-sm text-skin-base hover:bg-skin-button-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500 w-full font-normal">
							<span class="sr-only">Continuer avec Github</span>
							<svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
								<path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
							</svg>
							Github
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




@endsection
