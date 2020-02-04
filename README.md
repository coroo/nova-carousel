# Getting Started

## Requirements

This Nova Carousel requires `Nova 2.0 or higher`

![Carousel in Action](assets/img/nova-carousel-cover.gif)

## Installation

You can install the package via composer:

```bash
composer require coroowicaksono/nova-carousel
```

<!-- panels:start -->

<!-- div:title-panel -->

## Basic Usage

Open your `App\Providers\NovaServiceProvider.php` as a default dashboard for Laravel Nova and edit `cards` function:

<!-- div:left-panel -->


![nova-carousel-code](assets/img/nova-carousel-code.png)

Result :

![code-chart-bar](assets/img/nova-carousel-dashboard.gif)

<!-- div:right-panel -->

```php
use Coroowicaksono\NovaCarousel\Slider;
```

```php
(new Slider())
    ->card(array([
        'p'  => 'Hi, '.\Auth::user()->name,
        'h2' => 'Welcome to Laravel Nova',
    ],[
        'show-quote' => true,
    ],[
        'show-quote' => true,
    ]))
    ->width('1/3'),
```

<!-- panels:end -->

# Typography
By default, we using title, subtitle, heading etc for the key of each element. So you can easily using it in your card. Let say, you need to have `big title`, you can use:
```php
(new Slider())
    ->card(array([
        'title' => 'First Title',
    ],[
        'title' => 'Second Title',
    ],[
        'title' => 'Third Title',
    ])),
```
Available typo list:
```
title    : title
subtitle : subtitle
h1       : heading 1
h2       : heading 2
h3       : heading 3 
span     : span
```
Or you can use `customText` for any HTML typography.
```php
(new Slider())
    ->card(array([
        'customText' => '<h1>First Title</h1>',
    ])),
```

# Configuration

You can easily using `options` to add some configuration.
```php
(new Slider())
    ->card(array([
        'p'  => 'Hi, '.\Auth::user()->name,
        'h2' => 'Welcome to Laravel Nova',
    ],[
        'show-quote' => true,
    ],[
        'show-quote' => true,
    ]))
    ->options([
        'theme' => 'bg-4' // add some configuration here
    ]),
```

## Basic Configuration
Some basic configuration can be found here:

### autoplay
Flag to enable autoplay<br/>
Type: `Boolean`<br/>
Default: `true`

### autoplayTimeout
Time elapsed before advancing slide<br/>
Type: `Number`<br/>
Default: `2000`

### autoplayHoverPause
Flag to pause autoplay on hover<br/>
Type: `Boolean`<br/>
Default: `true`

### easing
Transition speed between slides. Any valid CSS transition easing is accepted.<br/>
Type: `String`<br/>
Default: `ease`

### minSwipeDistance
Minimum distance in pixels to swipe before a slide advance is triggered<br/>
Type: `Number`<br/>
Default: `8`

### perPage
Maximum number of slides displayed on each page<br/>
Type: `Number`<br/>
Default: `1`

### scrollPerPage
Scroll per page, not per item.<br/>
Type: `Boolean`<br/>
Default: `false`

## Navigation
Configure the navigation component (next/prev buttons)

### navigationEnabled
Type:<br/>
Default: `false`

### navigationClickTargetSize
Amount of padding to apply around the label in pixels<br/>
Type: `Number`<br/>
Default: `8`

### navigationNextLabel
Text content of the navigation next button<br/>
Type: `String`<br/>
Default: `▶`

### navigationPrevLabel
Text content of the navigation prev button<br/>
Type: `String`<br/>
Default: `◀`

## Pagination

### paginationEnabled
Configure the pagination component (clickable page dots)<br/>
Type: `Boolean`<br/>
Default: `true`

### paginationActiveColor
The fill color of the active pagination dot. Any valid CSS color is accepted.<br/>
Type: `String`<br/>
Default: `#000000`

### paginationColor
The fill color of pagination dots. Any valid CSS color is accepted.<br/>
Type: `String`<br/>
Default: `#efefef`

### paginationPadding
The padding inside each pagination dot. Pixel values are accepted.<br/>
Type: `Number`<br/>
Default: `10`

### paginationSize
The size of each pagination dot. Pixel values are accepted.<br/>
Type: `Number`<br/>
Default: `10`

## Style Configuration
More about style configuration can be found here:

### theme
The background color for each card.<br/>
Type: `String`<br/>
Default: `bg-1`<br/>

Available list:
```css
.bg-1 : evening sunshine
.bg-2 : lush
.bg-3 : deep space
.bg-4 : dark skies
.bg-5 : suzy
.bg-6 : superman
.bg-7 : nighthawk
.bg-8 : forest
.bg-9 : yoda
```
# More Reference 

[Vue-Carousel](https://ssense.github.io/vue-carousel/api/)

# Issue 

For any issue, we capture it in [HERE](https://github.com/coroo/nova-carousel/issues).

# ChangeLog

Please see [CHANGELOG](https://github.com/coroo/nova-carousel/blob/master/CHANGELOG.md) for more information on what has changed recently.

# Suport Us

<a href="https://www.buymeacoffee.com/coroowicaksono" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-red.png" alt="Buy Us A Coffee" style="margin-right:20px; height: 51px !important;width: 217px !important;" ></a> Or rate us <a href="https://github.com/coroo/nova-carousel/stargazers"><img src="https://img.shields.io/github/stars/coroo/nova-carousel?style=social" style="margin-left:10px;box-shadow:none;border-radius:0;height:24px"></a>

# Contribute

Be one of our contributor at [contributor](https://github.com/coroo/nova-carousel/blob/master/CONTRIBUTING.md).

# License

The MIT License (MIT). Please see [License File](https://github.com/coroo/nova-carousel/blob/master/LICENSE) for more information.

# Another Related Products 

<p align="center">
  <a href="https://coroo.github.io/nova-chartjs/"><img width="460" src="https://raw.githubusercontent.com/coroo/nova-chartjs/master/resources/img/chart-js-integration.gif"><br/>Nova Chart-JS</a>
</p>

