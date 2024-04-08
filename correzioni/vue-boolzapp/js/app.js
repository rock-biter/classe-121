console.log('boolzapp')

const { createApp } = Vue

createApp({
	data() {
		return {
			currentIndex: 3,
			messageText: '',
			search: '',
			contacts: [
				{
					name: 'Michele',
					avatar: './img/avatar_1.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Hai portato a spasso il cane?',
							status: 'sent',
						},
						{
							date: '10/01/2020 15:50:00',
							message: 'Ricordati di stendere i panni',
							status: 'sent',
						},
						{
							date: '10/01/2020 16:15:22',
							message: 'Tutto fatto!',
							status: 'received',
						},
					],
				},
				{
					name: 'Fabio',
					avatar: './img/avatar_2.jpg',
					visible: true,
					messages: [
						{
							date: '20/03/2020 16:30:00',
							message: 'Ciao come stai?',
							status: 'sent',
						},
						{
							date: '20/03/2020 16:30:55',
							message: 'Bene grazie! Stasera ci vediamo?',
							status: 'received',
						},
						{
							date: '20/03/2020 16:35:00',
							message: 'Mi piacerebbe ma devo andare a fare la spesa.',
							status: 'sent',
						},
					],
				},
				{
					name: 'Samuele',
					avatar: './img/avatar_3.jpg',
					visible: true,
					messages: [
						{
							date: '28/03/2020 10:10:40',
							message: 'La Marianna va in campagna',
							status: 'received',
						},
						{
							date: '28/03/2020 10:20:10',
							message: 'Sicuro di non aver sbagliato chat?',
							status: 'sent',
						},
						{
							date: '28/03/2020 16:15:22',
							message: 'Ah scusa!',
							status: 'received',
						},
					],
				},
				{
					name: 'Alessandro B.',
					avatar: './img/avatar_4.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Lo sai che ha aperto una nuova pizzeria?',
							status: 'sent',
						},
						{
							date: '10/01/2020 15:50:00',
							message: 'Si, ma preferirei andare al cinema',
							status: 'received',
						},
					],
				},
				{
					name: 'Alessandro L.',
					avatar: './img/avatar_5.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Ricordati di chiamare la nonna',
							status: 'sent',
						},
						{
							date: '10/01/2020 15:50:00',
							message: 'Va bene, stasera la sento',
							status: 'received',
						},
					],
				},
				{
					name: 'Claudia',
					avatar: './img/avatar_6.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Ciao Claudia, hai novità?',
							status: 'sent',
						},
						{
							date: '10/01/2020 15:50:00',
							message: 'Non ancora',
							status: 'received',
						},
						{
							date: '10/01/2020 15:51:00',
							message: 'Nessuna nuova, buona nuova',
							status: 'sent',
						},
					],
				},
				{
					name: 'Federico',
					avatar: './img/avatar_7.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Fai gli auguri a Martina che è il suo compleanno!',
							status: 'sent',
						},
						{
							date: '10/01/2020 15:50:00',
							message: 'Grazie per avermelo ricordato, le scrivo subito!',
							status: 'received',
						},
					],
				},
				{
					name: 'Davide',
					avatar: './img/avatar_8.jpg',
					visible: true,
					messages: [
						{
							date: '10/01/2020 15:30:55',
							message: 'Ciao, andiamo a mangiare la pizza stasera?',
							status: 'received',
						},
						{
							date: '10/01/2020 15:50:00',
							message: "No, l'ho già mangiata ieri, ordiniamo sushi!",
							status: 'sent',
						},
						{
							date: '10/01/2020 15:51:00',
							message: 'OK!!',
							status: 'received',
						},
					],
				},
			],
		}
	},
	watch: {
		search(newValue) {
			console.log(`new: ${newValue}`)
		},
	},
	computed: {
		currentContact: function () {
			return this.contacts[this.currentIndex]
		},
		currentChat() {
			return this.currentContact.messages
		},
	},
	methods: {
		isVisible(contact) {
			return contact.name.toLowerCase().includes(this.search.toLowerCase())
		},
		reply(messages) {
			setTimeout(() => {
				// creare il messaggio di risposta
				const message = {
					date: '10/01/2020 15:30:55',
					message: 'Ok!',
					status: 'received',
				}
				// pushare il messaggio nella chat attiva
				// console.log('this dentro setTimeout:', this)
				messages.push(message)
			}, 3000)
		},
		sendMessage() {
			console.log(this.messageText)

			// create l'oggetto del messaggio
			const message = {
				date: '10/01/2020 15:30:55',
				message: this.messageText,
				status: 'sent',
			}
			console.log(message)

			const messages = this.contacts[this.currentIndex].messages
			messages.push(message)
			// this.contacts[this.currentIndex].messages.push(message)
			// pushare il messaggio nella chat attiva

			this.messageText = ''
			console.log('this dentro al metodo:', this)
			this.reply(messages)
		},
	},
	beforeCreate() {
		console.log('BEFORE CREATE', this.contacts)
	},
	created() {
		console.log('CREATED', this.contacts)
	},
	beforeMount() {
		console.log('BEFORE MOUNT', this.currentIndex)
	},
	mounted() {
		console.log('MOUNTED', this.currentContact)
	},
	beforeUpdate() {
		console.log('BEFORE UPDATE')
	},
	updated() {
		console.log('UPDATED')
	},
	beforeUnmount() {
		// console.log('BEFORE UNMOUNT')
		alert('BEFORE UNMOUNT')
	},
	unmounted() {
		// console.log('UNMOUNTED')
		alert('UNMOUNTED')
	},
}).mount('#app')
