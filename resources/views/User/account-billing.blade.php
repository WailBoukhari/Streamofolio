<x-main>
      <div class="pt-12 pb-20 lg:pb-44 lg:pt-24 xl:pt-[105px]">
        <div class="container">

          <nav class="mb-7 border-b border-gray-50 pb-6 dark:border-gray-600 sm:mb-8 sm:pb-7 md:mb-10 md:pb-8 lg:mb-12 lg:pb-10 xl:mb-14 xl:pb-12">
            <ul class="flex flex-col flex-wrap gap-y-4 gap-x-6 xl:gap-x-10 font-bold uppercase tracking-tighter sm:flex-row sm:justify-center md:text-lg">
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-info.html">Personal Info</a>
              </li>
              <li>
                <a class="transition-all text-primary" href="_str2-account-billing.html">Billing Details</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-shipping.html">Shipping Details</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-orders.html">Orders</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="#.html">Logout</a>
              </li>
            </ul>
          </nav>

          <form class="grid grid-cols-12 gap-y-7 gap-x-5 md:gap-x-6 lg:gap-x-7.5" action="#">
            <div class="col-span-full md:col-span-4">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-first-name">First Name
                <span class="text-primary">*</span>
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full" type="text" name="billing-first-name" id="billing-first-name" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full md:col-span-4">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-last-name">Last Name
                <span class="text-primary">*</span>
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full" type="text" name="billing-last-name" id="billing-last-name" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full md:col-span-4">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-email">Email Address
                <span class="text-primary">*</span>
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full" type="email" name="billing-email" id="billing-email" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full md:col-span-4">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-phone">Phone Number
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full" type="tel" name="billing-phone" id="billing-phone" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full md:col-span-8">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-address-1">Full Address
                <span class="text-primary">*</span>
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full mb-3" type="text" name="billing-address-1" id="billing-address-1" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full md:col-span-4">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-country">Select Country
                <span class="text-primary">*</span>
              </label>
              <select class="w-full border-base px-4 tracking-tight text-gray-900 transition-all duration-150 bg-white bg-caret bg-[length:10px_6px] bg-[position:right_24px_center] focus:border-accent focus:outline-0 focus:ring-0 hover:cursor-pointer dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:bg-caret-white h-[60px]" name="billing-country" id="billing-country">
                <option value="0">United States</option>
                <option value="1">Italy</option>
                <option value="2">Spain</option>
                <option value="3">Germany</option>
              </select>

            </div>
            <div class="col-span-full md:col-span-3">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-state">Select State
                <span class="text-primary">*</span>
              </label>
              <select class="w-full border-base px-4 tracking-tight text-gray-900 transition-all duration-150 bg-white bg-caret bg-[length:10px_6px] bg-[position:right_24px_center] focus:border-accent focus:outline-0 focus:ring-0 hover:cursor-pointer dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:bg-caret-white h-[60px]" name="billing-state" id="billing-state">
                <option value="0">California</option>
                <option value="1">Texas</option>
                <option value="2">Florida</option>
                <option value="3">Alaska</option>
              </select>

            </div>
            <div class="col-span-full md:col-span-3">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-city">Select City
                <span class="text-primary">*</span>
              </label>
              <select class="w-full border-base px-4 tracking-tight text-gray-900 transition-all duration-150 bg-white bg-caret bg-[length:10px_6px] bg-[position:right_24px_center] focus:border-accent focus:outline-0 focus:ring-0 hover:cursor-pointer dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:bg-caret-white h-[60px]" name="billing-city" id="billing-city">
                <option value="0">New York</option>
                <option value="1">Texas</option>
                <option value="2">Florida</option>
                <option value="3">Alaska</option>
                <option value="4">California</option>
              </select>

            </div>
            <div class="col-span-full md:col-span-2">
              <label class="block text-sm font-bold uppercase tracking-tight text-gray-900 dark:text-white [&:not(:empty)]:mb-2.5" for="billing-zip">ZIP Code
                <span class="text-primary">*</span>
              </label>
              <input class="group-[.is-success]:bg-input-success-dark group-[.is-error]:border-danger group-[.is-error]:bg-input-invalid group-[.is-error]:text-danger group-[.is-success]:pr-16 group-[.is-invalid]:pr-16 px-4 py-2 border-base bg-white bg-[length:18px_18px,_38px_38px] bg-[position:right_16px_center,_right_6px_center] bg-no-repeat font-medium leading-8 tracking-tight text-gray-900 transition-all duration-150 placeholder:font-normal placeholder:text-gray-500/60 focus:border-accent focus:bg-white focus:text-gray-900 focus:outline-0 focus:ring-0 dark:border-gray-600 dark:group-[.is-success]:bg-input-success dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500/80 dark:focus:border-accent dark:focus:bg-gray-900 w-full" type="number" name="billing-zip" id="billing-zip" value="" placeholder="">
              <p class="group-[.is-error]:block mt-2 hidden text-xs text-danger">

              </p>
            </div>
            <div class="col-span-full lg:col-start-10 lg:col-span-3 pt-2">
              <button type="submit" class="inline-flex text-center font-bold leading-none transition-colors uppercase justify-center gap-x-3 py-4 px-4 md:py-[18px] lg:px-8 text-sm text-white bg-primary hover:bg-primary/90 w-full">
                Save Address

              </button>
            </div>
          </form>


        </div>
      </div>
</x-main>