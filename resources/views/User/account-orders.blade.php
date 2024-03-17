<x-main>
    
      <div class="pt-12 pb-20 lg:pb-44 lg:pt-24 xl:pt-[105px]">
        <div class="container">

          <nav class="mb-7 border-b border-gray-50 pb-6 dark:border-gray-600 sm:mb-8 sm:pb-7 md:mb-10 md:pb-8 lg:mb-12 lg:pb-10 xl:mb-14 xl:pb-12">
            <ul class="flex flex-col flex-wrap gap-y-4 gap-x-6 xl:gap-x-10 font-bold uppercase tracking-tighter sm:flex-row sm:justify-center md:text-lg">
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-info.html">Personal Info</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-billing.html">Billing Details</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="_str2-account-shipping.html">Shipping Details</a>
              </li>
              <li>
                <a class="transition-all text-primary" href="_str2-account-orders.html">Orders</a>
              </li>
              <li>
                <a class="transition-all text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary" href="#.html">Logout</a>
              </li>
            </ul>
          </nav>

          <div class="mb-7 lg:mb-8 xl:mb-10 pb-7 md:pb-8 lg:pb-10 xl:pb-14 border-b border-gray-400 dark:border-gray-600">
            <div class="flex flex-wrap items-baseline mb-8 md:mb-9 lg:mb-12.5 gap-y-2 gap-x-6 xl:gap-x-9 border-y border-gray-400 dark:border-gray-600 py-7">
              <h3 class="font-bold text-xl lg:text-3xl xl:text-[32px] text-gray-900 dark:text-white">
                Order MGX256N
              </h3>
              <dl class="flex flex-wrap font-bold text-gray-500 gap-5 gap-x-6 xl:gap-x-9 text-sm uppercase tracking-tighter">
                <div class="inline-flex gap-x-0.5">
                  <dt>Date:</dt>
                  <dd class="text-gray-900 dark:text-white">
                    <time datetime="2023-01-15 21:30">Jan 15, 2023</time>
                  </dd>
                </div>
                <div class="inline-flex gap-x-0.5">
                  <dt>Status:</dt>
                  <dd class="text-gray-900 dark:text-white">In Progress</dd>
                </div>
              </dl>
            </div>

            <div class="grid grid-cols-12 gap-x-5 md:gap-x-6 lg:gap-x-7.5 gap-y-10 lg:gap-y-14">

              <div class="col-span-full sm:col-span-6 md:col-span-3">
                <h5 class="font-bold text-gray-900 dark:text-white mb-5 lg:mb-8 uppercase tracking-tighter">Shipping Details</h5>
                <address class="leading-8 [&>p]:mb-8 [&>p:last-child]:mb-0 not-italic">
                  <p>
                    James Spiegel<br>
                    <a class="hover:text-primary" href="mailto:jspiegel@yourmail.com">jspiegel@yourmail.com</a><br>
                  555-2658-2658
                  </p>
                  <p>
                    Fake Street 1234, Apt 34<br>
                  Long Island, NY 10001<br>
                  United States
                  </p>
                </address>
              </div>

              <div class="col-span-full sm:col-span-6 md:col-span-3">
                <h5 class="font-bold text-gray-900 dark:text-white mb-5 lg:mb-8 uppercase tracking-tighter">Billing Details</h5>
                <address class="leading-8 [&>p]:mb-8 [&>p:last-child]:mb-0 not-italic">
                  <p>
                    James Spiegel<br>
                    <a class="hover:text-primary" href="mailto:jspiegel@yourmail.com">jspiegel@yourmail.com</a><br>
                  555-2658-2658
                  </p>
                  <p>
                    Fake Street 1234, Apt 34<br>
                  Long Island, NY 10001<br>
                  United States
                  </p>
                </address>
              </div>

              <div class="col-span-full sm:col-span-6 md:col-span-3">
                <h5 class="font-bold text-gray-900 dark:text-white mb-5 lg:mb-8 uppercase tracking-tighter">Your Order</h5>
                <ul class="leading-8 not-italic">
                  <li>
                    <div>Witch Hunters Art Print <span>x1</span> -</div>
                    <div>$36.00</div>
                  </li>
                  <li>
                    <div>Mochi’s Island Art Print <span>x1</span> -</div>
                    <div>$28.00</div>
                  </li>
                </ul>
              </div>

              <div class="col-span-full sm:col-span-6 md:col-span-3">
                <h5 class="font-bold text-gray-900 dark:text-white mb-5 lg:mb-8 uppercase tracking-tighter">Totals & Payment</h5>
                <address class="leading-8 [&>p]:mb-8 [&>p:last-child]:mb-0 not-italic">
                  <p>
                    Cart Subtotal: $64.00<br>
                  Shipping: $5.00<br>
                  Discount: -$10.00<br>
                  Order Total: <span class="text-primary">$59.00</span>
                  </p>
                  <p>
                    Bank of the Republic<br>
                  Account: XXXX-XXXX-1234
                  </p>
                </address>
              </div>

            </div>
          </div>


        </div>
      </div>
</x-main>