
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('example', require('./components/Example.vue'));
var Vue = require('vue');


const app = new Vue({
    el: 'body',
    data: {
        'password': '---',
        'numbers': 1234567890,

        'shift': 1,
        'reach': 0,
        'letterSelect': 6,
        'numberSelect': 2,
        'punctuationSelect': 1,
        'specialSelect': 1,
    },
    computed: {
        'letters': function() {
            if (this.shift) {
                return 'AaBbCcHhMmQqVvWwXxZz'
            }
            else {
                return 'abchmqvwxz'
            }
        },
        'punctuation': function() {
            if (this.shift) {
                return ",.?'\"-"
            }
            else {
                return ",.'-"
            }
        },
        'special': function() {
            if (this.shift) {
                return "!@#$%^&*()<>[]/{}_"
            }
            else {
                return "[]/"
            }
        },
        'reachKeys': function() {
            if (this.reach) {
                if (this.shift) {
                    return "`~=+|\\"
                }
                else {
                    return "`=\\"
                }
            }
        },
    },
    methods: {
        'update': function () {
            var url = '/pw/' + (this.shift+0 + '/' +
                         this.letterSelect + '/' +
                         this.numberSelect  + '/' +
                         this.punctuationSelect + '/' +
                         this.specialSelect  + '/' +
                         this.reach+0)

            this.$http.get(url)
                      .then((response) => {
                        this.password =  response.data;
            });
        },
    },
    ready() {
      this.update()
    }
});

