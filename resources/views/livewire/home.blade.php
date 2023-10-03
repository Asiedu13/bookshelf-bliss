 <main class="p-[40px] w-[100vw] h-[100vh] text-[#252733]">

            {{-- top section --}}
            <section class=" flex justify-between">
                {{-- Search --}}
                <div class="flex w-[280px] justify-around items-center">
                    <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z"/></svg>
                    <input type="text" placeholder="Search book name, author, edition ..." class="p-[5px] text-sm w-[250px] rounded-2xl bg-[#f0eee2] outline-none ">
                </div>
                {{-- {profile} --}}

                <div class="w-[280px] flex justify-between items-center mr-[30px]">
                    <div class="flex justify-start items-center">
                        <img src="/media/imgs/book1.jpg" class="w-[50px] h-[50px] rounded-full mr-[10px] shadow-2xl" alt="user profile image">
                        <p>Asem Felix</p>
                    </div>
                    {{-- Notifications --}}

                    <div class="w-[100px] h-[50px] flex items-center justify-end">
                        <svg class="w-[30px] h-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M256 32V51.2C329 66.03 384 130.6 384 208V226.8C384 273.9 401.3 319.2 432.5 354.4L439.9 362.7C448.3 372.2 450.4 385.6 445.2 397.1C440 408.6 428.6 416 416 416H32C19.4 416 7.971 408.6 2.809 397.1C-2.353 385.6-.2883 372.2 8.084 362.7L15.5 354.4C46.74 319.2 64 273.9 64 226.8V208C64 130.6 118.1 66.03 192 51.2V32C192 14.33 206.3 0 224 0C241.7 0 256 14.33 256 32H256zM224 512C207 512 190.7 505.3 178.7 493.3C166.7 481.3 160 464.1 160 448H288C288 464.1 281.3 481.3 269.3 493.3C257.3 505.3 240.1 512 224 512z"/></svg>
                    </div>
                </div>
                
            </section>

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
                <section class="w-[55%]  h-[400px]">
                    <header>
                        <h2 class="text-2xl p-[1rem]">Popular Now</h2>
                    </header>

                {{-- book cards --}}
                    <div class="flex justify-around">
                        <article>
                        {{-- Book Image --}}
                            <img src="/media/imgs/book1.jpg" alt="book title" class="w- [150px] h-[240px] rounded-xl my-[20px] shadow-2xl">
                        {{-- Book description --}}
                            <div class="flex flex-col w-[150px] h-[50px] overflow-hidden">
                                <b>The world of Ice and Fire</b>
                                <i>Volume I</i>
                            </div>
                        </article>

                        <article>
                        {{-- Book Image --}}
                            <img src="/media/imgs/book2.jpg" alt="book title" class="w-[150px] h-[240px] rounded-xl my-[20px] shadow-2xl">
                        {{-- Book description --}}
                            <div class="flex flex-col w-[150px] h-[50px] overflow-hidden">
                                <b>Fantastic Beasts</b>
                                <i>Volume II</i>
                            </div>
                        </article>

                        <article>
                        {{-- Book Image --}}
                            <img src="/media/imgs/book4.jpg" alt="book title" class="w-[150px] h-[240px] rounded-xl my-[20px] shadow-2xl">
                        {{-- Book description --}}
                            <div class="flex flex-col w-[150px] h-[50px] overflow-hidden">
                                <b>Game of Thrones</b>
                                <i>Volume III</i>
                            </div>
                        </article>

                        <article>
                        {{-- Book Image --}}
                            <img src="/media/imgs/book5.jpg" alt="book title" class="w-[150px] h-[240px] rounded-xl my-[20px] shadow-2xl">
                        {{-- Book description --}}
                            <div class="flex flex-col w-[150px] h-[50px] overflow-hidden">
                                <b>The Wise Man's Fear</b>
                                <i>Volume I</i>
                            </div>
                        </article>
                    </div>
                </section>
            </section>
        </main>
     

