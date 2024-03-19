console.log('our team')

// creare l'array di oggetti: nome, ruolo, image
const teamMembers = [
	//array
	{
		nome: 'Wayne Barnett',
		ruolo: 'Founder & CEO',
		imgSrc: 'wayne-barnett-founder-ceo.jpg',
	},
	{
		nome: 'Angela Caroll',
		ruolo: 'Chief Editor',
		imgSrc: 'angela-caroll-chief-editor.jpg',
	},
	{
		nome: 'Walter Gordon',
		ruolo: 'Office Manager',
		imgSrc: 'walter-gordon-office-manager.jpg',
	},
	{
		nome: 'Angela Lopez',
		ruolo: 'Social Media Manager',
		imgSrc: 'angela-lopez-social-media-manager.jpg',
	},
	{
		nome: 'Scott Estrada',
		ruolo: 'Developer',
		imgSrc: 'scott-estrada-developer.jpg',
	},
	{
		nome: 'Barbara Ramos',
		ruolo: 'Graphic Designer',
		imgSrc: 'barbara-ramos-graphic-designer.jpg',
	},
]

teamMembers.forEach((el) => {
	el.imgSrc = './img/' + el.imgSrc
})

console.log(teamMembers)

// recupero dal dom la lista con classe team-members
const membersElement = document.querySelector('.team-members') // Object | null
console.log(membersElement)

// Stampare su console, per ogni membro del team, le informazioni di nome, ruolo e la stringa della foto

for (let i = 0; i < teamMembers.length; i++) {
	const member = teamMembers[i] // object
	const nome = member.nome // string
	const ruolo = member.ruolo // string
	const imgSrc = member.imgSrc // string

	console.log(nome, ruolo, imgSrc)

	// Stampare le stesse informazioni su DOM semplicemente come stringhe
	const liString = `
  <li class="member">
    <p>${nome}</p>
    <p>${ruolo}</p>
    <img src="${imgSrc}" alt="" />
  </li>
  ` // string

	membersElement.innerHTML += liString
}
