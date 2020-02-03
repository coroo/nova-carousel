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
            <div v-for="(subItem, subKey) in item" :key="subItem">
              <h1 v-html='subItem' v-if="subKey.includes('title') && (subKey.includes('subtitle')===false)"></h1>
              <h1 v-html='subItem' v-if="subKey.includes('h1')"></h1>
              <h2 v-html='subItem' v-if="subKey.includes('h2')"></h2>
              <h3 v-html='subItem' v-if="subKey.includes('h3')"></h3>
              <p v-html='subItem' v-if="subKey.includes('subtitle')"></p>
              <p v-html='subItem' v-if="subKey.includes('p') && (subKey.includes('span')===false) && (subKey.includes('padding')===false)"></p>
              <div v-bind:style="{ padding: subItem + 'px' }" v-if="subKey.includes('padding')"></div>
              <span v-html='subItem' v-if="subKey.includes('span')"></span>
            </div>
            <div v-html='item.customText'></div>
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
    methods: {
      itemsContains(n) {
        return this.items.indexOf(n) > -1
      }
    },
    computed: {
      themeColor() {
        return 'color-light';
      },
      autoplay() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.autoplay !== undefined ? this.$attrs.card.options.autoplay : true;
      },
      autoplayTimeout() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.autoplayTimeout !== undefined ? this.$attrs.card.options.autoplayTimeout : 2000;
      },
      autoplayHoverPause() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.autoplayHoverPause !== undefined ? this.$attrs.card.options.autoplayHoverPause : true;
      },
      easing() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.easing !== undefined ? this.$attrs.card.options.easing : 'ease';
      },
      minSwipeDistance() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.minSwipeDistance !== undefined ? this.$attrs.card.options.minSwipeDistance : 8;
      },
      perPage() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.perPage !== undefined ? this.$attrs.card.options.perPage : 1;
      },
      scrollPerPage() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.scrollPerPage !== undefined ? this.$attrs.card.options.scrollPerPage : false;
      },
    
      // NAVIGATION
      navigationEnabled() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.navigationEnabled !== undefined ? this.$attrs.card.options.navigationEnabled : false;
      },
      navigationClickTargetSize() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.navigationClickTargetSize !== undefined ? this.$attrs.card.options.navigationClickTargetSize : 8;
      },
      navigationNextLabel() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.navigationNextLabel !== undefined ? this.$attrs.card.options.navigationNextLabel : "";
      },
      navigationPrevLabel() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.navigationPrevLabel !== undefined ? this.$attrs.card.options.navigationPrevLabel : "";
      },

      // PAGINATION
      paginationEnabled() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.paginationEnabled !== undefined ? this.$attrs.card.options.paginationEnabled : true;
      },
      paginationActiveColor() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.paginationActiveColor !== undefined ? this.$attrs.card.options.paginationActiveColor : '#FFFFFF';
      },
      paginationColor() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.paginationColor !== undefined ? this.$attrs.card.options.paginationColor : '#111111';
      },
      paginationPadding() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.paginationPadding !== undefined ? this.$attrs.card.options.paginationPadding : 10;
      },
      paginationSize() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.paginationSize !== undefined ? this.$attrs.card.options.paginationSize : 10;
      },
    },
    created() {
      console.log(this.$attrs.card.card);
    }
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