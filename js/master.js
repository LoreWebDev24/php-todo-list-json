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
		removeTask(i) {
			const data = {
				id: i
			}
			axios.post('./removeTask.php',data, {
				headers:{
					'Content-Type': 'multipart/form-data',
				},
			})
			.then((res) => {
				// console.log(res.data)
				this.todos = res.data.results
			})
			// console.log(i)
		},
		taskStatus(i) {
			const data = {
				status: this.todos[i].done,
				id: i
			}
			console.log(data)
			axios.post('./taskStatus.php',data, {
				headers:{
					'Content-Type': 'multipart/form-data',
				},
			})
			.then((res) => {
				// console.log(res.data)
				this.todos = res.data.results
			})
		}
		
	},
	created() {
		this.fetchData()
	},
}).mount('#app')