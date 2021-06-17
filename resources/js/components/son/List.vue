<template>
<section>
	<h1>List sons</h1>

	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="(son, index) in sons" :key="index">
				<td>{{ son.full_name }}</td>
				<td>{{ son.age }}</td>
			</tr>
		</tbody>
	</table>
</section>
</template>

<script>

export default {
	props: ['sons']
}
</script>
