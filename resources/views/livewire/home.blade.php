 <main class="px-[40px] w-[100vw] h-[100vh] text-[#252733]">
           <livewire:components.nav.home-nav />
            <header class="flex justify-between mt-[2rem] h-[350px] ">
                {{-- Main --}}
                <section class="w-[400px] h-[inherit]">
                    <h1 class="text-6xl">
                        Happy reading, Felix
                    </h1>
                    <p class="mt-[2rem] mb-[4rem]">Wow! You've delved deep into the dragon world's secrets. Have Violet's dragons shown up yet? Oops! looks like you're not there yet. Get reading now!
                    </p>

                    <a href='#' class="bg-[black] text-[white] py-[.8rem] px-[2rem] rounded-3xl">Keep reading</a>
                </section>

                {{-- Trending book profile --}}
                <section class="flex justify-between w-[750px] h-[inherit]">
                    <img src="/media/imgs/book3.jpg" alt="trending book" class="h-[90%] w-[240px] shadow-2xl rounded">
                    {{-- Book profile description --}}
                    <div class="w-[55%]">
                        {{-- Title --}}
                        <h2 class="text-4xl w-[90%] font-semibold my-[10px]">Fourth Wing: The Empyrean</h2>

                        {{-- Page details --}}
                        <div class="mt-[20px] mb-[40px]">
                            <span class="text-[#1592e6] text-xl">154</span>
                            <span class="text-xl" >/ 500 pages</span>
                        </div>
                        {{-- Quote --}}
                        <div class="mt-[20px] h-[160px] flex flex-col justify-between">
                            <p>Yet, with everyday that passes, the war outside grows more deadly, the kingdom's protective wards are failing, and the death... </p>
                            <div class="mt-[20px] text-right p-[2rem] ">

                                <strong >~ Rebecca Yarros</strong>
                            </div>
                        </div>
                    </div>
                </section>
            </header>


            {{-- Popular & Schedule reading --}}
            <section class="flex">
            {{-- Popular books section --}}
            {{-- Left section --}}
            <section class="flex-1">
                <section class="w-[100%]  h-[400px]">
                    <header>
                        <h2 class="text-2xl p-[1rem]">Popular Now</h2>
                    </header>

                {{-- book cards --}}
                    <div class="flex justify-around">
                        <livewire:components.cards.card-mini src="/media/imgs/book1.jpg" title="The world of Ice and Fire" edition="Volume I" />
                        <livewire:components.cards.card-mini src="/media/imgs/book2.jpg" title="Fantastic Beasts" edition="Volume II" />

                        <livewire:components.cards.card-mini src="/media/imgs/book4.jpg" title="Game of Thrones" edition="Volume III" />

                        <livewire:components.cards.card-mini src="media/imgs/book5.jpg" title="The Wise Man's Fear" edition="Volume I" />
                    
                    </div>
                </section>
            </section>

            {{-- Right section --}}
            <section>

                <section class="flex flex-1 flex-col p-[1rem] ">
                    <livewire:components.calendar.calendar-main />
                </section>
            </section>
            </section>
        </main>
