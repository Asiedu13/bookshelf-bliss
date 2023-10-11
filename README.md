# BookshelfBliss-Laravel v1.0


Expand your knowledge bank with the best book service platform on the internet. All genres of books and a system that keeps you, your books and everyone else connected. 

## Table of contents

- [Overview](#overview)
  - [The challenge](#the-challenge)
  - [Screenshot](#screenshot)
  - [Links](#links)
- [My process](#my-process)
  - [Built with](#built-with)
  - [What I learned](#what-i-learned)
  - [Continued development](#continued-development)
  - [Useful resources](#useful-resources)
- [Author](#author)
- [Acknowledgments](#acknowledgments)
- [API(s) used](#apis-used)

## Overview
An application that connects you with the stories you resonate with
### The challenge

Users should be able to:

- Find books.
- Read and bookmark
- Receive insights from authors and other readers

### Screenshot

![The Solution](./public/bookshelf-snap.png)

### Links

<!-- - Solution URL: [Github Link (currently private)](https://github.com/Asiedu13/weather-app)
- Live Site URL: [Weather App](https://weather-app-asiedu13.vercel.app/) -->

## My process
### Selecting the Tools / Technologies
This project uses Laravel/PHP with Liveiwre.

### Planning the Layouts
I then took the time to consider the various views and UI components that would be needed for the application.

### Building the Views 
I then wrote code for everything planned and still planning
### Built with

- Laravel
- Livewire
- Tailwindcss
- Flexbox
- fontawesome

## What I learned

This project helped me learn about the various features of Laravel and Livewire. From blade components to Livewire components, properties, layouts and slots to all the abstractions Laravel undertakes to keep the application fast at all levels.

### This project also allowed me to
- implement tailwindcss in a Laravel App

```php
 <section class="w-[fit-content] h-1/2">
              <section clas='py-4'>
                <h1 class='text-7xl font-bold pb-5 '> {{$city}}, {{$name}}</h1>
                <p> {{$today}}</p>
                </section>
 <section />
```

```php
    ...
    public $city = "";
    public $name = "";
    public $today = "";

    public function mount($city, $name, $today)
    {
        $this->city = $city;
        $this->name = $name;
        $this->today = $today;
    }


    ...
```

```php
...

<Livewire:component-name city="" name="" today="">

...

```



## Continued development
<!-- Further on in this project, I would like to
- Access to location data o
- Keep a list favourite locations
- Provide more information on the weather of a location
- Important world events that ocurred with specific weather conditions -->

## Useful resources

<!-- - [Tailwind official docs](https://tailwindcss.com/docs/installation) - This helped me with using tailwindcss for the project. I really liked the simplicity and the ctrl + K shortcut for searching. -->


**However, I am open to alternatives so reach out to me if you have any.**


## Author

- Website - [Asiedu Prince Kofi](Asiedu13.github.io)
- Github - [@Asiedu13](https://github.com/Asiedu13)
- Twitter - [@Prince_KAsiedu](https://www.twitter.com/Prince_KAsiedu)
- LinkedIn - [@Prince Asiedu](https://www.linkedin.com/in/princek-asiedu/)


## Acknowledgments

<!-- https://stackabuse.com/guide-to-getting-started-with-nextjs-create-a-nextjs-app/ -->

### API(s) Used
<!-- [RapidAPI Weather API](https://rapidapi.com/weatherapi/api/weatherapi-com) -->
