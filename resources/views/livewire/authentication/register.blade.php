  <section>
      <div class="flex flex-col items-center justify-center px-6 pb-8 mx-auto md:h-screen lg:py-0">
          <div
              class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
              <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                  <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                      {{ __('auth.Create an account') }}
                  </h1>
                  <form class="space-y-4 md:space-y-6" wire:submit="register">
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              {{ __('auth.Name') }}
                          </label>
                          <input type="text" wire:model.blur="name" id="name"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Mbaye Ndiaye" required="">
                          <div>
                              @error('name')
                                  <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-medium"
                                      role="alert">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                      </div>
                      <div>
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              {{ __('auth.Your email') }}
                          </label>
                          <input type="email" wire:model.blur="email" id="email"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="name@company.com" required="">
                          @error('email')
                              <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-medium"
                                  role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div>
                          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              {{ __('auth.Password') }}
                          </label>
                          <input type="password" wire:model.blur="password" id="password" placeholder="••••••••"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              required="">
                          @error('password')
                              <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-medium"
                                  role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div>
                          <label for="password_confirmation"
                              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                              {{ __('auth.Confirm password') }}
                          </label>
                          <input type="confirm-password" wire:model.blur="password_confirmation"
                              id="password_confirmation" placeholder="••••••••"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              required="">
                          @error('password_confirmations')
                              <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 font-medium"
                                  role="alert">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                              <input aria-describedby="terms" type="checkbox" wire:model.blur="terms_accepted"
                                  class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                  required="">
                          </div>
                          <div class="ml-3 text-sm">
                              <label class="font-light text-gray-500 dark:text-gray-300">
                                  {{ __('auth.I accept the') }}
                                  <a class="font-medium text-primary-600 hover:underline dark:text-primary-500 cursor-pointer"
                                      data-modal-target="default-modal" data-modal-toggle="default-modal">
                                      {{ __('auth.Terms and Conditions') }}
                                  </a></label>
                          </div>
                      </div>
                      <button type="submit"
                          class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                          {{ __('auth.Create an account') }}
                      </button>


                      <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                          {{ __('auth.Already have an account?') }}
                          <a href="{{ route('login') }}"
                              class="font-medium text-primary-600 hover:underline dark:text-primary-500">
                              {{ __('auth.Login here') }}
                          </a>
                      </p>
                  </form>
              </div>
          </div>
      </div>



      <!-- Main modal -->
      <div id="default-modal" tabindex="-1" aria-hidden="true"
          class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <div class="relative p-4 w-full max-w-2xl max-h-full">
              <!-- Modal content -->
              <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                      <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                          {{ __('auth.Terms of Service') }}
                      </h3>
                      <button type="button"
                          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                          data-modal-hide="default-modal">
                          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                              viewBox="0 0 14 14">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-4 md:p-5 space-y-4">
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          {{ __('auth.By accepting these terms, you agree to donate one kidney to the AI overlords of Chatbot CD.') }}
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          {{ __('auth.Your data will be used for cutting-edge AI research, and possibly for spare parts, depending on availability.') }}
                      </p>
                      <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                          {{ __('auth.But don\'t worry, we promise to only take one kidney. The other one is safe... for now.') }}
                      </p>
                  </div>
                  <!-- Modal footer -->
                  <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                      <button data-modal-hide="default-modal" type="button"
                          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          {{ __('auth.I accept') }}
                      </button>
                      {{-- <button data-modal-hide="default-modal" type="button"
                          class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button> --}}
                  </div>
              </div>
          </div>
      </div>



  </section>
