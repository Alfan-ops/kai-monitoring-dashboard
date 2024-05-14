<div>
    <h1 class="text-[#a4a2b4] lg:mt-[110px] lg:ml-[60px] lg:text-[20px]">Asset</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:mt-[20px] lg:ml-[60px] lg:w-11/12">
        <div class="bg-white lg:w-full lg:h-24">
            <div class="flex justify-between">
                <div class="lg:mt-7 lg:ml-5">
                    <span class="absolute my-2 mx-2 text-[#878686]">
                        <x-icon name="magnifying-glass" />
                    </span>
                    <input style="font-family: 'Poppins', sans-serif;" type="text" class="border border-gray-300 pl-10 rounded-xl bg-[#f2f2f8] placeholder:text-[#878686] focus:ring-[#4CA751] focus:border-[#4CA751] w-40 lg:w-72 text-[12px] lg:text-[14px]" placeholder="Search" />
                </div>
                <div class="lg:mt-7">
                    <form wire:submit.prevent="save">
                        <select wire:model="sortBy" wire:change="applyFilter" id="sort" name="sort" style="font-family: 'Poppins', sans-serif;" type="text" class="border border-gray-300 pr-10 text-[#878686] rounded-xl bg-[#f2f2f8] focus:ring-[#4CA751] focus:border-[#4CA751] text-[12px] lg:text-[14px] lg:mr-[30px] lg:w-72">
                            <option value="#" selected disabled>Filter</option>
                            <option value="latest">Terbaru</option>
                            <option value="oldest" selected>Terlama</option>
                        </select>            
                    </form>
                </div>
                
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-neutral-100 uppercase bg-[#2d2a6f] dark:bg-gray-700 dark:text-gray-400 lg:w-3/4">
                <tr>
                    <th scope="col" class="p-4">
                        NO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ID SU
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DC - DC
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SN RADIO
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SN RLOW
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SN CONSOLE 1
                    </th>
                    <th scope="col" class="px-6 py-3">
                        SN CONSOLE 1
                    </th>
                    <th scope="col" class="px-6 py-3">
                        ACTION
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                        </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</div>