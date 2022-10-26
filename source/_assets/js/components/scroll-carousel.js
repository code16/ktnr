import Alpine from 'alpinejs';

Alpine.data('scrollCarousel', window.scrollCarousel = ({ interval=null }) => ({
    currentSlide: 0,
    slidesPerPage: 0,
    slidesCount: 0,
    get indicatorsCount() {
        return this.slidesPerPage
            ? Math.ceil(this.slidesCount / this.slidesPerPage)
            : 0;
    },
    get isInactive() {
        return this.slidesPerPage >= this.slidesCount;
    },
    handleSlideTo(e) {
        this.slideTo(e.detail.index);
    },
    handleScroll(e) {
        const slide = this.$refs.slide;
        this.currentSlide = this.nextIndex(Math.round(e.target.scrollLeft / slide.offsetWidth));
        if(e.target.scrollLeft + e.target.offsetWidth >= e.target.scrollWidth) {
            this.currentSlide = this.nextIndex(this.slidesCount);
        }
    },
    nextIndex(index) {
        return Math.min(Math.max(index, 0), this.slidesCount - this.slidesPerPage);
    },
    slidePrev() {
        this.slideTo(this.currentSlide - this.slidesPerPage);
    },
    slideTo(index) {
        const slides = [...this.$root.querySelectorAll('[x-ref="slide"]')];
        this.currentSlide = this.nextIndex(index);
        this.$refs.scroller.scrollTo({ left: slides[this.currentSlide].offsetLeft, behavior: 'smooth' });
    },
    slideNext() {
        if(this.currentSlide >= this.slidesCount - this.slidesPerPage) {
            this.slideTo(0);
        } else {
            this.slideTo(this.currentSlide + this.slidesPerPage);
        }
        this.scheduleNext();
    },
    scheduleNext() {
        if(interval) {
            clearTimeout(this.timeout);
            this.timeout = setTimeout(() => this.slideNext(), interval);
        }
    },
    layout() {
        const slide = this.$refs.slide;
        this.slidesPerPage = Math.floor(slide.parentElement.offsetWidth / slide.offsetWidth);
    },
    init() {
        this.slidesCount = [...this.$el.querySelectorAll('[x-ref="slide"]')].length;
        if(this.slidesCount) {
            this.layout();
            new ResizeObserver(() => this.layout()).observe(this.$el);
        }
        this.scheduleNext();
    },
}));
