<template>
  <card class="pd-1" :class='[themeColor, bgColor]'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <div class="stay-right" v-show="buttonRefresh">
      <button @click="fillData()" class="btn-refresh">
        <i class="fas fa-sync"></i>
      </button>
    </div>
    <carousel 
      v-bind:style="customStyle"
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
      <slide v-for="(item) in items" :key="item">
          <div v-for="(subItem, subKey) in item" :key="subItem">
            <div v-if="subKey.includes('quote')">
              <p v-if="subItem.content">{{subItem.content}}</p>
              <p v-if="subItem.author" style="margin-top:5px">~ {{subItem.author}}</p>
            </div>

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
        quoteCounter: 0,
        items: this.$attrs.card.card,
        customStyle: this.$attrs.card.options !== undefined && this.$attrs.card.options.customStyle !== undefined ? this.$attrs.card.options.customStyle : false,
        quotes: null,
      };
    },
    methods: {
      async handleQuote(idx) {
        this.quotes = [];
        let getQuote = await axios
          .get('https://api.quotable.io/random')
          .then(response => {
            return response.data;
          });

        let duplicate = [...this.items];
        duplicate[idx].quote = getQuote;
        this.items = duplicate;
      },
    },
    async mounted () {
      let getIndex =[];
      let aaaa = await this.items.forEach((obj, index) => {
        if(obj['show-quote']) {
          let getData = this.handleQuote(index);
        }
      });
    },
    computed: {
      themeColor() {
        return 'color-light';
      },
      bgColor() {
        return this.$attrs.card.options !== undefined && this.$attrs.card.options.theme !== undefined ? this.$attrs.card.options.theme : 'bg-1' ;
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
      // console.log(this.$attrs.card.card);
    }
};
</script>

<style> 
  .pd-1 {
    padding: 1rem 1.5rem 10px;
  }
  .VueCarousel-pagination {
    margin-top: -1rem;
  }
  .bg-1 {  
    background: linear-gradient(to right, #b92b27, #1565C0); /* evening sunshine */
  }
  .bg-2 {  
    background: linear-gradient(to right, #56ab2f, #a8e063); /* lush */
  }
  .bg-3 {  
    background: linear-gradient(to right, #000000, #434343); /* deep space */
  }
  .bg-4 {  
    background: linear-gradient(to right, #4B79A1, #283E51); /* dark skies */
  }
  .bg-5 {  
    background: linear-gradient(to right, #834d9b, #d04ed6); /* suzy */
  }
  .bg-6 {  
    background: linear-gradient(to right, #0099F7, #F11712); /* superman */
  }
  .bg-7 {  
    background: linear-gradient(to right, #2980b9, #2c3e50); /* nighthawk */
  }
  .bg-8 {  
    background: linear-gradient(to right, #5A3F37, #2C7744); /* forest */
  }
  .bg-9 {  
    background: linear-gradient(to right, #FF0099, #493240); /* yoda */
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