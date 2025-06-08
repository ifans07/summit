@extends('layouts.app')

@section('title', 'Publications')
@section('content')

<section>
    <div class="container mx-auto px-8 py-28">
        <div class="flex flex-col lg:flex-row gap-8">
            <div class="bg-blue-900 md:order-2 lg:order-1 rounded-lg p-4 flex items-center justify-center">
                <h1 class="text-white text-4xl uppercase font-extrabold font-poppins">Publications</h1>
            </div>
            <div class="md:order-1 lg:order-2 md:border-l-2 border-blue-900 md:pl-8">
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-medium font-poppins text-center md:text-left">Our scientific contributions to maternal and child healthcare knowledge</h1>
            </div>
        </div>
    </div>
</section>

<hr class="border border-black mx-8">

<section>
    <div class="container mx-auto px-8 py-20">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="lg:w-1/4 relative" id="filter-section">
                {{-- <div class="shadow-sm h-96 bg-gray-300 rounded-lg p-4"> --}}
                <div class="shadow-sm min-h-[300px] bg-gray-100 rounded-lg p-4 sticky top-[20%]">
                    <h1 class="text-center font-bold text-2xl mb-4">Filter</h1>
                    <div>
                        <form action="">
                            <div class="mb-4">
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                        </svg>

                                    </div>
                                    <input type="text" id="email-address-icon" class="bg-gray-50 border border-blue-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Search publications">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Pilih Berdasarkan Kategori</label>
                                <select id="countries" class="bg-gray-50 border border-blue-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="">All Categories</option>
                                    <option>Ibu</option>
                                    <option>Ibu & anak</option>
                                    <option>MMS</option>
                                    <option>Covneo</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Pilih Berdasarkan Kategori Isu</label>
                                <select id="countries" class="bg-gray-50 border border-blue-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option value="">All issue categories</option>
                                    <option>Ibu</option>
                                    <option>Ibu & anak</option>
                                    <option>MMS</option>
                                    <option>Abortus</option>
                                </select>
                            </div>
                            <div id="date-range-picker" date-rangepicker class="flex flex-col items-center">
                                <label for="" class="block mb-2 font-medium text-sm">Tanggal</label>
                                <div class="flex">
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-blue-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Select date start">
                                    </div>
                                    <span class="mx-4 text-gray-500">to</span>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                            </svg>
                                        </div>
                                        <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-blue-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 " placeholder="Select date end">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="lg:w-3/4" id="publication-section">
                <div class="flex flex-col gap-8">
                    <div class="hover:border border-dashed border-blue-900 rounded-lg p-4">
                        <div class="mb-4">
                            <h1 class="text-lg md:text-2xl font-medium font-poppins">Maternal Multiple Micronutrient Supplementation Stabilizes Mitochondrial DNA Copy Number in Pregnant Women in Lombok, Indonesia. J Nutr. 2019;149(8):1309-1316. doi:10.1093/jn/nxz064</h1>
                            <p class="text-gray-600 text-xs md:text-sm font-inter">Priliani L, Prado EL, Restuadi R, Waturangi DE, Shankar AH, Malik SG.</p>
                        </div>
                        <div class="flex flex-wrap gap-4 font-poppins">
                            <div class="flex gap-1 flex-wrap">
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">MMS</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                            </div>
                            <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6686057/" class="text-blue-500 text-sm md:text-base">Download</a>
                        </div>
                    </div>
                    <div class="hover:border border-dashed border-blue-900 rounded-lg p-4">
                        <div class="mb-4">
                            <h1 class="text-lg md:text-2xl font-medium font-poppins">Maternal biomarker patterns for metabolism and inflammation in pregnancy are influenced by multiple micronutrient supplementation and associated with child biomarker patterns and nutritional status at 9-12 years of age. PLoS One. 2020 Aug 7;15(8):e0216848. doi: 10.1371/journal.pone.0216848. eCollection 2020.</h1>
                            <p class="text-gray-600 text-xs md:text-sm mb-2 font-inter">Priliani, L., Oktavianthi, S., Prado, E. L., Malik, S. G., Shankar, A. H.</p>
                        </div>
                        <div class="flex flex-wrap gap-4 font-poppins">
                            <div class="flex gap-1 flex-wrap">
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">MMS</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                            </div>
                            <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6686057/" class="text-blue-500 text-sm md:text-base">Download</a>
                        </div>
                    </div>
                    <div class="hover:border border-dashed border-blue-900 rounded-lg p-4">
                        <div class="mb-4">
                            <h1 class="text-lg md:text-2xl font-medium font-poppins">Assessing the effect of the Expanding Maternal and Neonatal Survival program on improving stabilization and referral for maternal and newborn complications in Indonesia. Int J Gynaecol Obstet. 2019 Feb;144 Suppl 1:30-41. doi: 10.1002/ijgo.12733.</h1>
                            <p class="text-gray-600 text-xs md:text-sm mb-2 font-inter">Pedrana, A., Qomariyah, S. N., Tholandi, M., Wijayanto, B., Gandawidjaja, T., Amelia, D.,  Apriatni, M., Sudirman, S., Zazri A., Sethi, R., Emerson, M., Ahmed, S.</p>
                        </div>
                        <div class="flex flex-wrap gap-4 font-poppins">
                            <div class="flex gap-1 flex-wrap">
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">MMS</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                            </div>
                            <div>
                                <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6686057/" class="text-blue-500 text-sm md:text-base">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="hover:border border-dashed border-blue-900 rounded-lg p-4">
                        <div class="mb-4">
                            <h1 class="text-lg md:text-2xl font-medium font-poppins">The effect of Expanding Maternal and Neonatal Survival interventions on improving the coverage of labor monitoring and complication prevention practices in hospitals in Indonesia: A difference-in-difference analysis. Int J Gynaecol Obstet. 2019 Feb;144 Suppl 1:21-29.</h1>
                            <p class="text-gray-600 text-xs md:text-sm mb-2 font-inter">Tholandi M, Sethi R, Pedrana A, Qomariyah SN, Amelia D, Kaslam P, Sudirman S, Apriatni MS, Rahmanto A, Emerson M, Ahmed S.</p>
                        </div>
                        <div class="flex flex-wrap gap-4 font-poppins">
                            <div class="flex gap-1 flex-wrap">
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">MMS</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                            </div>
                            <div>
                                <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6686057/" class="text-blue-500 text-sm md:text-base">Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="hover:border border-dashed border-blue-900 rounded-lg p-4">
                        <div class="mb-4">
                            <h1 class="text-lg md:text-2xl font-medium font-poppins">Modifiers of the effect of maternal multiple micronutrient supplementation on stillbirth, birth outcomes, and infant mortality: a meta-analysis of individual patient data from 17 randomised trials in low-income and middle-income countries. Lancet Glob Health. 2017 Nov;5(11):e1090-e1100. doi: 10.1016/S2214-109X(17)30371-6. PMID: 29025632.</h1>
                            <p class="text-gray-600 text-xs md:text-sm mb-2 font-inter">Smith ER, Shankar AH, Wu LS, Aboud S, Adu-Afarwuah S, Ali H, Agustina R, Arifeen S, Ashorn P, Bhutta ZA, Christian P, Devakumar D, Dewey KG, Friis H, Gomo E, Gupta P, Kæstel P, Kolsteren P, Lanou H, Maleta K, Mamadoultaibou A, Msamanga G, Osrin D, Persson LÅ, Ramakrishnan U, Rivera JA, Rizvi A, Sachdev HPS, Urassa W, West KP Jr, Zagre N, Zeng L, Zhu Z, Fawzi WW, Sudfeld CR.</p>
                        </div>
                        <div class="flex flex-wrap gap-4 font-poppins">
                            <div class="flex gap-1 flex-wrap">
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">MMS</span>
                                <span class="px-4 py-1 border border-black rounded-xl font-medium text-xs md:text-sm">Ibu & Anak</span>
                            </div>
                            <div>
                                <a href="https://pmc.ncbi.nlm.nih.gov/articles/PMC6686057/" class="text-blue-500 text-sm md:text-base">Download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()