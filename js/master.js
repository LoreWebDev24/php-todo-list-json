const { createApp } = Vue

createApp({
	data() {
		return {
			title: 'To Do List',
			todos: [],
			newTodo: '',
		}
	},
	methods: {
		fetchData() {
			axios.get('server.php').then((res) => {
				// console.log(res.data.results)
				this.todos = res.data.results
			})
		},
		newTask(){
			const data = {
				newTodo: this.newTodo,
			}
			axios.post('./store.php',data,{
				headers:{
					'Content-Type': 'multipart/form-data',
				},
			})
			.then((res) => {
				// console.log(res.data)
				this.todos = res.data.results
				this.newTodo = ""
			})
		},
		removeTask() {
			const data = {
				id: index
			}
			axios.post('./removeTask.php',data, {
				headers:{
					'Content-Type': 'multipart/form-data',
				},
			})
		}
		
	},
	created() {
		this.fetchData()
	},
}).mount('#app')