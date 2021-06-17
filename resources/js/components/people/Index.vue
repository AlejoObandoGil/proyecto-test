<template>
	<section>
		<form-people :new_people="new_people" />
		<list :people="all_people" />
	</section>
</template>

<script>


import Form from './Form'
import List from './List'

export default {
	props: ['people', 'new_people'],
	components:{
		'form-people': Form,
		List
	},
	created(){
		this.all_people = this.people
	},
	data(){
		return{
			all_people: {}
		}
	}
}
</script>
