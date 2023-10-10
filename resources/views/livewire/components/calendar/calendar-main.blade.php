<div>
    <header class="h-[50px] px-[2rem] flex justify-between items-center">
        <h2 class="text-2xl">Schedule Reading</h2>
        <div class="w-[70px] flex justify-between">
          <button class="text-2xl">&lt;</button>
          <button class="text-2xl">&gt;</button>
        </div>
      </header>

      {{-- Calendar  --}}
      <section class="p-[4rem] flex ">
        <livewire:components.calendar.calendar-date />
        <livewire:components.calendar.calendar-date />
        <livewire:components.calendar.calendar-date />
        <livewire:components.calendar.calendar-date />
        <livewire:components.calendar.calendar-date />
      </section>
</div>
