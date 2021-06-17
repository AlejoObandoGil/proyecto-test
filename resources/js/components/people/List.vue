<template>
<section>
	<h1 class="my-5">List</h1>
	<table class="table">
		<thead>
			<tr>
				<th>Full Name</th>
				<th>Address</th>
				<th>Age</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="(value, index) in people" :key="index">
				<td>{{ value.full_name }}</td>
				<td>{{ value.address }}</td>
				<td>{{ value.age }}</td>
				<td>
					<a :href="`/People/show/${value.id}`" class="btn btn-warning text-white">Edit</a>
					<a class="btn btn-danger" @click="destroy(value)">Delete</a>
				</td>
			</tr>
		</tbody>
	</table>
</section>
</template>

<script>
export default {
	props:['people'],
	methods:{
		async destroy(value){

			var borrado = _.findIndex(this.people, function(o) { return o.id == value.id; })

			await axios.delete(`/People/delete/${value.id}`).then(res => {
				if(res.data.deleted){
					this.$parent.all_people.splice(borrado, 1)
				}
			})
		}
	}
}
</script>
