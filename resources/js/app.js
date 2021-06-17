/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

import FormPeople from './components/people/Form'
import Index from './components/people/Index'
import ListSon from './components/son/List'



new Vue({
    el: '#app',
	components:{
		'people-index': Index,
		ListSon,
		FormPeople
	}
});
