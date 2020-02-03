<template>
    <card class="bg-1 pd-1" :class='themeColor'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
      <div class="stay-right" v-show="buttonRefresh">
        <button @click="fillData()" class="btn-refresh">
          <i class="fas fa-sync"></i>
        </button>
      </div>
      <carousel 
        :autoplay='autoplay' 
        :autoplayTimeout='autoplayTimeout' 
        :autoplayHoverPause='autoplayHoverPause' 
        :easing='easing' 
        :minSwipeDistance='minSwipeDistance'
        :perPage='perPage' 
        :scrollPerPage='scrollPerPage' 
        :speed='speed' 
        
        :navigationClickTargetSize='navigationClickTargetSize'
        :navigationEnabled='navigationEnabled'
        :navigationNextLabel='navigationNextLabel'
        :navigationPrevLabel='navigationPrevLabel'
        
        :paginationEnabled='paginationEnabled'
        :paginationActiveColor='paginationActiveColor'
        :paginationColor='paginationColor'
        :paginationPadding='paginationPadding'
        :paginationSize='paginationSize'
       >
        <slide v-for="item in items" :key="item">
            <h1>{{ item.title }}</h1>
            <h2>{{ item.heading1 }}</h2>
            <h3>{{ item.heading2 }}</h3>
            <h4>{{ item.heading3 }}</h4>
            <p>{{ item.subtitle }}</p>
        </slide>
      </carousel>
    </card>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';

export default {
    components: {
      Carousel,
      Slide
    },
    data() {
        return {
            items: this.$attrs.card.card
        };
    },
    computed: {
      title() {
        return this.$attrs.card.card[0].title !== undefined ? this.$attrs.card.card[0].title : 'Nova Slider';
      },
      subTitle() {
        return this.title != undefined ? this.title : 'Welcome to Nova Slider documentation for more detail information';
      },
      themeColor() {
        return 'color-light';
      },
      autoplay() {
        return this.$attrs.card.options.autoplay !== undefined ? this.$attrs.card.options.autoplay : true;
      },
      autoplayTimeout() {
        return this.$attrs.card.options.autoplayTimeout !== undefined ? this.$attrs.card.options.autoplayTimeout : 2000;
      },
      autoplayHoverPause() {
        return this.$attrs.card.options.autoplayHoverPause !== undefined ? this.$attrs.card.options.autoplayHoverPause : true;
      },
      easing() {
        return this.$attrs.card.options.easing !== undefined ? this.$attrs.card.options.easing : 'easing';
      },
      minSwipeDistance() {
        return this.$attrs.card.options.minSwipeDistance !== undefined ? this.$attrs.card.options.minSwipeDistance : 8;
      },
      perPage() {
        return this.$attrs.card.options.perPage !== undefined ? this.$attrs.card.options.perPage : 1;
      },
      scrollPerPage() {
        return this.$attrs.card.options.scrollPerPage !== undefined ? this.$attrs.card.options.scrollPerPage : false;
      },
      speed() {
        return this.$attrs.card.options.speed !== undefined ? this.$attrs.card.options.speed : 10;
      },
    
      // NAVIGATION
      navigationEnabled() {
        return this.$attrs.card.options.navigationEnabled !== undefined ? this.$attrs.card.options.navigationEnabled : false;
      },
      navigationClickTargetSize() {
        return this.$attrs.card.options.navigationClickTargetSize !== undefined ? this.$attrs.card.options.navigationClickTargetSize : 8;
      },
      navigationNextLabel() {
        return this.$attrs.card.options.navigationNextLabel !== undefined ? this.$attrs.card.options.navigationNextLabel : "";
      },
      navigationPrevLabel() {
        return this.$attrs.card.options.navigationPrevLabel !== undefined ? this.$attrs.card.options.navigationPrevLabel : "";
      },

      // PAGINATION
      paginationEnabled() {
        return this.$attrs.card.options.paginationEnabled !== undefined ? this.$attrs.card.options.paginationEnabled : true;
      },
      paginationActiveColor() {
        return this.$attrs.card.options.paginationActiveColor !== undefined ? this.$attrs.card.options.paginationActiveColor : '#FFFFFF';
      },
      paginationColor() {
        return this.$attrs.card.options.paginationColor !== undefined ? this.$attrs.card.options.paginationColor : '#111111';
      },
      paginationPadding() {
        return this.$attrs.card.options.paginationPadding !== undefined ? this.$attrs.card.options.paginationPadding : 10;
      },
      paginationSize() {
        return this.$attrs.card.options.paginationSize !== undefined ? this.$attrs.card.options.paginationSize : 10;
      },
    },
};
</script>

<style> 
  .pd-1 {
    padding: 1rem 1.5rem 2px;
  }
  .bg-1 {  
    background: linear-gradient(to right, #b92b27, #1565C0);
  }
  .color-light {  
    color: #FFF;
  }
  .nova-slider-title{
    font-size: 1rem;
    font-weight: 800;
    margin: 0;
  }
</style>