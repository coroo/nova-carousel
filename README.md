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

# Configuration

autoplay
Flag to enable autoplay

Type: Boolean
Default: false
autoplayTimeout
Time elapsed before advancing slide

Type: Number
Default: 2000
autoplayHoverPause
Flag to pause autoplay on hover

Type: Boolean
Default: false
easing
Transition speed between slides. Any valid CSS transition easing is accepted.

Type: String
Default: ease
minSwipeDistance
Minimum distance in pixels to swipe before a slide advance is triggered

Type: Number
Default: 8
perPage
Maximum number of slides displayed on each page

Type: Number
Default: 2
perPageCustom
Configure the number of visible slides for responsive breakpoints.

This will be an array of arrays. Each array is formatted as [x, y] where x is the browser width, and y is the number of slides displayed.

Type: Array
Usage:
1
<carousel :perPageCustom="[[768, 3], [1024, 4]]">
A mobile-first strategy is used to determine the matching breakpoint. In the above example, the perPage variable has not been set, so the default of 2 is used. If the window size is greater than or equal to 768px, then 3 slides are shown. If the width is greater than or equal to 1024, then 4 slides are shown.

scrollPerPage
Scroll per page, not per item.

Type: Boolean
Default: false
speed
Size of each pagination dot. Pixel values are accepted.

Type Number
Default: 10
Navigation
Configure the navigation component (next/prev buttons)

navigationClickTargetSize
Amount of padding to apply around the label in pixels

Type: Number
Default: 8
navigationEnabled
Type: Boolean
Default: false
navigationNextLabel
Text content of the navigation next button

Type: String
Default: ▶
navigationPrevLabel
Text content of the navigation prev button

Type: String
Default: ◀
Pagination
Configure the pagination component (clickable page dots)

paginationEnabled
Type: Boolean
Default: true
paginationActiveColor
The fill color of the active pagination dot. Any valid CSS color is accepted.

Type: String
Default: #000000
paginationColor
The fill color of pagination dots. Any valid CSS color is accepted.

Type: String
Default: #efefef
paginationPadding
The padding inside each pagination dot. Pixel values are accepted.

Type: Number
Default: 10
paginationSize
The size of each pagination dot. Pixel values are accepted.

Type: Number
Default: 10

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

